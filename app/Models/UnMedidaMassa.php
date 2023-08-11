<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnMedidaMassa extends Model
{
    use HasFactory;

    protected $fillable = [
        'unidade',
        'descricao'
    ];
}
