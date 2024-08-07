<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearlyRh extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'rh'];

    protected $table = 'yearly_rh';
}
