<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';

    protected $fillable = [
        'id_municipio',
        'nome_municipio',
        'uf',
    ];

    protected $appends = [
        'descricao',
    ];

    public function getDescricaoAttribute(): string
    {
        return $this->nome_municipio . '/' . $this->uf;
    }
}