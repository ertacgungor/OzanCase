<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_infos', function (Blueprint $table) {
            $table->id();
            $table->string('number', 16);
            $table->integer('expiry_month');
            $table->integer('expiry_year');
            $table->string('email');
            $table->date('birthday');
            $table->string('gender', 6);
            $table->string('billing_title');
            $table->string('billing_firstname');
            $table->string('billing_lastname');
            $table->string('billing_address1');
            $table->string('billing_address2');
            $table->string('billing_city');
            $table->integer('billing_postcode');
            $table->string('billing_state');
            $table->string('billing_country');
            $table->integer('billing_phone');
            $table->string('billing_fax');
            $table->string('shipping_title');
            $table->string('shipping_firstname');
            $table->string('shipping_lastname');
            $table->string('shipping_address1');
            $table->string('shipping_address2');
            $table->string('shipping_city');
            $table->integer('shipping_postcode');
            $table->string('shipping_state');
            $table->string('shipping_country');
            $table->integer('shipping_phone');
            $table->string('shipping_fax');
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
        Schema::dropIfExists('customer_infos');
    }
}
