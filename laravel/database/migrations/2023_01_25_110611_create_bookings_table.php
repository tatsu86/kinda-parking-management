<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('parking_id')->comment('駐車場id');
            $table->integer('user_id')->comment('ユーザーid');
            $table->date('appointment_date')->comment('予約日');
            $table->string('appointment_car_number')->comment('予約する車のナンバー');
            $table->string('memo')->nullable(false)->comment('メモ');
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
        Schema::dropIfExists('bookings');
    }
}
