@extends('welcome')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Subject </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="forms">ADD</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">EDIT</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">DELETE</a></li>
            
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row icons-list" style="text-align: center">
                <div class="col-sm-6 col-md-4 col-lg-3" >
                  <i class="mdi mdi-access-point" ></i> <b>Name of Subject</b> 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class=" mdi mdi-account"></i> <b>Subject code</b> 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-access-point-network"></i> <b>Semester</b> 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-account-box"></i> <b>Class</b> 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   Semi - Project
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   SP
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   4
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   IT0501
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:../../partials/_footer.html -->
    
    <!-- partial -->
  </div>
@endsection