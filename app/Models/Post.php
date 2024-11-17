<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Author;
use App\Models\Comment;

class Post extends Model
{
   use HasFactory;
   protected $fillable = ["title", "body", "author_id"];
   public function author() {
     return $this->belongsTo(Author::class, 'author_id');
   }
   public function comments() {
     return $this->hasMany(Comment::class, 'post_id');
   }
}
