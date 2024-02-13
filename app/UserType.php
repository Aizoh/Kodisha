<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'id',
        'rental_inquiries',
    ];
}
