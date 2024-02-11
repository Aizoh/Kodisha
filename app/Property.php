<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model

{
    use HasFactory;
    public function path()
    {
        return url("/real-estate/{$this->id}-" . Str::slug($this->name));
    }
}
