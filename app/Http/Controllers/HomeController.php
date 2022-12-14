<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class HomeController extends Controller
{
    //
    public function index(){
        return view('home',['data'=> Course::all()]);
    }

    public function viewCourse($id){
        $data['item'] = Course::find($id);
        return view("admin/viewCourse",$data);
    }
}
