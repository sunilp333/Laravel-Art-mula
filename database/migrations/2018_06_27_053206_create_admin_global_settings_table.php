<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminGlobalSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 55)->nullable();;
			$table->string('no_reply_email', 55)->nullable();;
			$table->string('phone_number', 20)->nullable();;
			$table->string('contact_address', 199)->nullable();;
			$table->string('meta_title', 199)->nullable();;
			$table->string('meta_description', 199)->nullable();;
			$table->string('meta_keywords', 199)->nullable();;
			$table->string('logo_image', 100)->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_settings');
    }
}
