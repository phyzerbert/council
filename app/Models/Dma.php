<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dma extends Model
{
    protected $guarded = [];

    public function woa() {
        return $this->belongsTo(Woa::class);
    }
}
