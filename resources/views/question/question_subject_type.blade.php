@extends('master.master')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Enter Grammer Question Category
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Question Management</a></li>
          <li class="breadcrumb-item active" aria-current="page">Enter Grammer Question Category</li>
          </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-6" style="margin:auto">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Question Type</h4>
            <form method="post" class="forms-sample" {{route('QuestionMasterType.store')}}>
                @csrf()
              <div class="form-group">
                <label for="exampleInputName1">Grammer Question Type</label>
                <input value="{{ old('question_subject_type') }}" type="text" name="question_subject_type" placeholder="Question Type" class="form-control" id="question_subject_type" placeholder="Grammer Question Type">
                @if($errors->has('question_subject_type'))
                <span class="text-danger">{{ $errors->first('question_subject_type') }}</span>
                @endif
            </div>
              {{-- <div class="form-group">
                <label for="exampleInputEmail3">Question Type Code</label>
                <input value="{{ old('question_type_code') }}" name="question_type_code" type="text" placeholder="Subject Code" class="form-control" id="subject_code" placeholder="Email">
                @if($errors->has('question_type_code'))
                <span class="text-danger">{{ $errors->first('question_type_code') }}</span>
                @endif
            </div> --}}
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
                <h4 class="card-title">Enter Grammer Question Category</h4>
                <table class="table table-hover table-stripped table-bordered">
                    <thead class="text-center bg-dark text-white">
                        <tr>
                            <th>SNO</th>
                            <th>Question Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @php
                        $sno = 1
                        @endphp
                        @foreach ($QuestionMastersType as $question_type )
                        <tr>
                            <td>{{$sno++}}</td>
                            <td>{{$question_type->question_subject_type}}</td>
                            <td>
                                @if($question_type->status==1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">In-Active</span>
                                @endif
                            </td>
                            <td>
                            <button class="btn btn-warning btn-rounded btn-icon btn-sm"> <i class="fa fa-edit"></i></button>
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