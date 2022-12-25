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
        Schema::create('orgpayments', function (Blueprint $table) {
            $table->id();
            $table->integer('organisation_id');
            $table->integer('user_id');
            $table->integer('status');
            $table->integer('ammount');
            $table->integer('wallet');
            $table->integer('bank');
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
        Schema::dropIfExists('orgpayments');
    }
};
