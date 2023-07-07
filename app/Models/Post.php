<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //au lieu de faire plusieur requete pour recupere chaque category pour chaque article, il va faire une requete pour tout recuperer
    protected $with = ['category'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
