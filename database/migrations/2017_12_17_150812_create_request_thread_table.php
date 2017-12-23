<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestThreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_thread', function (Blueprint $table) {
            $table->increments('id');
                        
            $table->integer('request_id')->unsigned();
            $table->foreign ('request_id')
                    ->references('id')
                    ->on('requests')
                    ->onDelete('cascade');

            $table->integer('employee_id')->unsigned();
            $table->foreign ('employee_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->text('content');
            $table->tinyInteger('type')->nullable();
            $table->string('note',255)->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
        Schema::drop('request_thread');
    }
}
