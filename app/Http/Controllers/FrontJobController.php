<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class FrontJobController extends Controller
{
    public function alljob()
    {
        $job = DB::table('jobs')->orderBy('id', 'DESC')->paginate(5);
        $cat = DB::table('categories')->get();
        return view('frontend.alljob.alljob',compact('job', 'cat'));
    }

    public function singlejob($id)
    {
        $job = DB::table('jobs')->
        where('id', $id)->get();
        $cat = DB::table('categories')->get();
        $data = DB::table('applications')->where('job_id', $id)->get();
        $app=false;

      foreach($data as $d)
      {
          if($d->user_id==strval(auth()->user()->id))

          {
              $app=true;
          }
      }
    	return view('frontend.alljob.singlejob',compact('job', 'app', 'cat'));
    }

    public function search(Request $request)
    {
        $title = $request->search;
        $cat = DB::table('categories')->get();
        $job = DB::table('jobs')->where('job_title', 'LIKE', '%'.$title.'%')->get();
        return view('frontend.searchjob.searchjob',compact('job', 'cat'));
    }
}
