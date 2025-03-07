<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ad_id')->references('id')->on('ads')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->foreignId('recipient_id')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->decimal('ammount', 10,2);
            $table->date('work_start_date');
            $table->date('work_end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
