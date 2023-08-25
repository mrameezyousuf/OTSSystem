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
                    <thead class="text-center">
                        <tr>
                            <th>SNO</th>
                            <th>Region Code</th>
                            <th>Region Name</th>
                            <th>Center Name</th>
                            <th>Center Code</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @php
                            $sno = 1
                        @endphp
                        @foreach($centers as $centers)
                           <tr>
                                <td>{{$sno++}}</td> 
                                <td>{{$centers->region_code}}</td>
                                <td>{{$centers->region_name}}</td>
                                <td>{{$centers->center_name}}</td>
                                <td>{{$centers->region_code}}</td>
                                <td>{{$centers->email}}</td>
                                <td>
                                    <i class="fa fa-edit"></i>
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