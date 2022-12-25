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
        Schema::create('projectapplies', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('user_id');
            $table->integer('project_id');
            $table->integer('organisation_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->integer('number_of_people')->nullable();
            $table->integer('number_of_adults')->nullable();
            $table->string('children2_12')->nullable();
            $table->string('children0_2')->nullable();
            $table->string('bring_resources')->nullable();
            $table->string('Area_of_focus')->nullable();
            $table->string('being_involved')->nullable();
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
        Schema::dropIfExists('projectapplies');
    }
};
