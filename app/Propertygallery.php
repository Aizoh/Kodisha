<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Propertygallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'property_id',
        'url',
        'image',
    ];

    public function property(){
        return $this->belongsTo(Property::class, 'property_id');
    }

}
