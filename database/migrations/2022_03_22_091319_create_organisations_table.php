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
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('status')->default('0');
            $table->string('org_name');
            $table->string('slug')->nullable();
            $table->string('org_email');
            $table->string('org_public_email');
            $table->string('account_email');
            $table->string('web_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->string('contact_person');
            $table->string('gov_registration')->nullable();
            $table->string('contact_person_email');
            $table->string('best_contact');
            $table->text('summary')->nullable();
            $table->text('long_version')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner_1')->nullable();
            $table->string('banner_2')->nullable();
            $table->string('banner_3')->nullable();
            $table->string('bank_account_name');
            $table->string('bsb');
            $table->string('account_number');
            $table->string('bpay_id');
            $table->string('S1')->nullable();
            $table->string('S2')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->integer('project')->nullable();
            $table->integer('event')->nullable();
            $table->integer('products')->nullable();
            $table->integer('our_service')->nullable();
            $table->integer('hiring')->nullable();
            $table->integer('events_planned')->nullable();
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
        Schema::dropIfExists('organisations');
    }
};
