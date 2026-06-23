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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // Clé étrangère vers users
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            // Contenu du post
            $table->text('content');

            // created_at et updated_at
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};