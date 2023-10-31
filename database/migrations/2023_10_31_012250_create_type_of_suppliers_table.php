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
        Schema::create('type_of_suppliers', function (Blueprint $table) {
            $table->id();
            $table->integer('LP');
            $table->integer('PP');
            $table->integer('foreigner');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_of_suppliers');
    }
};
