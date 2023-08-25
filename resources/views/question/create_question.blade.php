@extends('master.master')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
          Create Center
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Setting</a></li>
          <li class="breadcrumb-item active" aria-current="page">Create Question</li>
          </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Manage Question</h4>
            <form method="post" action="{{url('save-center')}}" class="form-sample">
              @csrf
              <p class="card-description">
                Personal info
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Subject</label>
                    <div class="col-sm-9">
                      <Select class="form-control" name="subject_id" id="subject_id">
                        <option value="">Select Subject</option>
                        @foreach($Subjects as $subejcts)
                            <option value="<?= $subejcts->id ?>"><?= $subejcts->subject_name ?></option>
                        @endforeach
                      </Select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 master_question">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Question Master Type</label>
                    <div class="col-sm-9">
                      <Select class="form-control" name="subject_id" id="subject_id">
                        <option value="">Select Subject</option>
                        @foreach($QuestionMastersType as $types)
                            <option value="<?= $types->id ?>"><?= $types->question_subject_type ?></option>
                        @endforeach
                      </Select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 question_type">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Question Type</label>
                    <div class="col-sm-9">
                      <Select class="form-control" name="subject_id" id="subject_id">
                        <option value="">Select Subject</option>
                        @foreach($question_type as $type)
                            <option value="<?= $type->id ?>"><?= $type->question_type ?></option>
                        @endforeach
                      </Select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <label>Enter Question</label>
                <div class="col-md-12">
                  <textarea rows="7" placeholder="Enter Question" class="form-control"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection