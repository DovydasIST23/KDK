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
    // Insert some default data
    DB::table('kdk_tipas')->insert([
        ['tipas' => 'GPU'],
        ['tipas' => 'CPU'],
        ['tipas' => 'RAM'],
        ['tipas' => 'Motinine plokste'],
        ['tipas' => 'Kietasis diskas'],
        ['tipas' => 'PSU']  
    ]);
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::dropIfExists('kdk_tipas');
    }
};
