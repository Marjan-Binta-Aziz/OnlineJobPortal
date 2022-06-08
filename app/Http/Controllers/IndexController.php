<?php

namespace App\Http\Controllers;
use DB;
use App\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $cat = DB::table('categories')->get();
        $job = DB::table('jobs')->orderBy('id', 'DESC')->paginate(5);
    	return view('frontend.index',compact('cat', 'job'));

    }

        public function frontblog()

        {
            $blog = DB::table('blogs')->get();
            $cat = DB::table('categories')->get();
                return view('frontend.blog.blog', compact('blog', 'cat'));
        }

    public function admin()
    {

    	return view('admin.index.index');
    }

}
