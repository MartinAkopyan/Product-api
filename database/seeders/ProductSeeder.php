<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(30)->electronics()->create();

        Product::factory()->count(25)->clothing()->create();

        Product::factory()->count(20)->books()->create();

        Product::factory()->count(25)->sports()->create();
    }
}
