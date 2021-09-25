<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'year_skill_aquired'
    ];

    protected $timestamp = false;
    public $table = 'skills';
}
