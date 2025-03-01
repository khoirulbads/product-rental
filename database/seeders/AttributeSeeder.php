<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $attributes = ['color', 'size', 'material'];
        foreach ($attributes as $attribute) {
            $attribute_id = DB::table('attributes')->insertGetId([
                'id' => (string) Str::uuid(),
                'name' => $attribute,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
