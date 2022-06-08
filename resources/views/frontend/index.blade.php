@extends('frontend.master')
@section('content')
        <div class="banner text-center" >
            <h1>JOBS AROUND YOU</h1>
            <p>WE HELP TO FIND YOUR DREAMS</p>
        </div>
        <form class="search-form" action="{{ route('search') }}" method="GET">
        <div class="search-job text-center">
        <input type="text" class="form-control" placeholder="Search Jobs" name="search">
        <input type="submit" class="btn btn-dark" value="Find Jobs">
        </div>
    </form>
        <!----top recuiters -->
        <section id="recruiters">
        <div class="contatiner text-center">
        <h4>TOP RECRUITERS</h4>
        <div id="logo">
          <a href=""><img src="{{asset('frontend/images/google.png')}}" alt="google logo" width="20px"></a>
          <a href=""><img src="{{asset('frontend/images/mail.png')}}" alt="mail logo" width="20px"></a>
          <a href=""><img src="{{asset('frontend/images/whatsapp.png')}}" alt="whatsapp logo" width="20px"></a>
          <a href=""><img src="{{asset('frontend/images/github.png')}}" alt="github logo" width="20px"></a>
        </div>
        </div>
    </section>
    <!------------Recent Jobs-------------------->
    <section id="jobs">
      <div class="container">
        <h3>RECENT JOBS</h3>
        @foreach($job as $all_job)
        <div class="company-details">
          <div class="job-update">
              <h4><b>{{$all_job->job_title}}</b> </h4>
            <p>{{$all_job->company_name}}</p>
            <i class="fas fa-briefcase"></i><span> {{$all_job->location}}</span><br>
            <i class="fas fa-briefcase"></i><span> {{$all_job->salary}}</span><br>
            <p><i class="fas fa-angle-double-right"> Dadeline : </i>{{$all_job->application_deadline}} <a href="{{ route('front.singlejob',['id'=>$all_job->id]) }}" target="_blank">Read more</a></p>
          </div>
        </div>
        @endforeach
        <ul class="page-link text-center">
            <div class="d-flex justify-content-center">
                {!! $job->links() !!}
            </div>
        </ul>
      </div>
    </section>

    <!-- Site Status  -->
    <section id="site-stats">
      <div class="container">
        <h3>JOB SITE STATS</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-6">
                <div class="stats-box">
                  <i class="fas fa-user-o"></i><span><small>100k</small></span>
                  <p>Job Seekers</p>
                </div>
              </div>

              <div class="col-6">
                <div class="stats-box">
                  <i class="fas fa-slideshare"></i><span><small>500 +</small></span>
                  <p>Employer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-6">
                <div class="stats-box">
                  <i class="fas fa-hand-peace-o"></i><span><small>10 +</small></span>
                  <p>Active Jobs</p>
                </div>
              </div>

              <div class="col-6">
                <div class="stats-box">
                  <i class="fas fa-building-o"></i><span><small>400 +</small></span>
                  <p>Employer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- App Banner -->
    <section id="app-banner" class="text-center">
      <h2>Find Jobs On Mobile, Download Jobclues App</h2>
      <!-- <img src="images/store.png" alt="applestore"> -->
      <img src="{{asset('frontend/images/apple.png')}}" alt="apple">
      <img src="{{asset('frontend/images/play.png')}}" alt="paly">
@endsection
