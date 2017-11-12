<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderServiceToLawyer extends Model
{
    protected $fillable = [
        'order_id',
        'lawyer_id',
        'lawyer_name',
        'value'
    ];
}
