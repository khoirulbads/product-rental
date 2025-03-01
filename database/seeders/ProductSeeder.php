<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 25) as $index) {
            DB::table('products')->insert([
                'id' => (string) Str::uuid(), 
                'name' => $faker->word(), 
                'description' => $faker->sentence(10),
                'sku' => strtoupper($faker->bothify('???-#####')),
                'category' => $faker->word(), 
                'status' => $faker->boolean(),
                'image_url' => $faker->imageUrl(),
                'short_description' => $faker->sentence(5),
                'weight' => $faker->randomFloat(2, 0.1, 10), 
                'manufacturer' => $faker->company(),
                'created_by' => (string) Str::uuid(),
                'updated_by' => (string) Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]);
        }
    }
}
