<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Propertygallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillables = [

        'property_id',
        'url',
        'image',
    ];
}