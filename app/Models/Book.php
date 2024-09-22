<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'short_desc'];

    public function getShortDescAttribute($value)
    {
        return ucfirst($value);
    }

    public function setShortDescAttribute($value)
    {
        $this->attributes['short_desc'] = strtolower($value);
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = strtoupper($value);
    }

    public function getAuthorAttribute($value)
    {
        return ucwords(strtolower($value));
    }
}
