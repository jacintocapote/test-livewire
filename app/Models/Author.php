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
    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Method to generate name based some fields.
     */
    public function name() {
        return $this->name . ' ' . $this->age;
    }

    /**
     * Method to get name of this model.
     */
    public function type() {
        return 'Author';
    }

    /**
     * Method to get plural name of this model.
     */
    public function plural() {
        return 'Authors';
    }
}
