<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'filepath', 'alt'];

    public function car() {
        return $this->belongsTo('App\Car');
    }

    public function author() {
        return $this->belongsTo('App\Author');
    }

    public function post() {
        return $this->belongsTo('App\Post');
    }

    public function imageable(){
        return $this->morphTo();
    }
}
