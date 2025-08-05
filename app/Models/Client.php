<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{

    //estabelenco a relaçao de um para um entre clientes e telefones
    public function phone():HasOne
    {
        return $this->hasOne(Phone::class);
    }

    //estabelecendo a relaçao de um para muitos entre clientes e telefones
    public function phones():HasMany
    {
        return $this->hasMany(Phone::class);
    }



}
