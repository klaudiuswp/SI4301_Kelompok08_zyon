<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsultasi';

    protected $fillable = [
        'customer_id','psikolog_id','tanggal','status'
    ];

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'konsultasi_id', 'id');
    }

    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class, 'id', 'psikolog_id');
    }
}
