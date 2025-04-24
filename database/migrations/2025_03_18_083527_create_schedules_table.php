<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calendar_day_id')->constrained('calendar');
            $table->foreignId('topic_id')->constrained('topics');
            $table->foreignId('grade_id')->constrained('grades');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->timestamps();

            $table->unique(['calendar_day_id', 'topic_id', 'grade_id', 'subject_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
