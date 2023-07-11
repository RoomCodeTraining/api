<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);

        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'contact' => '09123456789',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
      ]);


        for($i = 0; $i < 10; $i++) {
          \App\Models\Course::create([
            'name' => 'Cours de '.rand(1, 100),
            'slug' => Str::slug('Cours de '.rand(1, 100)),
            'description' => 'Description du cours',
            'price' => rand(1000, 10000),
            'image' => "courses/zGhxN8QT1cSvUtYRyhfd8nbvDEbdqjP61YcTcUwn.jpg",
            'category_id' => \App\Models\Category::all()->random()->id,
            'user_id' => 1,
            'likes' => rand(0, 500),
            'views' => rand(0, 500)
          ]);
        }

    }
}
