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

    public function getRouteKeyName()
    {
        return 'name'; // This should match the column you want to use for binding
    }

}
