<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('image')->default('default.png')->nullable();

            $table->string('organization')->nullable();

            $table->string('country')->nullable();
            $table->date('dob')->nullable();
            $table->integer('phone1')->nullable();
            $table->integer('phone2')->nullable();
            $table->string('cv1')->nullable();
            $table->string('cv2')->nullable();
            $table->string('cv3')->nullable();
            $table->string('cv4')->nullable();

            $table->string('sex')->nullable();
            $table->integer('total_stars')->nullable();
            $table->integer('month_stars')->nullable();
            $table->string('city')->nullable();
            $table->string('address_detailed')->nullable();

            $table->string('resume')->nullable();


            $table->boolean('student')->nullable();
            $table->boolean('staff')->nullable();
            $table->boolean('employee')->nullable();
            $table->boolean('trainer')->nullable();
            $table->text('brief')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
