<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model {

    protected $fillable = [
        'nama',
        'nohp',
        'waktu',
        'meja',
        'menu',
        'tambahan',
    ];
}