<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()

    {

        $data = DB::table('applications')
        ->join('users', 'users.id', '=', 'applications.user_id')
        ->join('jobs', 'jobs.id', '=', 'applications.job_id')
        ->select('users.name', 'users.id', 'users.file','applications.email','applications.cover', 'jobs.title', 'jobs.user_id', 'applications.expected_salary')
        ->where('jobs.user_id', (auth()->user()->id))
        ->get();
        return view('employee.application.application',compact('data'));

}



    public function store(Request $request)
    {
        $data=array();
        $data['email']=$request->email;
        $data['user_id']=$request->user_id;
        $data['job_id']=$request->job_id;
        $data['expected_salary']=$request->expected_salary;
        $data['cover']=$request->cover;
        DB::table('applications')->insert($data);

        return redirect()->back()
                        ->with('success','You Have successfully Applied for this Job');
    }

    public function downloadRepo(Request $request, $id)
    {
        $repo = User::find($id);
        $pathToFile = public_path($repo->file);
        $name = time().'-'.'CV.pdf';
        $headers = ['Content-Type: application/pdf'];
        return response()->download($pathToFile, $name, $headers);
    }
}
