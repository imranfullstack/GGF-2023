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
        Schema::create('contributes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->integer('user_id');
            $table->integer('organisation_id');
            $table->integer('status')->default('1');
            $table->text('short_desc');
            $table->text('long_version');
            $table->string('location_availability');
            $table->string('city');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('file_name')->nullable();
            $table->string('file')->nullable();
            $table->string('contact_parson');
            $table->string('contact_email');
            $table->string('contact_phone');
            // $table->string('keywords')->nullable();
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
        Schema::dropIfExists('contributes');
    }
};
