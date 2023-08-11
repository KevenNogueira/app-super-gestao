<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'fornecedores';

    protected $fillable = [
        'nome',
        'cnpj',
        'uf',
        'email',
        'site'
    ];

    public function produtos(): HasMany
    {
        return $this->hasMany(Produto::class);
    }
}
