<?php


namespace App\Repositories;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordUpdateRepository
{


    public function updatePassword($data)
    {

      $user_id = Auth::id();
    $user = User::findOrFail($user_id);

    // Check if the current password is correct
    if (!Hash::check($data['current_password'], $user->password)) {
        throw new \Exception('The current password is incorrect.');
    }

    // Update the password
    $user->password = Hash::make($data['new_password']);
    $user->save();

    return $user;
    }
}
