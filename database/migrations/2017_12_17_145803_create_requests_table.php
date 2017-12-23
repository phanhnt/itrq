<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject',200);
            $table->text('content',200);
            
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            
            $table->tinyInteger('status');
            $table->tinyInteger('priority');
            $table->dateTime('deadline');
            
            $table->integer('assigned_to')-> unsigned();
            $table->foreign('assigned_to')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            
            $table->tinyInteger('rating')->nullable();
            
            $table->integer('team_id')-> unsigned();
            $table->foreign('team_id')
                    ->references('id')
                    ->on('teams')
                    ->onDelete('cascade');

            $table->dateTime('resolved_at')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
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
        Schema::drop('requests');
    }
}
