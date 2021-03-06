<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    protected $fillable = [
        'category', 'item', 'description', 'archive', 'state', 'city', 'neighborhood', 'street', 'cep','loss_date', 'date_found', 'status'
    ];
}
