<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'id' => 1,
            'name' => 'Eletrodomésticos'
        ]);

        Categories::create([
            'id' => 2,
            'name' => 'Móveis'
        ]);

        Categories::create([
            'id' => 3,
            'name' => 'Informática'
        ]);
    }
}
