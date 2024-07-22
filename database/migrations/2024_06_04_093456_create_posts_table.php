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
            $table->string('title');
            $table->text('content');
            $table->string('slug');
            $table->text('excerpt')->nullable();
            $table->integer('post_category_id');
            $table->string('tags')->nullable();
            $table->text('featuredImage')->nullable();
            $table->enum('status', ['draft', 'publish']);
            $table->enum('comment_status', ['disabled', 'enabled'])->default('disabled');
            $table->integer('author_id');
            $table->integer('views')->default(0);
            $table->string('date');
            $table->timestamps();
            $table->softDeletes();
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
