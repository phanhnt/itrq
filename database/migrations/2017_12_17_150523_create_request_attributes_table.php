<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status',255)->nullable();
            $table->string('priority',255)->nullable();
            $table->string('rating',255)->nullable(); 
            $table->string('reopened',255)->nullable()->comment('reopen ticket when it closed');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('request_attributes');
    }
}
