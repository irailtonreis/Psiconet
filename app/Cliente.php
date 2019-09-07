<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";
    protected $primaryKey = "id";
    protected $fillable = ['nome', 'usuario', 'email', 'senha', 'cpf', 'telefone', 'foto'];

    public function histCliente(){
        return $this->hasMany(HistCliente::class, 'cliente_id', 'id');
    }
    public function histPsicologo(){
        return $this->hasMany(HistPsicologo::class, 'cliente_id', 'id');
    }
}
