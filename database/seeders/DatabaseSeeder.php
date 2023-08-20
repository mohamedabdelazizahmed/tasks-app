<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::factory(10)->create();

        User::create([
            'name' => 'Demo physician1',
            'email' => 'Demophysician1@gmail.com',
            'password' => bcrypt('123456789'),
            'image' => 'default.jpg',
        ]);
    }
}
