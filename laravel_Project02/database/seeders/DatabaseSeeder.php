<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Phi code Laravel',
            'email' => 'nguyennamphi99@gmail.com',
            'password' => Hash::make('password'),//mat khau la chu "password"
        ]);
    }
}
