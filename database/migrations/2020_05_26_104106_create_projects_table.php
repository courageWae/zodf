<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price')->default(0);
            $table->text('description');
            $table->string('image')->nullable();
            $table->integer('lesson');
            $table->string('prequisite');
            $table->string('certificate');
            $table->string('language');
            $table->string('skill');
            $table->string('location');
            $table->string('startdate');
            $table->string('closingdate');
            $table->string('assessment');
            $table->integer('student')->default(0);
            $table->string('duration')->nullable();
            $table->integer('viewers')->nullable();
            $table->integer('materials')->nullable();
            $table->integer('hours')->nullable();
            $table->integer('days')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
