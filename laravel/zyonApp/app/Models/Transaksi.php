<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'status','nominal','bukti_transaksi'
    ];

    // $table->foreignId('konsultasi_id');
    // $table->foreignId('customer_id');
    // $table->string('status');
    // $table->string('nominal');
    // $table->string('bukti_transaksi');
}
