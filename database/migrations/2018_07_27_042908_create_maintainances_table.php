<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintainancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintainances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedInteger('vehicles_id');
            $table->unsignedInteger('users_id');
            $table->timestamps();
    
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('vehicles_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintainances');
    }
}
