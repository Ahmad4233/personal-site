<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_abouts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('experience_years');
            $table->integer('projects_completed');
            $table->integer('happy_clients');
            $table->string('cv_file')->nullable();
            $table->string('image')->nullable();
            $table->json('personal_info')->nullable();
            $table->json('education')->nullable();
            $table->json('experience')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abouts');
    }
};
