@extends('user.master')

@section('content')
<div class="content-wrapper">
    <div class="single-head">
  <div class="page">
    <div class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
          <div class="container-xl">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('user.showuserprofile')}}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Manage Profile
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./empty.html" >
                      View Resume
                      </a>
                      <a class="dropdown-item" href="./empty.html" >
                      Post a Resume
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cards">
      <div class="col-md-12">
        <form>
          <div class="card-header">
            <h4 class="card-title">User Profile</h4>
          </div>
          <div class="single-head">
            <div class="container p-0">
                <a href="{{ url('/user/profile/edit', Auth::user()->id)}}" class="btn btn-primary">Update Profile</a>
            </div>
            </div>
             <!-- SINGLE JOB HEAD SECTION START -->

             <div class="single-head">
                <div class="container p-0">
                    <h1 class="single-title">Profile of {{$all_user->name}}</h1>
                </div>
            </div>
            <!-- SINGLE JOB HEAD SECTION END -->

            <!-- SINGLE JOB START -->
            <section class="single-job blog-section">
                <div class="container p-md-0">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <h5 class="mb-3">User Address:{{$all_user->address}}</h5>
                            <p class="mb-4"><strong>Name:</strong>{{$all_user->name}}</p>
                            <p class="mb-5"><strong>Email:</strong>{{$all_user->email}}</p>
                            <p class="mb-6"><strong>phone:</strong>{{$all_user->phone}}</p>
                            <p><strong>Resume:</strong>{{$all_user->file}}</strong></p>
                    </div>
                </div>
            </section>
      </div>
      </div>
  </div>
</div>
@endsection
