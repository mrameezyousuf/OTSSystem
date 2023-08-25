<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regions;
use App\Models\Centers;
use App\Models\EmployeeTypes;
use App\Models\Departments;
use App\Models\Employees;
use App\Models\JobDetails;
use App\Models\Educations;
use App\Models\AccountsPayrolls;
class Employee extends Controller
{
    public function create(){
        $regions=Regions::orderBy('id','desc')->get();
        $center=Centers::orderBy('id','desc')->get();
        $department=Departments::orderBy('id','desc')->get();
        $employee_type=EmployeeTypes::orderBy('id','desc')->get();
        return view('employee.employee',compact('regions','center','employee_type','department'));
    }

    public function store(Request $request){
        
        // cnic front
        $cnic_front = time().'.'.$request->cnic_front->extension();  
        $cnic_front_image = $request->cnic_front->move(public_path('cnic_front'), $cnic_front);
           
        // cnic back
        $cnic_back = time().'.'.$request->cnic_back->extension();  
     
        $cnic_back_image = $request->cnic_back->move(public_path('cnic_back'), $cnic_back);

        // Profile pic
        $profile_image = time().'.'.$request->profile_image->extension();  
     
        $user_profile_image = $request->profile_image->move(public_path('employee_image'), $profile_image);
        $employee = new Employees();
        $employee->region_id                  = $request->region_id;
        $employee->designation_id             = $request->designation_id;
        $employee->department_id              = $request->department_id;
        $employee->employee_no                = $request->employee_no;
        $employee->grade                      = $request->grade;
        $employee->joining_date               = $request->joining_date;   
        $employee->firstname                  = $request->firstname;        
        $employee->lastname                   = $request->lastname;
        $employee->contact                    = $request->contact;   
        $employee->cnic                       = $request->cnic;
        $employee->cnic_expiray               = $request->cnic_expiray;
        $employee->cnic_front                 = $cnic_front ;
        $employee->cnic_back                  = $cnic_back;
        $employee->profile_image              = $profile_image;
        $create_employee = $employee->save();
        $employee_id = $employee->id;
        if($create_employee){
           $job_detail = new JobDetails();

           $job_detail->employee_id            = $employee_id;
           $job_detail->shift_id               = $request->shift_id;
           $job_detail->timing                 = $request->timing;
          $job_details = $job_detail->save();
          if($job_details){
             $cheque_img = time().'.'.$request->cheque_img->extension();  
             $cheque_image = $request->cheque_img->move(public_path('cheque_img'), $cnic_front);
            $accounts = new AccountsPayrolls();
            $accounts->employtee_id           = $employee_id;
            $accounts->basic_salary           = $request->basic_salary;
            $accounts->allowance              = $request->allowance;
            $accounts->paf_deduction          = $request->paf_deduction;
            $accounts->account_no             = $request->account_no;
            $accounts->bank_id                = $request->bank_id;
            $accounts->cheque_img             = $cheque_image;
            $accountsPayroll = $accounts->save();

            if($accountsPayroll){
                
                $i = 0;
                $employee_id             = $employee->id;
                $institute               = $request->institute;
                $passing_year            = $request->passing_year;
                $grades                  = $request->grades;
                $degree_title            = $request->degree_title;
                
                foreach($institute as $row)
                {
                    $input['employee_id']       =  $employee_id;
                    $input['institute']         = $institute[$row];
                    $input['passing_year ']     = $passing_year[$row];
                    $input['grade']             = $grades[$row];
                    $input['degree_title']      = $degree_title[$row];
                    Educations::create($input);
                
                }
                
            }
          }
        }
        
    }
}
