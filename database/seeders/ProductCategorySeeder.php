<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
//use Database\Factories\ProductCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProductCategory::factory()->count(10)->create();
    }


}
