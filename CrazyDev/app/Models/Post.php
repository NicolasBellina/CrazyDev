<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    // Allow mass-assignment for the following fields
    protected $fillable = [
        'title',
        'body',
        'user_id', // Assuming each post belongs to a user (the author)
    ];

    // A post belongs to a user (author)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A post has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
