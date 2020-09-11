<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteeringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steerings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('organization')->nullable();
            $table->text('description');
            $table->string('team')->nullable();
            $table->string('department')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('steerings');
    }
}
