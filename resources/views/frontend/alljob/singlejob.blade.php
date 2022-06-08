@extends('frontend.master')
@section('title')
Job Web| All Jobs
@endsection
@section('content')

<div class="col-sm-6">
    <section>
      <br>
      @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
    @endif
  </section>
  </div>
<section id="jobs">
    <div class="container">
      <h3>All JOBS</h3>
      <div class="company-details">
        @foreach($job as $all_job)
        <div class="job-update">
          <h4><b>{{$all_job->job_title}}</b> </h4>
          <h5>{{$all_job->company_name}}</h5>
          <i class="fas fa-briefcase"></i><span> {{$all_job->vacancy}}</span><br>
          <i class="fas fa-graduation-cap"></i><span>{{$all_job->educational_experiance}}</span><br>
            <i class="fas fa-lira-sign"></i><span> {{$all_job->salary}}</span><br>
            <i class="fas fa-location-arrow"></i><span> {{$all_job->location}}</span><br>
            <br><br>
            <p><i class="fas fa-angle-double-right"> Experience Requirement:</i>{{$all_job->experience_requirements}}</p>
            <p><i class="fas fa-angle-double-right"> Vacancy :</i>{{$all_job->vacancy}}</p>
            <p><i class="fas fa-angle-double-right"> Employment Status :</i>{{$all_job->employment_status}}</p>
            <p><i class="fas fa-angle-double-right"> Compensation & Other Benefits :</i>{{$all_job->additional_requirements}}</p>
            <p><i class="fas fa-angle-double-right"> Additional Requirements : </i>{{$all_job->additional_requirements}}
            <p><i class="fas fa-angle-double-right"> Published Date : </i>{{$all_job->published_on}}
            <p><i class="fas fa-angle-double-right"> Deadline :</i>{{$all_job->application_deadline}}</p>
        </div>

        @if($app)
        <p style="color: red">You have already applied this Job.</p>
        @else
        @if (Auth::user())

        <a href="javascript:void(0)" id="apply{{$all_job->id}}" data-toggle="modal" data-target="#apply"  class="btn btn-block apply-btn d-flex align-items-center justify-content-center mb-5">
            Apply Now <i class="icon-arrow-right ml-3"></i>
        </a>
<br>
        @else
        <a>
            You Have to <a href="{{ route('login') }}" target="_blank"> login </a> first to apply online <i class="icon-arrow-right ml-3"></i>
        </a>
        @endif
        @endif
        @endforeach
    </div>
    </section>

    @if (Auth::user())
    <div class="modal fade" id="apply" tabindex="-1" aria-labelledby="apply" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="login-form" method="POST" action="{{ url('/user/job/apply', $all_job->id) }}">
                        @csrf
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <a class="" href="{{ route('frontend.index') }}">
                                    <img src="{{asset('frontend/images/logo2.png')}}" width="70" alt="logo-black" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" readonly name="email" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="hidden" id="job_id" name="job_id" value="{{$all_job->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="expected_salary">Expected Salary*</label>
                                    <input type="text" class="form-control" name="expected_salary">
                                </div>
                                Cover Letter(optional)
                                <div class="form-group">
                                    <textarea name="cover" id="coverletter" cols="52.5" rows="5"></textarea>
                                </div>

                                {{-- <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-login">Send</button>
                                </div> --}}


                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Apply</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endif
@endsection
