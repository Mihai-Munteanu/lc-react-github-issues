<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'date' => 'date:d-m-Y',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function socialMedia()
    {
        return $this->belongsTo(SocialMedia::class);
    }
}
