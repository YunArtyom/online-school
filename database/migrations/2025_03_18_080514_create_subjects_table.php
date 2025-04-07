<?php

use App\Models\Subject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('grade_id')->constrained('grades');
            $table->enum('status', Subject::STATUSES)->default(Subject::INACTIVE_STATUS);
            $table->text('description');
            $table->unsignedBigInteger('price_usd');
            $table->unsignedBigInteger('price_rub');
            $table->unsignedBigInteger('price_won');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
