<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //fillable é um array que diz quais campos podem ser preenchidos em massa
    //isso é uma medida de segurança para evitar que campos indesejados sejam preenchidos
    //se eu não colocar o fillable, o laravel não vai permitir que eu preencha esses campos
    //então é importante sempre definir quais campos podem ser preenchidos em massa
    
      protected $fillable = [
        'product_name',
        'price',
        'created_at',
        'updated_at'
    ];
}
