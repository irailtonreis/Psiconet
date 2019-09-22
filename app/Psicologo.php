<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    protected $table = "psicologos";
    protected $primaryKey = "id";
    protected $fillable = ['foto', 'cpf', 'telefone', 'cidade', 'crp', 'valor_sessao', 'sobre', 'id_plano', 'id_user'];

    public function planos(){
        return $this->hasMany(Plano::class, 'id', 'id_plano');
    }

    public function histPsicologo (){
        return $this->hasOne(HistPsicologo::class, 'psicologo_id', 'id');
    }

    public function histCliente (){
        return $this->hasMany(HistCliente::class, 'psicologo_id', 'id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id_user', 'id');
    }
}
