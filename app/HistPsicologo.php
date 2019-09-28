<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistPsicologo extends Model
{
    protected $table = 'hist_psicologo';
    protected $primaryKey = 'id';
    protected $fillable = ['data_sessao', 'valor_consulta', 'psicologo_id', 'cliente_id'];


    public function psicologo(){
        return $this->hasOne(Psicologo::class, 'id', 'psicologo_id');

    }
    
    public function cliente(){
        return $this->hasOne(Cliente::class, 'id', 'cliente_id');

    }

   
}
