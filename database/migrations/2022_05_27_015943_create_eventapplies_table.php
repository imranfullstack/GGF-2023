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
        Schema::create('eventapplies', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('payment_status')->default(0);
            $table->integer('user_id');
            $table->integer('event_id');
            $table->integer('organisation_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->integer('age')->nullable();
            $table->integer('number_of_people')->nullable();
            $table->integer('number_of_adults')->nullable();
            $table->string('children2_12')->nullable();
            $table->string('children0_2')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('departure_date')->nullable();
            $table->string('departure_time')->nullable();
            $table->string('require_pickup')->nullable();
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
        Schema::dropIfExists('eventapplies');
    }
};
