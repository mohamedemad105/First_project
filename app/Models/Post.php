<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use app\Models\Comment;
class Post extends Model
{
    use HasFactory;
    //protected $primaryKey = 'Pid';
    protected $table = 'posts';
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
