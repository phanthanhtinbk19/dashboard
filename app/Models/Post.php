<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
       "title","desc","address","images","price","area","category_id","kind_id",
     ];
  
     protected $primaryKey = 'id';
      protected $table = 'posts';
}