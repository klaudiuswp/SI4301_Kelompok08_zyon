<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'konsultasi_id','customer_id','status','nominal','nama_rekening_asal','no_rekening_asal','no_rekening_tujuan','bukti_transaksi'
    ];

    public function konsultasi()
    {
        return $this->hasOne(Konsultasi::class);
    }
}
