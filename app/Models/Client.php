<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable = [
        'nombre',
        'apellido',
        'celular',
        'tipo_documento',
        'documento',
        'email',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
    ];
    
}
