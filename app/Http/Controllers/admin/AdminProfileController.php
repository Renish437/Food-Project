<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    //
    public function store(Request $request)
    {
        //
       $request->validate([
        'current_password'=>'nullable|image',
        'new_password'=>'required|confirmed',


       ]);
    }

       public function update(Request $request, string $id)
    {
        //
       $request->validate([
        'avatar'=>'nullable|image',
        'name'=>'required',
        'email'=>'required',

       ]);


    }

}
