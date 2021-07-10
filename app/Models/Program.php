<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function collectors()
    {
        return $this->morphMany(Comment::class, 'collector');
    }

    public function collections()
    {
        return $this->morphToMany(Collection::class, 'collectable');
    }
}
