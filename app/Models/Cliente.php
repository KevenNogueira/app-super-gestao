<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'telefone',
    ];

    protected $primaryKey = 'cpf';
    public $incrementing = false;
    protected $keyType = 'string';

    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class);
    }
}
