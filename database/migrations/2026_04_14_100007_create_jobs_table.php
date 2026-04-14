<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create("job_posts", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->string("location")->nullable();
            $table->string("type")->nullable();
            $table->string("experience")->nullable();
            $table->string("qualification")->nullable();
            $table->text("description")->nullable();
            $table->json("requirements")->nullable();
            $table->json("skills")->nullable();
            $table->date("closing_date")->nullable();
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("jobs");
    }
};
