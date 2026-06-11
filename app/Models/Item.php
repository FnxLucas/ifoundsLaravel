<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'itens';

    protected $fillable = [
        'usuario_encontrou_id',
        'usuario_reivindicante_id',
        'img',
        'nome',
        'localizacao',
        'descricao',
        'quemAchou'
    ];

    public function quemEncontrou()
    {
        return $this->belongsTo(User::class, 'usuario_encontrou_id');
    }

    public function quemReivindicou()
    {
        return $this->belongsTo(User::class, 'usuario_reivindicante_id');
    }
}
