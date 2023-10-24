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
        Schema::create('artist__shows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id');
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreignId('show_id');
            $table->foreign('show_id')->references('id')->on('shows');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist__shows');
    }
};
