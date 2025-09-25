<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
        'email'=>'admin@gmail.com',
        'name'=>'admin',
        'password'=>Hash::make('admin123'),
        'role'=>'admin'
        ]);
    }
}
