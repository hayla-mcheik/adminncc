<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->text('fname')->nullable();
            $table->text('lname')->nullable();
            $table->text('email')->nullable();
            $table->text('skills')->nullable();
            $table->text('city')->nullable();
            $table->text('linkone')->nullable();
            $table->text('linktwo')->nullable();
            $table->text('linkthree')->nullable();
            $table->text('file')->nullable();
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
        Schema::dropIfExists('careers');
    }
};
