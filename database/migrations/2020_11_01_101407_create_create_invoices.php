<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_invoices', function (Blueprint $table) {
            $table->unsignedBigInteger('EmpID');
            $table->unsignedBigInteger('InvoiceID');
            $table->unsignedBigInteger('OrderID');
            $table->foreign('EmpID')->references('EmpID')->on('employees');
            $table->foreign('InvoiceID')->references('InvoiceID')->on('invoices');
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
        Schema::dropIfExists('create_invoices');
    }
}
