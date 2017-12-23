<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestRelatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_relaters', function (Blueprint $table) {
          $table->integer('request_id')->unsigned()->comment('Cong viec');
            $table->foreign('request_id')
                    ->references('id')
                    ->on('requests')
                    ->onDelete('cascade');
            
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->primary(['request_id','employee_id']);
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
        Schema::drop('request_relaters');
    }
}
