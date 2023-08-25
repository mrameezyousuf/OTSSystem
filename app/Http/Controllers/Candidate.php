<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\Regions;
use App\Models\Centers;
use DB;
use Illuminate\Support\Facades\Mail;

class Candidate extends Controller
{
    public function index(){
        $regions=Regions::orderBy('id','desc')->get();
        $center=Centers::orderBy('id','desc')->get();
        return view('candidate.candidate',compact('regions','center'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'center_id'      =>'required',
            'region_id'      => 'required',
            'employee_no'    => 'required',   
            'firstname'      => 'required',
            'lastname'       => 'required',
            'cnic'           => 'required',
            'contact'        => 'required',
            'email'          => 'required',
     ]);
     $candidate = new Candidates();
     $input = $request->all();
     $candidate = Candidates::create($input);
     if($candidate){
        Mail::send('email.email',function($message){
            $message->to('rameezyousuf135@gmail.com',"Online Testing System")
            ->subject('Registration Email');
        });
        return redirect()->back()->with('success', 'Candidate created successfully');  
     }
     

    }

    public function candidate_listing(){
        $candidate = DB::table('manage_candidate')
        ->select('manage_candidate.id','manage_candidate.employee_no','manage_candidate.firstname'
        ,'manage_candidate.lastname','manage_candidate.cnic','manage_candidate.contact','manage_candidate.email'
        ,'manage_candidate.status','manage_candidate.is_delete','regions.region_name','centers.center_name')
        ->join('regions','regions.id','=' ,'manage_candidate.region_id')
        ->join('centers','centers.id' ,'=','manage_candidate.center_id')
        ->where('manage_candidate.is_delete',0)
        ->get();
        return view('candidate.candidate_listing',compact('candidate'));
    }
}
