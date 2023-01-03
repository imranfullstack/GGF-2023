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
        Schema::create('recruits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->integer('user_id');
            $table->integer('organisation_id');
            $table->integer('status')->default('1');
            $table->string('parson_category');
            $table->text('short_desc');
            $table->string('rate_of_pay');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('contact_parson');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('location');
            $table->integer('attach_application');
            $table->string('suspended_note');
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
        Schema::dropIfExists('recruits');
    }
};
