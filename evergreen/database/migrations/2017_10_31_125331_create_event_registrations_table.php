<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventregistration', function (Blueprint $table) {
            $table->increments('EventRegistrationId');
            $table->string('FullName');
            $table->string('MobileNumber');
            $table->string('Email');
            $table->integer('DesignateId');
            $table->timestamps();

//            $table->foreign('DesignateId')
//                ->references('DesignateId')->on('designate')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventregistration');
    }
}
