<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'fornecedor_cnpj',
        'nome',
        'descricao',
        'peso',
        'un_medida_massa_id',
        'comprimento',
        'largura',
        'altura',
        'un_medida_comprimento_id'
    ];

    public function produtoDetalhe(): HasOne
    {
        return $this->hasOne(ProdutoDetalhe::class);
    }

    public function fornecedor(): BelongsTo
    {
        return $this->belongsTo(Fornecedor::class);
    }

    public function unMedidaMassa(): BelongsTo
    {
        return $this->belongsTo(UnMedidaMassa::class);
    }
}
