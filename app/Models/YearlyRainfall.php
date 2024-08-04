<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearlyRainfall extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'precipitation'];

    protected $table = 'yearly_rainfall';
}
