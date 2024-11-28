<?php

namespace App\Models;

use App\Models\Jobs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs_tracking extends Model
{
    use HasFactory;
    //
    public function Jobs(){
        return $this->belongsTo(Jobs::class);
    }

    protected $table = 'jobs-trackings';

    protected $fillable = [
        'step_name',
        'notes',
        'track_status'
    ];
}
