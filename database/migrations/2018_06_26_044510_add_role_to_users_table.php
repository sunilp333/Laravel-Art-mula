<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user');
			$table->tinyInteger('status')->default(0);
			$table->char('phone_number',20)->nullable();
			$table->string('contact_address')->nullable();
			$table->string('user_slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
			$table->dropColumn('status');
			$table->dropColumn('phone_number');
			$table->dropColumn('contact_address');
			$table->dropColumn('user_slug');			
        });
    }
}
