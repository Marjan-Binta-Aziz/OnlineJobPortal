<?php

namespace App\Http\Controllers;
use DB;
use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        //
    }
    public function postjob()
    {
        $cat = DB::table('categories')->
        where('c_status', 'Active')->get();
    	return view('admin.jobs.postjob' ,compact('cat'));
    }

    public function managejob()
    {

        $job = DB::table('jobs')->get();
        return view('admin.jobs.managejob',compact('job'));
    }

    public function create()
    {
        {
            return view('admin.jobs.addjob');
        }
    }

    public function store(Request $request)
    {

        $data=array();
        $data['job_title']=$request->job_title;
        $data['company_name']=$request->company_name;
        $data['c_name']=$request->c_name;
        $data['employment_status']=$request->employment_status;
        $data['location']=$request->location;
        $data['vacancy']=$request->vacancy;
        $data['educational_experiance']=$request->educational_experiance;
        $data['experience_requirements']=$request->experience_requirements;
        $data['additional_requirements']=$request->additional_requirements;
        $data['salary']=$request->salary;
        $data['published_on']=$request->published_on;
        $data['application_deadline']=$request->application_deadline;
        DB::table('jobs')->insert($data);

        return redirect()->route('admin.managejob')
                        ->with('success','Job info created successfully.');
    }

    public function show($id)
    {
        $job = Job::find($id);
        return view('admin.jobs.showjob', compact('job'));
    }


    public function edit($id)
    {
        $job = Job::find($id);
        return view('admin.jobs.editjob', compact('job'));
    }



    public function update(Request $request,  $id)
    {
        $job = Job::find($request->id);
        $job->job_title= $request->job_title;
        $job->company_name = $request->company_name;
        $job->c_name = $request->c_name;
        $job->employment_status = $request->employment_status;
        $job->location = $request->location;
        $job->vacancy = $request->vacancy;
        $job->educational_experiance = $request->educational_experiance;
        $job->experience_requirements = $request->experience_requirements;
        $job->additional_requirements = $request->additional_requirements;
        $job->salary = $request->salary;
        $job->published_on = $request->published_on;
        $job->application_deadline = $request->application_deadline;
        $job->save();
        return redirect()->route('admin.managejob')
                        ->with('success','Categories info updated successfully');
    }



    public function destroy($id)
    {
        $job = Job::where('id',$id)->first();
        $job->delete();
        return redirect()->route('admin.managejob')
                        ->with('success','Job Info Delected Successfully');
    }



}
