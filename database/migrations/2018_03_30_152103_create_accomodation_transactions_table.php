<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccomodationTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodation_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('no_of_days')-> nullable(false);
            $table->string('total_amount')-> nullable(false);
            $table->integer('hotel_id')->unsigned();
            $table->integer('bedroom_id')->unsigned()->index();
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodation_transactions');
    }
}
