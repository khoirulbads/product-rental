<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AttributeValueSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

      
        $products = DB::table('products')->pluck('id'); 
        $attributes = DB::table('attributes')->pluck('id');
      
        foreach ($products as $product_id) {
            foreach ($attributes as $attribute_id) {
                $value = $this->getRandomAttributeValue($attribute_id);

                DB::table('attribute_value')->insert([
                    'id' => (string) Str::uuid(),
                    'attribute_id' => $attribute_id,
                    'product_id' => $product_id,
                    'value' => $value,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    private function getRandomAttributeValue($attribute_id)
    {
        $attributeName = DB::table('attributes')->where('id', $attribute_id)->value('name');

        switch ($attributeName) {
            case 'color':
                return collect(['Red', 'Blue', 'Green', 'Black', 'White'])->random();
            case 'size':
                return collect(['Small', 'Medium', 'Large', 'X-Large'])->random();
            case 'material':
                return collect(['Cotton', 'Leather', 'Plastic', 'Metal'])->random();
            default:
                return $faker->word;
        }
    }
}
