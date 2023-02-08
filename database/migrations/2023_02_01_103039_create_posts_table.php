<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image');
            $table->string('title');
            $table->string('slug');
            $table->longText('body'); // text、mediumText或longText在Database使用更多字符
            $table->text('meta_description')->nullable();
            $table->timestamp('published_at')->nullable(); // 選擇post日期
            $table->boolean('featured')->default(0); // 0表false 1表true

            $table->foreignId('author_id')->constrained('users'); // destrained 約束
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
