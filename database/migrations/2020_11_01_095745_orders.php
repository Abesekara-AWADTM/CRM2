<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('OrderID');
            $table->date('Due_Date');
            $table->date('Created_date');
            $table->string('Items');
            $table->integer('Qty');
            $table->string('Progress');
            $table->string('Advance_Payment');
            $table->string('Service_Charge');
            $table->string('Extra_Charge');
            $table->string('Tot_Price');
            $table->string('Discount');
            $table->string('Feedback');
            $table->date('Warranty_Period');
            $table->unsignedBigInteger('CustomerID');
            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
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
