<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'criteria_id',
        'value'
    ];

    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
