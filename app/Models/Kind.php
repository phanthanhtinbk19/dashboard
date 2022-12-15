<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    use HasFactory;
    protected $fillable = [
      "name","category_id","created_by"
     ];
  
     protected $primaryKey = 'id';
      protected $table = 'kinds';
}