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
        Schema::create('recruithavecategories', function (Blueprint $table) {
            $table->id();
            $table->integer('organisation_id');
            $table->integer('user_id');
            $table->integer('recruit_id');
            $table->integer('recruitcat_id');
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
        Schema::dropIfExists('recruithavecategories');
    }
};
