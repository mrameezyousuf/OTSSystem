@extends('master.master')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
          Create Department
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Setting</a></li>
          <li class="breadcrumb-item active" aria-current="page">Department</li>
          </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-6" style="margin:auto">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Department</h4>
            <form method="post" class="forms-sample" {{route('manage-department.store')}}>
                @csrf()
              <div class="form-group">
                <label for="exampleInputName1">Department Name</label>
                <input value="{{ old('department') }}" type="text" name="department" placeholder="Department Name" class="form-control" id="subject_name" placeholder="Name">
                @if($errors->has('department'))
                <span class="text-danger">{{ $errors->first('department') }}</span>
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
                <h4 class="card-title">Department Listing</h4>
                <table class="table table-hover table-stripped table-bordered">
                    <thead class="text-center bg-dark text-white">
                        <tr>
                            <th>SNO</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @php
                        $sno = 1
                        @endphp
                        @foreach ($department as $depart )
                            <tr>
                                <td>{{$sno++}}</td>
                                <td>{{$depart->department}}</td>
                                <td>
                                    @if ($depart->status==1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">In-Active</span>
                                    @endif
                                </td>
                                <td>
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <i class="fa fa-eye"></i>
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