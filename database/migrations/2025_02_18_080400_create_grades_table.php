<?php

use App\Models\Grade;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->integer('grade');
            $table->text('description');
            $table->enum('status', Grade::STATUSES)->default(Grade::ACTIVE_STATUS);
            $table->date('start_at');
            $table->unsignedBigInteger('price_usd');
            $table->unsignedBigInteger('price_rub');
            $table->unsignedBigInteger('price_won');
            $table->unsignedBigInteger('month_price_usd');
            $table->unsignedBigInteger('month_price_rub');
            $table->unsignedBigInteger('month_price_won');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
