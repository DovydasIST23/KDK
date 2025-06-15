<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kdk;
use App\Models\kdk_gamintojas;
use App\Models\kdk_tipas;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kdk::factory()->count(20)->create();
    }
}
