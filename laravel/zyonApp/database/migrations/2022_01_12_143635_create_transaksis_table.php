<?php

use App\Models\Konsultasi;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konsultasi_id');
            $table->foreignId('customer_id');
            $table->string('status');
            $table->string('nominal');
            $table->string('nama_rekening_asal');
            $table->integer('no_rekening_asal');
            $table->foreignId('no_rekening_tujuan');
            $table->string('bukti_transaksi');
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
        Schema::dropIfExists('transaksi');
    }
}
