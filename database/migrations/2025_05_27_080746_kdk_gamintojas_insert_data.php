<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('kdk_gamintojas')->insert([
            ['Gname' => 'NVidia', 'email' => 'NVidia@example.com', 'phone' => '+370123456789'],
            ['Gname' => 'AMD', 'email' => 'AMD@example.com', 'phone' => '+334 163-9244'],
            ['Gname' => 'Intel', 'email' => 'Intel@example.com', 'phone' => '+518 640-3340'],
            ['Gname' => 'Corsair', 'email' => 'Corsair@example.com', 'phone' => '+734 905-9703'],
            ['Gname' => 'Asus', 'email' => 'Asus@example.com', 'phone' => '+782 418-6497'],
            ['Gname' => 'Gigabyte', 'email' => 'Gigabyte@example.com', 'phone' => '+418 085-3487'],
            ['Gname' => 'MSI', 'email' => 'MSI@example.com', 'phone' => '+206 238-9385'],
            ['Gname' => 'Samsung', 'email' => 'Samsung@example.com', 'phone' => '+704 440-6241'],
            ['Gname' => 'Western Digital', 'email' => 'Western-Digital@example.com', 'phone' => '+779 565-2443'],
            ['Gname' => 'Seagate', 'email' => 'Seagate@example.com', 'phone' => '+678 191-0317'],
            ['Gname' => 'Kingston', 'email' => 'Kingston@example.com', 'phone' => '+402 504-3335'],
            ['Gname' => 'Crucial', 'email' => 'Crucial@example.com', 'phone' => '+757 324-4698']
        ]);
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
