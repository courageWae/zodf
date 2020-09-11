<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('surname')->nullable();
            $table->string('othername')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('region')->nullable();
            $table->string('religion')->nullable();
            $table->string('zongo')->nullable();
            $table->string('district')->nullable();
            $table->string('disability')->nullable();
            $table->string('trained')->nullable();
            $table->string('othervocation')->nullable();
            $table->string('education')->nullable();
            $table->string('employment')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('word')->nullable();
            $table->string('excel')->nullable();
            $table->string('interest')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('project_id')->nullable();
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
        Schema::dropIfExists('students');
    }
}
