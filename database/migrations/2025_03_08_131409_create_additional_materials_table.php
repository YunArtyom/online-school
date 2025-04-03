<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('additional_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description');
            $table->text('link');
            $table->integer('price_usd');
            $table->integer('price_rub');
            $table->integer('price_won');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('additional_materials');
    }
};
