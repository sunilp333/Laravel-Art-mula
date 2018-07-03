<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPaymentSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('currency', 55)->nullable();
			$table->string('currency_code', 10)->nullable();
			$table->tinyInteger('stripe_gateway_environment')->default(0);
			$table->text('stripe_client_id')->nullable();
			$table->text('stripe_secret_key')->nullable();
			$table->text('test_stripe_secret_key')->nullable();
			$table->text('test_stripe_client_id')->nullable();
			$table->text('stripe_publish_key')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_options');
    }
}
