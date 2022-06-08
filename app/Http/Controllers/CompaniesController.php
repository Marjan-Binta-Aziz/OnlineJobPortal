<?php

namespace App\Http\Controllers;
use DB;
use App\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function companies()
    {
        $company = DB::table('companies')->get();
        $cat = DB::table('categories')->get();
        return view('frontend.company.company', compact('company', 'cat'));
    }

    public function addcompanies()
    {

    	return view('admin.companies.addcompanies');
    }
    public function allcompanies()
    {
        $companies = DB::table('companies')->get();
        return view('admin.companies.allcompanies', compact('companies'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=array();
        $data['company_name']=$request->company_name;
        $data['company_email']=$request->company_email;
        $data['company_phoneNo']=$request->company_phoneNo;
        $data['company_adderss']=$request->company_adderss;
        $data['company_status']=$request->company_status;
        DB::table('companies')->insert($data);

        return redirect()->route('admin.addcompanies')
                        ->with('success','New Company added successfully.');
    }
    public function show(Companies $companies)
    {
        //
    }


    public function edit($id)
    {
        $companies = Companies::find($id);
        return view('admin.companies.editcompanies',compact('companies'));
    }


    public function update(Request $request, $id)
    {
        $companies = Companies::find($request->id);
        $companies->company_name= $request->company_name;
        $companies->company_email= $request->company_email;
        $companies->company_phoneNo= $request->company_phoneNo;
        $companies->company_adderss= $request->company_adderss;
        $companies->company_status= $request->company_status;
        $companies->save();
        return redirect()->route('admin.allcompanies')
                        ->with('success','Companies info updated successfully');
    }

    public function destroy($id)
    {
        $companies = Companies::where('id',$id)->first();
        $companies->delete();
        return redirect()->route('admin.allcompanies')
                        ->with('success','Companies Info Delected Successfully');
    }
}
