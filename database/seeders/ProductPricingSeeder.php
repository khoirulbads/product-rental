<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductPricingSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $products = DB::table('products')->get();
        $regions = DB::table('regions')->get();
        $rentalPeriods = DB::table('rental_periods')->get(); 

        foreach ($products as $product) {
            foreach ($regions as $region) {
                foreach ($rentalPeriods as $period) {
                    DB::table('product_pricing')->insert([
                        'id' => (string) Str::uuid(),
                        'product_id' => $product->id,
                        'region_id' => $region->id,
                        'rental_period_id' => $period->id,
                        'price' => $faker->randomFloat(2, 100, 3000), 
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
