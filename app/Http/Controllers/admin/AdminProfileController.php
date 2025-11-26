<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Services\PasswordUpdateService;
use App\Services\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    //
    protected $profileService, $passwordUpdateService;

    public function __construct(ProfileService $profileService, PasswordUpdateService $passwordUpdateService)
    {
        $this->profileService = $profileService;
        $this->passwordUpdateService = $passwordUpdateService;
    }

     public function store(PasswordUpdateRequest $request)
    {

        try {
            $this->passwordUpdateService->updatePassword($request->validated());
            return redirect()->back()->with('success', 'Password Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['current_password' => $e->getMessage()]);
        }
    }

     public function update(ProfileUpdateRequest $request, string $id)
    {
        // Pass data and files to the service
        $this->profileService->saveProfile($request->validated(), $request->file('avatar'), $id);
        return redirect()->back()->with('success', 'Profile Updated successfully');
    }
}
