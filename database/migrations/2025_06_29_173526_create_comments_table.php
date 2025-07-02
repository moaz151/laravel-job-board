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
        Schema::create('comments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('author'); // Name of the person who made the comment
            $table->string('content'); // The content of the comment
            $table->timestamps();

            // syntax for foreign key constraint (onDelete cascade)
            // $table->foreignId('post_id')->constrained('post')->ondelete('cascade'); 
            // Another syntax for foreign key constraint (onDelete cascade)
            $table->foreignId('post_id')->constrained('post')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
