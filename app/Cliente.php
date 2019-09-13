<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $primaryKey = "id";
    protected $fillable = ['nome', 'usuario', 'cpf', 'telefone', 'email', 'senha', 'foto'];

    public function histCliente(){
        return $this->hasMany(HistCliente::class, 'clientes_id', 'id');
    }
    public function histPsicologo(){
        return $this->hasMany(HistPsicologo::class, 'clientes_id', 'id');
    }

    public $timestamps = false;
}
