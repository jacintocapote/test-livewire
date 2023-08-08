<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model'];

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
        return $this->brand . ' ' . $this->model;
    }

    /**
     * Method to get name of this model.
     */
    public function type() {
        return 'Car';
    }

    /**
     * Method to get plural name of this model.
     */
    public function plural() {
        return 'Cars';
    }
}
