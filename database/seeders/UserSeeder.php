<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role_id' => '1',
            'password' => Hash::make('password'),
        ]);

        
        
        // Editor 
        DB::table('users')->insert([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'role_id' => '2',
            'password' => Hash::make('password'),
        ]);

        
    // Organisation 
        DB::table('users')->insert([
            'name' => 'orgadmin',
            'email' => 'orgadmin@gmail.com',
            'role_id' => '3',
            'password' => Hash::make('password'),
        ]);
        // Organisation Editor 
        DB::table('users')->insert([
            'name' => 'orgeditor',
            'email' => 'orgeditor@gmail.com',
            'role_id' => '4',
            'password' => Hash::make('password'),
        ]);
        
        // Organisation Member 
        DB::table('users')->insert([
            'name' => 'orgmember',
            'email' => 'orgmember@gmail.com',
            'role_id' => '5',
            'password' => Hash::make('password'),
        ]);
        
        
        // Organisation User 
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
        ]);


        
    }
}
