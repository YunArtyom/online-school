<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('topic_additional_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id')->constrained('topics');
            $table->foreignId('additional_id')->constrained('additional_materials');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('topic_additional_materials');
    }
};
