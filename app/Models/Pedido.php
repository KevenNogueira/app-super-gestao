<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_cpf',
        'num_pedido',
    ];

    protected $primaryKey = 'num_pedido';
    public $incrementing = false;
    protected $keyType = 'integer';


    public function produtos(): BelongsToMany
    {
        return $this->belongsToMany(Produto::class, 'pedidos_produtos', 'num_pedido')->withPivot('created_at');
    }

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
}
