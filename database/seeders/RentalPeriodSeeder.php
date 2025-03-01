<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RentalPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periods = [3,6,12];
        foreach ($periods as $period) {
            $period_id = DB::table('rental_periods')->insertGetId([
                'id' => (string) Str::uuid(),
                'duration' => $period,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
