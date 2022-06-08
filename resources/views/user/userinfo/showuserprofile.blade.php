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
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- About Me Box -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">User Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Full Name</strong>
                  <p class="text-muted">{{$all_user->name}}</p>
                  <hr>
                  <strong><i class="fas fa-book mr-1"></i> Email</strong>
                  <p class="text-muted">{{$all_user->email}}</p>
                  <hr>
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Phone</strong>
                  <p class="text-muted">{{$all_user->txtMobile}}</p>
                  <hr>
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Father's Name</strong>
                  <p class="text-muted">{{$all_user->father}}</p>
                  <hr>
                  <strong><i class="far fa-file-alt mr-1"></i> Mother's Name</strong>
                  <p class="text-muted">{{$all_user->mother}}</p>

                  <strong><i class="fas fa-book mr-1"></i> Date of Birth</strong>
                  <p class="text-muted">{{$all_user->dob}}</p>
                  <hr>
                  <strong><i class="fas fa-book mr-1"></i> Gender</strong>
                  <p class="text-muted">{{$all_user->sex}}</p>
                  <hr>
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Religion</strong>
                  <p class="text-muted">{{$all_user->religion}}</p>
                  <hr>
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Marital Status</strong>
                  <p class="text-muted">{{$all_user->cboMStatus}}</p>
                  <hr>
                  <strong><i class="far fa-file-alt mr-1"></i> Nationality</strong>
                  <p class="text-muted">{{$all_user->country}}</p>

                  <strong><i class="fas fa-book mr-1"></i> National Id</strong>
                  <p class="text-muted">{{$all_user->nid}}</p>
                  <hr>
                  <strong><i class="fas fa-book mr-1"></i> Passport Number</strong>
                  <p class="text-muted">{{$all_user->passport}}</p>
                  <hr>
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Blood Group</strong>
                  <p class="text-muted">{{$all_user->blood}}</p>
                  <hr>
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Resume</strong>
                  <p class="text-muted">{{$all_user->file}}</p>
                  <a href="{{ asset($all_user->file) }}" class="btn btn-general btn-white">Download CV</a>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </div>
  </div>
</div>
@endsection
