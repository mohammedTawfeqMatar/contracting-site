<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create("projects", function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete();
            $table->string("title");
            $table->string("slug")->unique();
            $table->longText("description");
            $table->string("image")->nullable();
            $table->string("category")->nullable();
            $table->string("location")->nullable();
            $table->string("area")->nullable();
            $table->string("status_text")->nullable();
            $table->date("completion_date")->nullable();
            $table->text("challenges")->nullable();
            $table->text("solutions")->nullable();
            $table->json("achievements")->nullable();
            $table->json("gallery")->nullable();
            $table->boolean("is_published")->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("projects");
    }
};
