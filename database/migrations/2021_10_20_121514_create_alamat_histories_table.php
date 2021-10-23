<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat_histories', function (Blueprint $table) {
            $table->id();
            $table->integer("playerCount");
            $table->integer("adminFunds");
            $table->integer("playerPondo");
            $table->integer("totalProfit");
            $table->integer("totalOverBet");
            $table->integer("alamat");
            $table->integer("currentAlamat");
            $table->integer("lastAlamat");
            $table->integer("dutyProfit");
            $table->longtext("lastSubmittedString");
            $table->longtext("lastSubmittedResults");
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
        Schema::dropIfExists('alamat_histories');
    }
}
