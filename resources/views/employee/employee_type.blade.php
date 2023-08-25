@extends('master.master')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
          Create Employee Type
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Employee</a></li>
          <li class="breadcrumb-item active" aria-current="page">Employee Type</li>
          </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-6" style="margin:auto">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Employee Type</h4>
            <form method="post" class="forms-sample" {{route('employee-type.store')}}>
                @csrf()
              <div class="form-group">
                <label for="exampleInputName1">Employee Type</label>
                <input value="{{ old('subject_name') }}" type="text" name="employee_type" placeholder="Employee Type" class="form-control" id="subject_name">
                @if($errors->has('employee_type'))
                <span class="text-danger">{{ $errors->first('employee_type') }}</span>
                @endif
            </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12" style="margin:auto">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Employee Type</h4>
                <table class="table table-hover table-stripped table-bordered">
                    <thead class="text-center bg-dark text-white">
                        <tr>
                            <th>SNO</th>
                            <th>Employee Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @php
                        $sno = 1
                        @endphp
                        @foreach ($employee_type as $emp_type )
                            <tr>
                                <td>{{$sno++}}</td>
                                <td>{{$emp_type->employee_type}}</td>
                                <td>
                                    @if($emp_type->status==1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-success">In-Active</span>
                                    @endif
                                </td>
                                
                                <td>
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <i class="fa fa-view"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
  </div>
@endsection