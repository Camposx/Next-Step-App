<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jobs_trackings;

class Jobs extends Model
{
    use HasFactory;

    public function Jobs_tracking(){
        return $this->hasMany(Jobs_Trackings::class, 'job_id');
    }

    protected $table = 'jobs';

    protected $fillable = [
        'title',
        'description',
        'company_name',
        'job_portal',
        'work_type',
        'work_mode',
        'salary_range',
        'notes',
        'status'
    ];
}
