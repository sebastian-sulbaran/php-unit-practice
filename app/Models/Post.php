<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::lower($value);
    }

    public function getSlugAttribute()
    {
        return Str::replace(' ', '-', $this->name);
    }

    public function href()
    {
        return "blog/{$this->slug}";
    }

}
