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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->text('tel_head_uae')->nullable();
            $table->text('fax_head_uae')->nullable();
            $table->text('tel_ncc_uae')->nullable();
            $table->text('fax_ncc_uae')->nullable();
            $table->text('tel_dubai_uae')->nullable();
            $table->text('fax_dubai_uae')->nullable();
            $table->text('tel_head_kwt')->nullable();
            $table->text('fax_head_kwt')->nullable();
            $table->text('tel_ncc_kwt')->nullable();
            $table->text('fax_ncc_kwt')->nullable();
            $table->text('tel_dubai_kwt')->nullable();
            $table->text('fax_dubai_kwt')->nullable();
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
        Schema::dropIfExists('contact');
    }
};
