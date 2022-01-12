<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKonsultasiForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('konsultasi', function(Blueprint $table)
        {
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('psikolog_id')->references('id')->on('psikolog')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konsultasi', function(Blueprint $table)
        {
        $table->dropForeign('customer_id');
        $table->dropForeign('psikolog_id');
        });
    }  
}
