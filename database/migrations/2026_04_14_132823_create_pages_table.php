<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->string('title'); // عنوان الصفحة
            $table->string('slug')->unique(); // رابط الصفحة
            $table->longText('content')->nullable(); // المحتوى

            $table->string('template')->default('default'); // القالب
            $table->boolean('is_published')->default(false); // هل منشورة

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};