<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $stepen = User::factory()->create([
            'name' => 'Stepen',
            'email' => 'stepen@test.com',
        ]);
        $peri = User::factory()->create([
            'name' => 'Peri',
            'email' => 'peri@test.com',
        ]);
        $bambang = User::factory()->create([
            'name' => 'Bambang',
            'email' => 'bambang@test.com',
        ]);

        for ($i=0; $i < 30; $i++) { 
            Post::create([
                'user_id' => rand($stepen->id, $bambang->id),
                'title' => 'Laravel CRUD Tutorial ' . $i,
                'content' => 'This is the content of Laravel CRUD Tutorial ' . $i,
            ]);
        }
    }
}
