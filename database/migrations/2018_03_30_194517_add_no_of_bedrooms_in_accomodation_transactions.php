<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNoOfBedroomsInAccomodationTransactions extends Migration
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
            $table->integer('no_of_bedrooms')->default(true);
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
            $table->dropColumn('no_of_bedrooms');
        });
    }
}
