<?php

use App\Models\Topic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects');
            $table->enum('status', Topic::STATUSES)->default(Topic::INACTIVE_STATUS);
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('theory')->nullable();
            $table->text('practice')->nullable();
            $table->text('additional')->nullable();
            $table->text('homework')->nullable();
            $table->unsignedInteger('deadline_offset')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
