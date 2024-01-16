<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentNews extends Model
{
    use HasFactory;
    protected $table = 'recentnews';
    protected $fillable = [
        'caption',
        'short_desc',
        'author',
        'link',
        'image',
        // Add other columns if necessary
    ];
}
