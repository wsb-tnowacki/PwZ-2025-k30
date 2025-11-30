<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Laravel Test User',
            'email' => 'laravel@example.com',
            'password' => password_hash('tester',PASSWORD_DEFAULT),
        ]); */
        /* Post::factory()->create([
            'tytul' => "Wpis z seeders",
            'autor' => "testowy",
            'email' => "dd@o.pl",
            'tresc' => "Przykłądowa treść z seedera",
        ]); */
        $this->call(PostSeeder::class);
    }
}
