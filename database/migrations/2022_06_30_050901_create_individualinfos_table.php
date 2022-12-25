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
        Schema::create('individualinfos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('email_status')->nullable();
            $table->string('surname')->nullable();
            $table->integer('surname_status')->nullable()->nullable();
            $table->string('phone')->nullable();
            $table->integer('phone_status')->nullable();
            $table->string('ecommerce')->nullable();
            $table->integer('ecommerce_status')->nullable();
            $table->string('other_info')->nullable();
            $table->integer('other_info_status')->nullable();
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
        Schema::dropIfExists('individualinfos');
    }
};
