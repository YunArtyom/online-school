<?php

use App\Models\Notification;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->enum('type', Notification::TYPES)->default('director_message');
            $table->text('text');
            $table->timestamp('show_from')->nullable();
            $table->timestamp('show_until')->nullable();
            $table->timestamp('hidden_until')->nullable();
            $table->string('link')->nullable();
            $table->string('link_text')->nullable();
            $table->integer('score')->nullable();
            $table->enum('target', Notification::TARGETS);
            $table->foreignId('grade_id')->nullable(); // Класс (если target = teachers_grade / students_grade)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
