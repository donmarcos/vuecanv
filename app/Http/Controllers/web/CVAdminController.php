<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CVAdminController extends Controller
{
    //
    public function index()
    {
        return view('cvadmin');
    }
}

