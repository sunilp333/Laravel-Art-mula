<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
			$table->string('page_name');
			$table->string('page_slug');
			$table->longText('page_description')->nullable();
			$table->tinyInteger('page_order')->nullable();
			$table->tinyInteger('display_status')->default(1);
			$table->string('meta_title')->nullable();
			$table->string('meta_description')->nullable();
			$table->string('meta_keyword')->nullable();			
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
        Schema::dropIfExists('pages');
		Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
}
