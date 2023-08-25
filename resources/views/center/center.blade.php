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
          <li class="breadcrumb-item active" aria-current="page">Regions</li>
          </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Manage Center</h4>
            <form method="post" action="{{url('save-center')}}" class="form-sample">
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
                        @foreach($regions as $regions)
                            <option value="<?= $regions->id ?>"><?= $regions->region_name ?></option>
                        @endforeach
                      </Select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Center Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="center_name" placeholder="Center Name" id="center_name" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Center Code</label>
                    <div class="col-sm-9">
                      <input type="text" name="center_code" placeholder="Center Code" id="center_code" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input class="form-control" placeholder="Enter Email" id="email" name="email"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
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
                    <label class="col-sm-3 col-form-label">Center Addres</label>
                    <div class="col-sm-9">
                      <textarea name="address" placeholder="Enter Current Address" class="form-control"></textarea>
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