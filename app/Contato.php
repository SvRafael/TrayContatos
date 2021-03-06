<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome', 'email', 'telefone', 'linkLinkedIn', 'linkFacebook'
    ];
}
