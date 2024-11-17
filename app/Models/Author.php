<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Post;

class Author extends Model
{
   use HasFactory;
   protected $fillable = ["name", "email", "password"];
   public function Posts() {
     return $this->hasMany(Post::class, 'author_id');
  }
}
