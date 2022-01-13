<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransaksiForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi', function(Blueprint $table)
        {
            $table->foreign('konsultasi_id')->references('id')->on('konsultasi')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('no_rekening_tujuan')->references('no_rek')->on('rekenings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi', function(Blueprint $table)
        {
        $table->dropForeign('konsultasi_id');
        $table->dropForeign('customer_id');
        $table->dropForeign('no_rekening_tujuan');
        });
    }  
}
