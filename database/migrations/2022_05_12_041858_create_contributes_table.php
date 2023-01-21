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
            $table->text('short_desc')->nullable();
            $table->text('long_version')->nullable();
            $table->string('location_availability')->nullable();
            $table->string('city')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->string('file_name')->nullable();
            $table->string('file')->nullable();
            $table->string('contact_parson')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->integer('view_count')->nullable();
            $table->text('suspend_message')->nullable();
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
