<?php

namespace App\Http\Controllers;
use DB;
use App\Userjob;
use Illuminate\Http\Request;

class UserjobController extends Controller
{

    public function userjob()
    {
        $job = DB::table('jobs')->orderBy('id', 'DESC')->paginate(5);
        return view('user.userjob.alljobs',compact('job'));
    }
    public function appliedjobs()
    {
        $apply = DB::table('applications')
        ->join('users', 'users.id', '=', 'applications.user_id')
        ->join('jobs', 'jobs.id', '=', 'applications.job_id')
        ->select('users.name','users.id', 'applications.expected_salary', 'applications.created_at', 'users.file','jobs.company_name', 'users.txtMobile', 'jobs.location','jobs.salary', 'jobs.application_deadline', 'jobs.job_title')
        ->where('users.id', (auth()->user()->id))
        ->get();
        return view('user.userjob.appliedjobs', compact('apply'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Userjob $userjob)
    {
        //
    }


    public function edit(Userjob $userjob)
    {
        //
    }


    public function update(Request $request, Userjob $userjob)
    {
        //
    }


    public function destroy(Userjob $userjob)
    {
        //
    }
}
