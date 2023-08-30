<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}