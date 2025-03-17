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
            $table->string('street');
            $table->string('housenumber');
            $table->string('postal_code');
            $table->string('city');
            $table->date('deadline');
            $table->enum('status', ['Open', 'Pending', 'In_progress', 'Completed', 'Canceled']);
            $table->decimal('budget', 8, 2);
            $table->foreignId('handyman_id')->constrained('users');
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