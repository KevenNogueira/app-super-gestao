<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProdutoDetalhe extends Model
{
    use HasFactory;
    protected $fillable = ['produto_id', 'comprimento', 'largura', 'altura', 'un_medida_comprimento_id'];

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }

    public function unMedidaComprimento(): BelongsTo
    {
        return $this->belongsTo(UnMedidaComprimento::class);
    }
}
