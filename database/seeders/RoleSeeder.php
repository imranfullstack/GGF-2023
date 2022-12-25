<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        

        DB::table('roles')->insert([
            'name' => 'admin',
            'slug' => 'admin',
        ]);
        // --- Org Admin
        DB::table('roles')->insert([
            'name' => 'Editor',
            'slug' => 'editor',
        ]);
        // --- Org Admin
        DB::table('roles')->insert([
            'name' => 'Org Admin',
            'slug' => 'org-admin',
        ]);
        // --- Org Admin
        DB::table('roles')->insert([
            'name' => 'Org Editor',
            'slug' => 'org-editor',
        ]);
        // --- Org Admin
        DB::table('roles')->insert([
            'name' => 'Org Member',
            'slug' => 'org-member',
        ]);
        // --- Org Admin
        DB::table('roles')->insert([
            'name' => 'User',
            'slug' => 'user',
        ]);

        


    }
}
