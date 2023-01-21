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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('status');
            $table->integer('user_id');
            $table->integer('organisation_id');
            $table->text('short_desc');
            $table->text('long_version');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('contact_person');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('location')->nullable();
            $table->text('Whats_needed')->nullable();
            $table->string('registration_form')->nullable();
            $table->integer('view_count')->nullable();
            $table->string('image')->nullable();
            $table->text('suspended_note')->nullable();
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
};
