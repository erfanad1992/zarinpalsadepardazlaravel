<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $adminName="hi";
       // return view('admin.layouts.header',compact('adminName'));
    }
}
