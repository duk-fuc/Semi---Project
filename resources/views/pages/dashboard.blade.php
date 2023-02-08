@extends('welcome')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
     
      
    
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Top students</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> Subject </th>
                    <th> Class </th>
                    <th> Point </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> Doan Trung Quyen
                    </td>
                    <td> Semi - Project </td>
                    <td>
                      <label class="badge badge-gradient-success">IT0501</label>
                    </td>
                    <td> 80 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> Hoang Thu Thuy
                    </td>
                    <td> Semi - Project </td>
                    <td>
                      <label class="badge badge-gradient-warning">IT0501</label>
                    </td>
                    <td> 80 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> Tran Thanh Do
                    </td>
                    <td> Semi-Project </td>
                    <td>
                      <label class="badge badge-gradient-info">IT0501</label>
                    </td>
                    <td> 80 </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
  </div>
@endsection
