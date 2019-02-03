<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->increments('u_id');
			$table->text('u_name');
			$table->text('u_email');
			$table->text('u_mNumber');
			$table->text('u_password');
			$table->integer('u_attempt')->unsigned()->nullable();
			$table->text('u_otp')->nullable();
			$table->tinyInteger('u_verify')->default('0');
			$table->text('u_timer')->nullable();
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
        Schema::dropIfExists('=sms');
    }
}
