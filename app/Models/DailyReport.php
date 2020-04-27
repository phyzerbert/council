<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    protected $guarded = [];

    public function project(){
        return $this->BelongsTo(Project::class);
    }
}
