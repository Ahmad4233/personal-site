<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('highlight_text');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('cv_file')->nullable();
            $table->string('button1_text')->default('View Projects');
            $table->string('button1_link')->default('#portfolio');
            $table->string('button2_text')->default('Download CV');
            $table->string('button2_link')->nullable();
            $table->json('social_links')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hero_sections');
    }
};
