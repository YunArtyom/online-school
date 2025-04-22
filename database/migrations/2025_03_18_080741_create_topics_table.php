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
            $table->foreignId('grade_id')->constrained('grades');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->enum('status', Topic::STATUSES)->default(Topic::INACTIVE_STATUS);
            $table->string('name');
            $table->text('theory')->nullable();
            $table->text('practice')->nullable();
            $table->text('additional')->nullable();
            $table->text('homework')->nullable();
            $table->unsignedInteger('deadline_offset')->nullable();
            $table->enum('evaluation_type', Topic::EVALUATION_TYPES)->nullable();
            $table->unsignedInteger('evaluation_min')->nullable();
            $table->unsignedInteger('evaluation_max')->nullable();
            $table->unsignedBigInteger('price_usd')->nullable();
            $table->unsignedBigInteger('price_rub')->nullable();
            $table->unsignedBigInteger('price_won')->nullable();
            $table->timestamps();

            $table->unique(['grade_id', 'subject_id', 'name']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
