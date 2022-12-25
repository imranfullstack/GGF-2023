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
        Schema::create('orgmanagebanks', function (Blueprint $table) {
            $table->id();
            $table->integer('organisation_id');
            $table->integer('user_id');
            $table->string('bank_name');
            $table->string('bank_account_name');
            $table->string('bank_bsb_no');
            $table->string('bank_ac_no');
            $table->string('bank_b_pay_id');
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
        Schema::dropIfExists('orgmanagebanks');
    }
};
