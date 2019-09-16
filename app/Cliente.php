<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $primaryKey = "id";
    protected $fillable = ['nome', 'usuario', 'cpf', 'telefone', 'email', 'senha', 'foto', 'id_user'];

    public function histCliente(){
        return $this->hasMany(HistCliente::class, 'clientes_id', 'id');
    }
    public function histPsicologo(){
        return $this->hasMany(HistPsicologo::class, 'clientes_id', 'id');
    }
    public function user(){
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function user(){
        return $this->hasOne(Ator::class, 'id', 'id_user');
    }

    public $timestamps = false;
}
