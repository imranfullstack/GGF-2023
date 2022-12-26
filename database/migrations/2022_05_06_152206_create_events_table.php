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
        Schema::create('events', function (Blueprint $table) {


            $table->id();
            $table->string('event_name');
            $table->string('slug');
            $table->integer('status');
            $table->integer('user_id');
            $table->integer('organisation_id');
            $table->text('short_desc');
            $table->text('long_version');
            $table->string('date');
            $table->string('cost_status');
            $table->string('price');
            $table->string('contact_parson');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('location')->nullable();
            $table->text('what_to_bring')->nullable();
            $table->text('whats_needed')->nullable();
            $table->string('registration_form')->nullable();
            $table->string('image')->nullable();
            $table->text('suspend_message')->nullable();
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
        Schema::dropIfExists('events');
    }
};
