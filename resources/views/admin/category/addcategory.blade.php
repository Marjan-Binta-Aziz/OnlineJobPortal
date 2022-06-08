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
              <li class="breadcrumb-item active">Category</li>
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
                <h3 class="card-title">Add Category</h3>
              </div>
            <form action="{{url('/category/store')}}"  method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="c_name">Category Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-hand-point-right"></i></span>
                    </div>
                    <input type="text" class="form-control" name="c_name" id="c_name" placeholder="Input Cat Name">      
                </div>
                </div>
                <section> <br>
                <label for="c_status">Job Status</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="c_status" id="c_status" value="Active" checked>
                    <label class="form-check-label" for="active">Active</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="c_status" id="c_status" value="Inactive">
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