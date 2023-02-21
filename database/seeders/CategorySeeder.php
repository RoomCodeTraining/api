<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
          'name' => 'Bureautique',
          'slug' => 'bureautique',
          'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFSby46WWPIp7-LpVw-pMdxncIbNc06xGuI5Y-FWOKIDOUL-sR_tV_8Z4cO9hLizj5R-E&usqp=CAU"
        ]);

        Category::create([
          'name' => 'Securité informatique',
          'slug' => 'secrurite-informatique',
          'image' => "data:image/jpeg;base64,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"
        ]);

        Category::create([
          'name' => 'Community Manager',
          'slug' => 'manager',
          'image' => "data:image/jpeg;base64,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xgCT+81k5pBgiCudamve0Np13UHBwcHtZTecA5t0h4IHdZgThxUtlDmMa11Q1XAGXuaxheS5zu5aAB3UdS8xVMT+6lBwXDS0et723vtvdW357Gm0OEpZtb7e+XmbcqPXjPGL1y9Bu34m7eyleiooRQGp1N0fS63WXjMREXYzjCZW6y5++pUbMpKLJjQQZMQJHEyBCi3YkYyvHPgSTAXqitbTdwAJwMHIwQYPYo1G4wbSu0iyjCM6kYydk2k30Ter6bGNO2tcYDsdmYnoU6z0ppinWphlOhcqEtLyWgau6dh25digL1mwVedZNy5c1p7sasfhoYdxsmm73TabVra6JaPW2nK60aMLXSD2lp25cDsWxYNLvo2b3vqr2DwH3wBzy4zEThe8y1nPURK3umpLLJXV789/Jo81Tad0Q2ShcbG05qd7CM1isnvJzVjbbuR0sYoiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgC9BXiIDMVFkHhRIuWBOH8V7e4rXRcynbmxf4rEvG9QomUXJDUWJcsUUjgREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQH/2Q=="
        ]);

        Category::create([
          'name' => 'Developpement',
          'slug' => 'developpement',
          'image' => "data:image/jpeg;base64,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"
        ]);

        Category::create([
            'name' => 'Design et UX',
            'slug' => Str::slug('Design et UX'),
            'image' => "https://th.bing.com/th/id/OIP.5StgDm4EXQYwBYjN_C6uPQHaE-?w=255&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        ]);

        Category::create([
            'name' => 'Communication',
            'slug' => Str::slug('Communication'),
            'image' => "https://th.bing.com/th/id/OIP.4EZJnB2Xf1mdBy_IGyj_oAHaEF?w=279&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        ]);

        Category::create([
            'name' => 'Coaching et developpement personnel',
            'slug' => Str::slug('Coaching et developpement personnel'),
            'image' => "https://th.bing.com/th/id/OIP.uc-Sli8X1jfm8UxuGxlwwwHaFW?w=283&h=204&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        ]);

        Category::create([
            'name' => 'Gestion financière',
            'slug' => Str::slug('Gestion financière'),
            'image' => "https://th.bing.com/th/id/OIP.YVVjFy5rRfw_ieowOvm1qgHaFC?w=265&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        ]);


    }
}
