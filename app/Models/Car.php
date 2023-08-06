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

    public function name() {
        return $this->brand . ' ' . $this->model;
    }

    public function type() {
        return 'Car';
    }
}
