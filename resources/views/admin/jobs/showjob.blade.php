@extends('admin.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Job Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Job Profile</li>
            </ol>
          </div>
        </div>
      </div>
<!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- About Me Box -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Job Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Job Title</strong>
                <p class="text-muted">{{$job->job_title}}</p>
                <hr>
                <strong><i class="fas fa-book mr-1"></i> Company name</strong>
                <p class="text-muted">{{$job->company_name}}</p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Catagory Name</strong>
                <p class="text-muted">{{$job->c_name}}</p>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Employment Status</strong>
                <p class="text-muted">{{$job->employment_status}}</p>
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Job Location</strong>
                <p class="text-muted">{{$job->location}}</p>
              </div>
            </div>
          </div>         
        </div>
      </div>
    </section>
  </div>
@endsection