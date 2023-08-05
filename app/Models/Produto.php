<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'descricao', 'peso', 'fornecedor_id', 'un_medida_massa_id'];

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
