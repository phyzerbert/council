<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Woa extends Model
{
    protected $guarded = [];

    public function dmas() {
        return $this->hasMany(Dma::class);
    }
}
