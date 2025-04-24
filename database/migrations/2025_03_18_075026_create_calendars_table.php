<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('day_of_week');
            $table->boolean('is_weekend');
            $table->boolean('is_holiday');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('calendar');
    }
};
