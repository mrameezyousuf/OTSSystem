@extends('master.master')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
          Create Center
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Candidate</a></li>
          <li class="breadcrumb-item active" aria-current="page">Candidate Listing</li>
          </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Manage Candidate</h4>
                <table class="table table-hover table-stripped table-borderd">
                    <thead class="text-center bg-dark text-white">
                        <tr>
                            <th>SNO</th>
                            <th>Region</th>
                            <th>Center</th>
                            <th>Candidate Name</th>
                            <th>CNIC</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                      @php
                        $sno=1;
                      @endphp
                      @foreach ($candidate as $candidate )
                        <tr>
                          <td>{{$sno++}}</td>
                          <td>{{$candidate->region_name}}</td>
                          <td>{{$candidate->center_name}}</td>
                          <td>{{$candidate->firstname}}</td>
                          <td>{{$candidate->cnic}}</td>
                          <td>{{$candidate->email}}</td>
                          <td>
                           <a href="#"> <i class="fa fa-edit"></i></a>
                            |
                            <a href="#"><i class="fa fa-list"></i></a>
                            |
                            <a href="#"><i class="fa fa-trash"></i></a>
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