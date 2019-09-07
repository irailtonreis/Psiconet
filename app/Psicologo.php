<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    protected $table = "psicologo";
    protected $primaryKey = "id";
    protected $fillable = ['nome', 'usuario', 'crp', 'cpf', 'email' , 'senha', 'telefone', 'id_plano', 'foto', 'valor_sessao', 'sobre'];

    public function plano(){
        return $this->hasOne(Plano::class, 'id', 'id_plano');
    }

    public function histPsicologo (){
        return $this->hasOne(HistPsicologo::class, 'psicologo_id', 'id');
    }

    public function histCliente (){
        return $this->hasMany(HistCliente::class, 'psicologo_id', 'id');
    }
}
