<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgenizationTuble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgenization_tuble', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name');
            $table->string('logo');
            $table->string('email');
            $table->string('password');
            $table->string('brief_intro');
            $table->text('full_intro');
            $table->string('location_url');
            $table->string('country');
            $table->string('city');
            $table->string('address_detailed');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phone3');
            $table->integer('total_stars');
            $table->integer('month_stars');
            $table->integer('number_of_staff');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orgenization_tuble');
    }
}
