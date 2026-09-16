<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

protected $table = 'categorias'; //o nome da tabela em que o modelo está associado

protected $fillable = ['nome', 'descricao']; 
    //
}

?>