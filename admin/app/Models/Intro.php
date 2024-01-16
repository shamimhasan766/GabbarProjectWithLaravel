<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'desc',
        'button',
        'button_link',
        // Add other columns if necessary
    ];
}
