<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestReadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_read', function (Blueprint $table) {
           $table->integer('request_id')->unsigned();
            $table->foreign ('request_id')
                    ->references('id')
                    ->on('requests')
                    ->onDelete('cascade');

            $table->integer('reader_id')->unsigned();
            $table->foreign ('reader_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->tinyInteger('status')->default(0)->comment('0:unread, 1:read');
            $table-> primary(['request_id','reader_id']);
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
        Schema::drop('request_read');
    }
}
