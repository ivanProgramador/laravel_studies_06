<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function client()
    {
        // Relação inversa: um telefone pertence a um cliente
        return $this->belongsTo(Client::class, 'client_id');
    }
}
