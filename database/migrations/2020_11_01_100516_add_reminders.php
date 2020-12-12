<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReminders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_reminders', function (Blueprint $table) {
            $table->unsignedBigInteger('EmpID');
            $table->unsignedBigInteger('ReminderID');
            $table->unsignedBigInteger('OrderID');
            $table->foreign('EmpID')->references('EmpID')->on('employees');
            $table->foreign('ReminderID')->references('ReminderID')->on('reminders');
            $table->foreign('OrderID')->references('OrderID')->on('orders');
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
        //
    }
}
