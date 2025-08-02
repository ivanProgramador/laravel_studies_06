<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TesteModel extends Model
{
    //Associar um model a uma tabela mesmo que ele não tenha o mesmo nome
    //é possivel nesse caso estou controlando a tabela e passando algumas configurações 
    //no codigo abaixo eu informo aq ue tabela esse model pertence 
    
    protected $table = 'products';

    //definindo uma chave primaria 

    protected $primarykey = 'id';

    //desaivando o incremento

    public $incrementing = false; 

}
