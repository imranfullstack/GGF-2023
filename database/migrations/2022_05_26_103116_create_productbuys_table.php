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
        Schema::create('productbuys', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('status')->default('0');
            $table->integer('payment_status')->default('0');
            $table->integer('product_id');
            $table->integer('organisation_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('quantity')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('special_request')->nullable();
            $table->text('requirement')->nullable();
            $table->text('comment')->nullable();
            $table->text('question')->nullable();
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
        Schema::dropIfExists('productbuys');
    }
};
