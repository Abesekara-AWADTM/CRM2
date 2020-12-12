<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateQuatations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_quotations', function (Blueprint $table) {
            $table->unsignedBigInteger('EmpID');
            $table->unsignedBigInteger('QuotationID');
            $table->unsignedBigInteger('OrderID');
            $table->foreign('EmpID')->references('EmpID')->on('employees');
            $table->foreign('QuotationID')->references('QuotationID')->on('quotations');
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
        Schema::dropIfExists('create_quatations');
    }
}
