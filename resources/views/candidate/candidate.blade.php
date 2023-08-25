@extends('master.master')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
          Create Center
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Manage Candidate</a></li>
          <li class="breadcrumb-item active" aria-current="page">Create Candidate</li>
          </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Candidate</h4>
            <form method="post" action="{{url('save-candidate')}}" class="form-sample">
              @csrf
              <p class="card-description">
                Personal info
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Region</label>
                    <div class="col-sm-9">
                      <Select class="form-control" name="region_id" id="region_id">
                        <option value="">Select Region</option>
                        @foreach ($regions as $region )
                        <option value="<?= $region->id ?>"><?= $region->region_name ?></option>
                            
                        @endforeach
                      </Select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Center</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="center_id">
                        <option>Select Center</option>
                        @foreach ($center as $center )
                        <option value="<?= $center->id ?>"><?= $center->center_name ?></option>
                            
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Employee Number</label>
                    <div class="col-sm-9">
                      <input type="text" name="employee_no" placeholder="Employee Number" id="employee_no" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Firstname</label>
                    <div class="col-sm-9">
                      <input class="form-control" placeholder="Firstname" id="firstname" name="firstname"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Lastname</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">CNIC</label>
                    <div class="col-sm-9">
                      <input type="text" name="cnic" placeholder="CNIC" id="cnic" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Contact</label>
                      <div class="col-sm-9">
                        <input type="text" name="contact" placeholder="Contact" id="contact" class="form-control">
                      </div>
                    </div>
                  </div>

                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="text" name="email" placeholder="Email" id="email" class="form-control">
                      </div>
                    </div>
                  </div>
                <button class="btn btn-primary">Save Center</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection