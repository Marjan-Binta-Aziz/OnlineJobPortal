@extends('admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Companies</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Companies</h3>
              </div>
            <form action="{{url('/companies/update' , $companies->id)}}"  method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="company_name">Company Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-hand-point-right"></i></span>
                    </div>
                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Input Name" value="{{$companies->company_name}}">      
                </div>
                </div>
                <div class="form-group">
                  <label for="company_email">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" name="company_email" id="company_email" placeholder="Input Email" value="{{$companies->company_email}}">      
                </div>
                </div>
                <div class="form-group">
                  <label for="company_phoneNo">Phone No</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" name="company_phoneNo" id="company_phoneNo" placeholder="Input Phone No" value="{{$companies->company_phoneNo}}">      
                </div>
                </div>
                <div class="form-group">
                  <label for="company_adderss">Address</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa fa-address-card"></i></span>
                    </div>
                    <input type="text" class="form-control" name="company_adderss" id="company_adderss" placeholder="Input Location" value="{{$companies->company_adderss}}">      
                </div>
                </div>
                <section> <br>
                <label for="company_status">Company Status</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="company_status" id="company_status" value="Active">
                    <label class="form-check-label" for="active">Active</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="company_status" id="company_status" value="Inactive">
                    <label class="form-check-label" for="inactive">Inactive</label>
                  </div>
                  </section>
                  <section><br><br>
                    <div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </div>
            </form>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection