<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age'];

    /**
     * Get the images associated to one Author.
     */
    public function images(): HasMany {
        return $this->hasMany(Image::class);
    }
}
