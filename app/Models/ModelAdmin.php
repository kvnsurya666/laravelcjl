<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAdmin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $fillable = [
        'nama',
        'email',
        'username',
        'password'
    ];
}
