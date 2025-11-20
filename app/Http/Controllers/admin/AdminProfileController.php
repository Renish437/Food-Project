<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    //
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'current_password' => 'nullable|current_password',
            'new_password' => 'required|confirmed',


        ]);

        auth()->user()->update([
            'password' => Hash::make($validated['new_password']),
        ]);


        return redirect()->back();
    }

    public function update(Request $request, string $id)
    {
        //
        $validated =  $request->validate([
            'avatar' => 'nullable|image',
            'name' => 'required',
            'email' => 'required',

        ]);
        User::updateOrCreate(
            ['id' => auth()->user()->id],
            [
            'name'=>$validated['name'],
            'email'=>$validated['email']
            ]
        );
         return redirect()->back();
    }
}
