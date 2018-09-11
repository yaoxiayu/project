<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //商家首页
    public function index()
    {
      return view('business.index');
    }
}
