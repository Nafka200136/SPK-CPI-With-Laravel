<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    // Specify which attributes should be mass assignable
    protected $fillable = [
        'name'
    ];

    public function score()
    {
        return $this->hasMany(Score::class);
    }

    public function criteria()
    {
        return $this->hasMany(Criteria::class);
    }
}
