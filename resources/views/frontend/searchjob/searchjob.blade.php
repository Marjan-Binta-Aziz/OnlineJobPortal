@extends('frontend.master')
@section('title')
Job Web| All Jobs
@endsection
@section('content')
<section id="jobs">
    <div class="container">
      <h3>All JOBS</h3>
      <div class="company-details">
        @foreach($job as $all_job)
        <div class="job-update">
          <h4><b>{{$all_job->job_title}}</b> </h4>
          <p>{{$all_job->company_name}}</p>
          <i class="fas fa-briefcase"></i><span> {{$all_job->location}}</span><br>
          <i class="fas fa-briefcase"></i><span> {{$all_job->salary}}</span><br>
          <p><i class="fas fa-angle-double-right"> Dadeline : </i>{{$all_job->application_deadline}} <a href="{{ route('front.singlejob',['id'=>$all_job->id]) }}" target="_blank">Read more</a></p>
        </div>
        @endforeach
      </div>


    </div>
  </section>

    </section>
@endsection
