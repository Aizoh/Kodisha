<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model

{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'price',
        'negotiable',
        'bed',
        'bath',
        'area',
        'description',
        'img_url',
        'agent',
        'telephone' ,
        'email',
        'user_id'
    ];

    public function path()
    {
        return url("/real-estate/{$this->id}-" . Str::slug($this->name));
    }

    public function propertygallaries(){
        return $this->hasMany(Propertygallery::class, 'property_id', 'id');
    }

}
