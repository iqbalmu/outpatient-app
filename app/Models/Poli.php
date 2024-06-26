<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_poli';

    protected $fillable = [
        'nama',
        'deskripsi'
    ];
}
