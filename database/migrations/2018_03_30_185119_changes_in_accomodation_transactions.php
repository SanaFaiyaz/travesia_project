<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangesInAccomodationTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accomodation_transactions', function (Blueprint $table) {
            //
            $table->string('payment_method')-> nullable(false);
            $table->string('card_number')-> nullable(false);
            $table->float('total_amount')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accomodation_transactions', function (Blueprint $table) {
            //
             $table->dropColumn('payment_method');
             $table->dropColumn('card_number');

        });
    }
}
