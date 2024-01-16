<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        'intro',
        'desc',
        'button',
        'button_link',
        'image',
        // Add other columns if necessary
    ];
}
