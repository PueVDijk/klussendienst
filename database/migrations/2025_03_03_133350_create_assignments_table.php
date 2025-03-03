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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('street_name');
            $table->string('house_number');
            $table->string('postal_code');
            $table->string('city');
            $table->date('deadline');
            $table->enum('status', ['pending', 'in_progress', 'completed', 'canceled']);
            $table->decimal('budget', 8, 2);
            $table->foreignId('handyman_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};