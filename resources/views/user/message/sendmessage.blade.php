@extends('user.master')
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
              <li class="breadcrumb-item active">Contact</li>
            </ol>
          </div>
          <div class="col-sm-12">
            <section>
              <br>
              @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{$message}}</p>
            </div>
            @endif
          </section>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Message </h3>
              </div>
            <form action="{{url('/sendmessage')}}"  method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="company_name">User Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-hand-point-right"></i></span>
                    </div>
                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}" readonly>
                </div>
                </div>
                <div class="form-group">
                  <label for="company_email"> User Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" readonly>
                </div>
                </div>
                <div class="form-group">
                  <label for="company_phoneNo">Subject</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
                </div>
                <div class="form-group">
                  <label for="company_adderss">Body</label>
                  <div class="input-group">
                    <textarea name="body" id="" cols="50" rows="10"></textarea>
                </div>
                </div>
                  <section><br><br>
                    <div>
                    <button type="submit" class="btn btn-info">Send</button>
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
