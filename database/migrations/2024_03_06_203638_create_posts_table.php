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
            $table->bigInteger('user_id')
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table->bigInteger('comment_id')
                ->nullable()
                ->unsigned()
                ->constrained();
            $table->string('title');
            $table->string('content');
            $table->string('image')->default('image.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
