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
        Schema::table('post', function (Blueprint $table) {
            $table->string('author')->after('title'); 
            // after is net working here it works just in mysql
            // Adding 'author' column after 'title'
            // If you want to set a default value, you can use:
            // $table->string('author')->default('Unknown')->after('published');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post', function (Blueprint $table) {
            $table->dropColumn('author'); // Dropping the 'author' column
        });
    }
};
