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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('status')->default('1');
            $table->integer('user_id');
            $table->integer('organisation_id');
            $table->text('short_desc')->nullable();
            $table->text('long_version')->nullable();
            $table->string('available_date')->nullable();
            $table->integer('price');
            $table->string('contact_person');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('location')->nullable();
            $table->string('enquiry_form')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('services');
    }
};
