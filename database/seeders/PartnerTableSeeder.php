<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'user_id' => 7,
            'wallet' => 0,
            'grade'=> 1
        ]);
        Partner::create([
            'user_id' => 8,
            'wallet' => 1500,
            'grade'=> 3
        ]);
    }
}
