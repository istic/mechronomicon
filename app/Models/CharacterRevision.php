<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterRevision extends Model
{
    use HasFactory;


    /**
     * Get the comments for the blog post.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
