<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->string('key')->unique(); // اسم الإعداد
            $table->text('value')->nullable(); // قيمة الإعداد
            $table->string('type')->default('text'); 
            // نوع البيانات: text, image, color, json

            $table->string('description')->nullable(); // وصف الإعداد

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};