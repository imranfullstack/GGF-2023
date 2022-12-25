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
        Schema::create('befounds', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('volunteer_oppertunity')->nullable();
            $table->integer('volunteer_oppertunity_status')->nullable();
            $table->integer('paid_work')->nullable();
            $table->integer('paid_work_status')->nullable();
            $table->text('short_desc')->nullable();
            $table->integer('key_skill_status')->nullable();
            $table->integer('key_interests_status')->nullable();
            $table->string('resume')->nullable();
            $table->integer('resume_status')->nullable();
            $table->string('location')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('availabitity')->nullable();
            $table->string('auto_pause_date')->nullable();
            $table->string('auto_pause_date_status')->nullable();
            $table->string('status_control')->nullable();
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
        Schema::dropIfExists('befounds');
    }
};
