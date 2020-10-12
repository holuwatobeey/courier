<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tracking_number');
            $table->string('payment_reference');
            $table->string('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('amount');
            $table->string('desc');
            $table->string('package_value');
            $table->string('package_size');
            $table->string('pickup_date');
            $table->string('pickup_time');
            $table->string('pickup_loc')->nullable();
            $table->string('pickup_addr')->nullable();
            $table->string('dropoff_loc');
            $table->string('dropoff_addr');
            $table->string('delivery_opt');
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
        Schema::dropIfExists('schedules');
    }
}
