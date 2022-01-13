<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;

    protected $table = 'psikolog';

    protected $fillable = [
        'nama','foto_psikolog','fee','deskripsi'
    ];

}
