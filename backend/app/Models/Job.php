<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }
    public function industries()
    {
        return $this->belongsToMany(Industry::class, 'job_industry');
    }
    public function jtype()
    {
        return $this->belongsTo(Jtype::class);
    }
    public function jlevel()
    {
        return $this->belongsTo(Jlevel::class);
    }
    public function candidate_messages()
    {
        return $this->hasMany(CandidateMessage::class);
    }
}
