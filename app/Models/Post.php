<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title'];

    /**
     * Get the images associated to one car.
     */
    public function images(): HasMany {
        return $this->hasMany(Image::class);
    }
}
