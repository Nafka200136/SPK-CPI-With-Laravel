<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type'];

    public function weight()
    {
        return $this->hasOne(Weight::class);
    }

    public function scores()
    {
        return $this->hasOne(Score::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
