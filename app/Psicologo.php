<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    protected $table = "psicologos";
    protected $primaryKey = "id";
    protected $fillable = ['nome', 'usuario', 'crp', 'cpf', 'email','foto', 'valor_sessao', 'senha', 'sobre', 'telefone', 'id_plano'];

    public function planos(){
        return $this->hasOne(Plano::class, 'id', 'id_plano');
    }

    public function histPsicologo (){
        return $this->hasOne(HistPsicologo::class, 'psicologo_id', 'id');
    }

    public function histCliente (){
        return $this->hasMany(HistCliente::class, 'psicologo_id', 'id');
    }
}
