<?php


namespace App\Repositories;

use App\Models\User;
use App\Traits\FileUploadTrait;

class ProfileRepository
{
    use FileUploadTrait;

    public function createOrUpdateProfile($data, $avatar, $id)
    {
        $profile = User::findOrFail($id);

        // ✅ Only update avatar if a new file is uploaded
        if ($avatar) {
            $data['avatar'] = $this->uploadFile(
                $avatar,
                'user',
                $profile->avatar // existing file
            );
        } else {
            // ✅ Prevent avatar from being set to null
            unset($data['avatar']);
        }

        $profile->update($data);

        return $profile;
    }
}
