<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no');
            $table->unsignedBigInteger('merchant_id');
            $table->foreign('merchant_id')->references('id')->on('merchants');
            $table->unsignedBigInteger('customer_info_id');
            $table->foreign('customer_info_id')->references('id')->on('customer_infos');
            $table->unsignedBigInteger('acquirer_id');
            $table->foreign('acquirer_id')->references('id')->on('acquirers');
            $table->string('message');
            $table->integer('code');
            $table->string('status');
            $table->string('operation');
            $table->string('payment_method');
            $table->string('error_code');
            $table->float('amount');
            $table->string('original_currency');
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
        Schema::dropIfExists('transactions');
    }
}
