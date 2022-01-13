<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal','status'
    ];

    // $table->foreignId('customer_id');
    // $table->foreignId('psikolog_id');
    // $table->string('tanggal');
    // $table->string('status');
    // $table->timestamps();
}
