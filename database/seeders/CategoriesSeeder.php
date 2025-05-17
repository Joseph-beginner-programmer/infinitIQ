<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{

    
    public function run(): void
    {
        $category_list = [
            ["web design", "learn-web-dev-with-hands"],
            ["UI UX", "ui-ux"],
            ["Software Engineering", "software-engineering"]
        ];

        for ($i = 0; $i < 3; $i++) {
            $category = $category_list[$i];
            DB::table('categories')->insert([
                "name" => $category[0],
                "slug" => $category[1],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),                
            ]);
        }
    }
}
