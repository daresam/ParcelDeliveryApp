<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membershipform', function (Blueprint $table) {
            $table->increments('MembershipFormId');
            $table->string('FullName');
            $table->string('Address');
            $table->string('MobileNumber');
            $table->string('Denomination');
            $table->date('DateOfBirth');
            $table->string('Email');
            $table->integer('StatusId');
            $table->integer('MaritalStatusId');
            $table->string('Passport');
            $table->timestamps();

//            $table->foreign('StatusId')
//                ->references('StatusId')->on('status')->onDelete('cascade');
//
//            $table->foreign('MaritalStatusId')
//                ->references('MaritalStatusId')->on('maritalstatus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membershipform');
    }
}
