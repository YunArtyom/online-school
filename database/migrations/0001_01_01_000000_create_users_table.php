<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('type', User::TYPES)->default('student');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('age');
            $table->enum('country', array_keys(User::COUNTRIES));
            $table->string('additional')->nullable();
            $table->enum('status', User::STATUSES)->default('inactive');
            $table->date('absent_form')->nullable();
            $table->date('absent_to')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
