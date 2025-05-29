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
       Schema::create('kdks', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->unsignedBigInteger('gamintojas_id')->nullable();
    $table->unsignedBigInteger('tipas_id')->nullable();
    $table->integer('kiekis');
    $table->text('aprasas');
    $table->decimal('kaina', 8, 2);
    $table->softDeletes();
    $table->timestamps();

    $table->foreign('gamintojas_id')->references('id')->on('kdk_gamintojas')->onDelete('set null');
    $table->foreign('tipas_id')->references('id')->on('kdk_tipas')->onDelete('set null');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kdks');
    }
};
