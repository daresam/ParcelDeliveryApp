<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();;
            $table->string('placed_by');
            $table->integer('weight');
            $table->date('sent_on');
            $table->date('delivered_on');
            $table->string('status')->default('Pending'); // Pending ShippedItem Delivered
            $table->text('from_address');
            $table->text('to_address');
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
        Schema::dropIfExists('parcels');
    }
}
