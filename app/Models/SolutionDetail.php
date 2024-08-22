<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }

}
