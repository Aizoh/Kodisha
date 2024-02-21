<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'move_in',
        'move_from',
        'tenants',
        'pets',
        'drugs',
        'profession',

    ];

    protected $visible = ['id', 'user_id', 'move_in', 'move_from', 'tenants', 'pets', 'drugs', 'profession', 'created_at', 'updated_at'];

}
