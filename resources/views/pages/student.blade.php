@extends('welcome')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Student </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="form">ADD</a></li>
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
                  <i class="mdi mdi-access-point" ></i> <b>Full Name</b> 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class=" mdi mdi-account"></i> <b>Account</b> 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-access-point-network"></i> <b>Date of birth</b> 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-account-box"></i> <b>Student code</b> 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   Nguyen Quoc Khanh 
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   khanh
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   02/09/2003
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                   BH00114
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