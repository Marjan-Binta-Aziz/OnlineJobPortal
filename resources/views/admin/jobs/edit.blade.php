@extends('admin.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Job</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Job</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit a Jobs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="{{url('/job/update', $job->id)}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6 col-xl-12">
                        <div class="mb-3">
                          <div class="mb-3">
                            <label for="job_title" class="form-label">Job Title</label>
                            <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Enter Job Title" value = "{{$job->job_title}}">
                          </div>
                          <label for="company_name" class="form-label">Company Name</label>
                          <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name" value = "{{$job->company_name}}">
                        </div>
                        <div class="mb-3">
                          <div for="c_name" class="form-group mb-3 ">
                            <label class="form-label">Catagotry</label>
                            <div type="text" name="c_name" id="c_name">
                              <select  class="form-control" name="c_name" style="width:100%;" value = "{{$job->c_name}}" >
                                <option value="">Select Catagotry</option>
                                @foreach($cat as $all_cat)
                                <option value="{{$all_cat->c_name}}">{{$all_cat->c_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>           
                        </div>
                        <div class="mb-3">
                          <label for="employment_status"  class="form-label">Employment Status</label>
                          <input type="text" class="form-control" name="employment_status" id="employment_status" placeholder="Full-time/Part-time" value = "{{$job->employment_status}}">
                        </div>
                        <div class="mb-3">
                          <label for="location"  class="form-label">Job Location</label>
                          <input type="text" class="form-control" name="location" id="location" placeholder="Enter Job Area" value = "{{$job->location}}">
                        </div>
                        <div class="mb-3">
                          <label for="vacancy"  class="form-label">Vacancy</label>
                          <input type="text" class="form-control" name="vacancy" id="vacancy" placeholder="Enter Vacancy" value = "{{$job->vacancy}}">
                        </div>
                        <div class="mb-3">
                          <label for="educational_experiance" class="form-label">Educational Experiance</label>
                          <textarea class="form-control" name="educational_experiance" id="educational_experiance" rows="2" placeholder="Educational Experiance in details" value = "{{$job->educational_experiance}}"></textarea>
                        </div>                
                        <div class="mb-3">
                          <label for="experience_requirements" class="form-label">Experience Requirements</label>
                          <textarea type="text" class="form-control" name="experience_requirements" id="experience_requirements" rows="2" placeholder="Experience Requirements in details" value = "{{$job->experience_requirements}}"></textarea>
                        </div>                
                        <div class="mb-3">
                          <label for="additional_requirements" class="form-label">Additional Requirements</label>
                          <textarea type="text" class="form-control" name="additional_requirements" id="additional_requirements" rows="2" placeholder="Additional Requirements in details" value = "{{$job->additional_requirements}}"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="salary"  class="form-label">Salary</label>
                          <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter Amount" value = "{{$job->salary}}">
                        </div>    
                        <div class="mb-3">
                          <label for="published_on"  class="form-label">Published on</label>
                          <input type="date" class="form-control" name="published_on" id="published_on" placeholder="Enter Amount" value = "{{$job->published_on}}">
                        </div>              
                        <div class="mb-3">
                          <label for="application_deadline"  class="form-label">Application Deadline</label>
                          <input type="date" class="form-control" name="application_deadline" id="application_deadline" placeholder="Enter Amount" value = "{{$job->application_deadline}}">
                        </div>                
                        <div>
                            <button type="submit" class="btn btn-info">Submit</button>
                         </div><br> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection