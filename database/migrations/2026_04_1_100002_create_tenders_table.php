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
        Schema::create("tenders", function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained()->nullOnDelete();
            $table->string("title");
            $table->string("slug")->unique();
            $table->longText("description");
            $table->string("work_type")->nullable();
            $table->string("location")->nullable();
            $table->timestamp("closing_date");
            $table->enum("status", ["open", "closed", "completed"])->default("open");
            $table->boolean("is_published")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("tenders");
    }
};
