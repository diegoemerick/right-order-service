<?php

namespace App\Domain\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceOrder extends Model
{
    use SoftDeletes;

    protected $fillable = ['company_id', 'lawyer_id', 'title', 'description', 'status'];
    public static $rules = [];

    const STATUS = [
        'create'=> 1, 'delegate' => 2, 'finish' => 3];
}
