<?php

namespace App\Http\Controllers;

use DB;
use App\usercompanies;
use Illuminate\Http\Request;

class UserCompaniesController extends Controller
{

    public function usercompanies()
    {
        $companies = DB::table('companies')->get();
        return view('user.usercompanies.usercompanies', compact('companies'));
    }


    public function appliedcompanies()
    {
        $apply = DB::table('applications')
        ->join('users', 'users.id', '=', 'applications.user_id')
        ->join('jobs', 'jobs.id', '=', 'applications.job_id')
        ->select('users.name', 'users.email','users.id', 'applications.expected_salary', 'applications.created_at', 'users.file','jobs.company_name', 'users.txtMobile', 'jobs.location','jobs.salary', 'jobs.application_deadline', 'jobs.job_title')
        ->where('users.id', (auth()->user()->id))
        ->get();

        return view('user.usercompanies.appliedcompanies',compact('apply'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(usercompanies $usercompanies)
    {
        //
    }


    public function edit(usercompanies $usercompanies)
    {
        //
    }

    public function update(Request $request, usercompanies $usercompanies)
    {
        //
    }


    public function destroy(usercompanies $usercompanies)
    {
        //
    }
}
