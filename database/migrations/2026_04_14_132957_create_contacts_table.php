<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('full_name');
            $table->string('phone');
            $table->string('email');

            $table->string('request_type'); 
            // general / service / career

            $table->string('service_requested')->nullable();
            $table->string('cv_file')->nullable();

            $table->longText('message');

            $table->enum('status', ['pending', 'in_progress', 'completed'])
                  ->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};