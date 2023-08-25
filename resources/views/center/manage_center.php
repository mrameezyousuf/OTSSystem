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
                <table class="table table-hover table-stripped table-borderd">
                    <thead>
                        <tr>
                            <th>SNO</th>
                            <th>Region Code</th>
                            <th>Region Name</th>
                            <th>Center Name</th>
                            <th>Center Code</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection