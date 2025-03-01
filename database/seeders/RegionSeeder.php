<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $regions = ['Malaysia', 'Singapore', 'Thailand'];
        foreach ($regions as $region) {
            $region_id = DB::table('regions')->insertGetId([
                'id' => (string) Str::uuid(),
                'region_name' => $region,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
