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
        Schema::create('serviceapplies', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('user_id');
            $table->integer('service_id');
            $table->integer('organisation_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('indvidual_or_group')->nullable();
            $table->integer('number_people')->nullable();
            $table->string('preferred_start_date')->nullable();
            $table->string('preferred_start_time')->nullable();
            $table->string('preferred_completion_date')->nullable();
            $table->string('preferred_completion_time')->nullable();
            $table->string('special_requests')->nullable();
            $table->string('requirements')->nullable();
            $table->string('comments')->nullable();
            $table->string('question')->nullable();
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
        Schema::dropIfExists('serviceapplies');
    }
};
