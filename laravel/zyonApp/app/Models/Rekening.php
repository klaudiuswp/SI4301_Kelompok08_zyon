<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $table = 'rekenings';
    protected $primaryKey = 'no_rek';

    protected $fillable = ['no_rek','nama','payment_method'];   

    // public function user()
    // {
    //     return $this->belongsTo(User::class)->select(['id', 'name']);
    // }
}
