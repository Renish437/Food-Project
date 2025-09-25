<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
     public function dashboard(){
        return view('backend.admin.dashboard');
    }
}
