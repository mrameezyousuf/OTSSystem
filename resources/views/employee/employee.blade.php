@extends('master.master')
@section('content')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{asset('external_js/employee.js')}}"></script>

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
          Create Center
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Manage Employee</a></li>
          <li class="breadcrumb-item active" aria-current="page">Employee</li>
          </ol>
      </nav>
    </div>
    <form method="post" action="{{url('store-employee')}}" class="form-sample" enctype="multipart/form-data">
      @csrf
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Manage Center</h4>
            <hr/>
           
             
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Region</label>
                    <div class="col-sm-9">
                      <Select class="form-control" name="region_id" id="region_id">
                        <option value="">Select Region</option>
                        @foreach ($regions as $region )
                          <option value="{{$region->id}}">{{$region->region_name}}</option>
                        @endforeach
                      </Select>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Designation</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="designation_id" id="designation_id">
                        <option value="">Employee type</option>
                        @foreach ($employee_type as $employee )
                          <option value="{{$employee->id}}">{{$employee->employee_type}}</option>
                          
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Department</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="department_id">
                        <option value="">Select Department</option>
                        @foreach ($department as $depart)
                          <option value="{{$depart->id}}">{{$depart->department}}</option>
                          
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>  

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Employee Number</label>
                    <div class="col-sm-9">
                      <input type="text" name="employee_no" placeholder="Employee Number" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Grade</label>
                    <div class="col-sm-9">
                      <input type="text" name="grade" placeholder="Grade" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Joining Date</label>
                    <div class="col-sm-9">
                      <input type="date" name="joining_date" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Firstname</label>
                    <div class="col-sm-9">
                      <input type="text" name="firstname" placeholder="Firstname" id="firstname" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Lastname</label>
                    <div class="col-sm-9">
                      <input class="form-control" placeholder="Lastname" id="lastname" name="lastname"/>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Contact</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">CNIC</label>
                    <div class="col-sm-9">
                      <input type="text" name="cnic" id="cnic" placeholder="CNIC" class="form-control">
                    </div>
                  </div>
                </div>

                
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">CNIC Front</label>
                    <div class="col-sm-9">
                      <input type="file" name="cnic_front" id="cnic" placeholder="CNIC" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">CNIC Back</label>
                    <div class="col-sm-9">
                      <input type="file" name="cnic_back" id="cnic" placeholder="CNIC" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Profile Picture</label>
                    <div class="col-sm-9">
                      <input type="file" name="profile_image" id="profile_image" placeholder="CNIC" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">CNIC Expiray</label>
                    <div class="col-sm-9">
                      <input type="month" name="cnic_expiray" id="cnic_expiray"  class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
               
             


              

                
              </div>
           
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Job Detail</h4>
            <hr/>
             
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Shift</label>
                    <div class="col-sm-9">
                      <Select class="form-control" name="shift_id" id="shift_id">
                       <option value="">Select Shift</option>
                       <option value="1">Morning</option>
                       <option value="2">Evening</option>
                       <option value="3">Night</option>
                      </Select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Timing</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" name="timing">
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Payroll & Accounts Information</h4>
            <hr/>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Basic Salary</label>
                    <div class="col-sm-9">
                     <input type="text" name="basic_salary" placeholder="Basic Salary" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Allowance</label>
                    <div class="col-sm-9">
                      <input type="text" name="allowance" placeholder="Allowance" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">PAF  Deduction</label>
                    <div class="col-sm-9">
                      <input type="text" name="paf_deduction" class="form-control" placeholder="PAF Deduction">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Bank Account Number</label>
                    <div class="col-sm-9">
                      <input type="text" name="account_no" placeholder="Bank Account Number" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Account Title</label>
                    <div class="col-sm-9">
                      <input type="text" name="account_title" placeholder="Account Title" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Bank Name</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="bank_id">
                        <option value="">Select Bank</option>
                        <option value="1">Meezan</option>
                        <option value="2">Alfalah</option>
                        <option value="3">HBL</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Check Image</label>
                    <div class="col-sm-9">
                      <input type="file" name="cheque_img"  class="form-control">
                    </div>
                  </div>
                </div>


              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Educational Background</h4>
            <hr/>
             
              <div class="row">
                <div class="container">
                  <div class="row clearfix">
                    <div class="col-md-12">
                      <table class="table table-bordered table-hover" id="tab_logic">
                        <thead class="bg-dark text-white">
                          <tr>
                            <th class="text-center"> # </th>
                            <th class="text-center"> Institute </th>
                            <th class="text-center"> Passing Year </th>
                            <th class="text-center"> Grade </th>
                            <th class="text-center"> Degree Title </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr id='addr0'>
                            <td>1</td>
                            <td><input type="text" name='institute[]'  placeholder='Enter Institute' class="form-control"/></td>
                            <td><input type="text" name='passing_year[]' placeholder='Enter Passing Year' class="form-control"/></td>
                            <td><input type="text" name='grades[]' placeholder='Enter Grade' class="form-control" /></td>
                            <td><input type="text" name='degree_title[]' placeholder='Degree Title' class="form-control total"/></td>
                          </tr>
                          <tr id='addr1'></tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                  <div class="row clearfix mt-2">
                    <div class="col-md-12">
                      <button type="button" id="add_row" class="btn btn-success pull-left">Add Row</button>
                      <button type="button" id='delete_row' class="pull-right btn btn-danger">Delete Row</button>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
      </div>
    </div>
      <button class="btn btn-primary" type="submit">Save employee</button>
  </form>

  </div>
@endsection