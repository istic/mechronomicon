<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;


    /**
     * Get the revisions for this character.
     */
    public function revisions()
    {
        return $this->hasMany(CharacterRevision::class);
    }

    /**
     * Get the user for this character.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
