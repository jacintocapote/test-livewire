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
    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Method to generate name based some fields.
     */
    public function name() {
        return $this->title;
    }

    /**
     * Method to get name of this model.
     */
    public function type() {
        return 'Post';
    }

    /**
     * Method to get plural name of this model.
     */
    public function plural() {
        return 'Posts';
    }
}
