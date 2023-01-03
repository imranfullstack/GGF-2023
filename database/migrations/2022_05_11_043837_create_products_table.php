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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('status')->default('1');
            $table->integer('user_id');
            $table->integer('organisation_id');
            $table->text('short_desc')->nullable();
            $table->text('long_version')->nullable();
            $table->string('contact_person');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->integer('price');
            $table->string('delivery')->nullable();
            $table->string('id_number')->nullable();
            $table->string('stock')->nullable();
            $table->string('location')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('suspended_note')->nullable();
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
        Schema::dropIfExists('products');
    }
};
