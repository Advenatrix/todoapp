<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed some users first (assuming no UserSeeder)
        DB::table('users')->insert([
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@example.com',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie@example.com',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed some projects
        DB::table('projects')->insert([
            [
                'name' => 'Website Redesign',
                'description' => 'Overhaul the company website with a modern UI.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile App',
                'description' => 'Develop the official mobile application.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed some orgs
        DB::table('orgs')->insert([
            [
                'name' => 'Tech Division',
                'description' => 'Handles all software development tasks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing',
                'description' => 'Responsible for outreach and campaigns.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed some todos
        DB::table('todos')->insert([
            [
                'user_id'   => 1, // assigned to Alice
                'pic'       => 2, // Bob is in charge
                'orgs_id'   => 1,
                'project_id'=> 1,
                'title'     => 'Design landing page',
                'details'   => 'Create Figma mockups for the new homepage.',
                'status'    => 'in_progress',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'user_id'   => 2, // assigned to Bob
                'pic'       => 3, // Charlie in charge
                'orgs_id'   => 2,
                'project_id'=> 2,
                'title'     => 'Prepare campaign assets',
                'details'   => 'Design posters and banners for the app launch.',
                'status'    => 'pending',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'user_id'   => 3, // assigned to Charlie
                'pic'       => 1, // Alice in charge
                'orgs_id'   => 1,
                'project_id'=> null, // not linked to project
                'title'     => 'Internal code review',
                'details'   => 'Review backend API structure for security.',
                'status'    => 'completed',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
