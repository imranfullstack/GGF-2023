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
        Schema::create('jobapplies', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('user_id');
            $table->integer('organisation_id');
            $table->integer('recruit_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('age')->nullable();
            $table->string('indivisual_or_group')->nullable();
            $table->string('upload_resume')->nullable();
            $table->text('about_yourself')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('depature_date')->nullable();
            $table->string('depature_time')->nullable();
            $table->string('require_pikup')->nullable();
            $table->string('equpment_or_resources')->nullable();
            $table->string('requerments')->nullable();
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
        Schema::dropIfExists('jobapplies');
    }
};
