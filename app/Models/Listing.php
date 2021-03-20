<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Team;

class Listing extends Model
{
    use HasFactory;

    /**
     * Get the tags for the listing.
     */
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the team for the listing.
     */
    public function team() {
        return $this->belongsTo(Team::class);
    }


}
