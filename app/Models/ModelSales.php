<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSales extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $fillable = [
        'nama',
        'alamat',
        'tgl_lahir',
        'password'
    ];
}
