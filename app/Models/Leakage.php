<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leakage extends Model
{
    protected $guarded = [];

    public function zone() {
        return $this->belongsTo(Zone::class);
    }

    public function dma() {
        return $this->belongsTo(Dma::class);
    }

    public function woa() {
        return $this->belongsTo(Woa::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function stype() {
        return $this->belongsTo(Stype::class);
    }
}
