<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "register";

    protected $fillable = [
        'nama',
        'alamat',
        'telp',
        'email',
        'instansi',
        'status',
        'jenis_pengunjung',
    ];

}

