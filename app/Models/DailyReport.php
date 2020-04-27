<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    protected $guarded = [];

    public function project(){
        return $this->BelongsTo(Project::class);
    }

    public function contractor_company() {
        return $this->belongsTo(Company::class, 'contractor_company_id');
    }

    public function subcontractor_company() {
        return $this->belongsTo(Company::class, 'subcontractor_company_id');
    }
}
