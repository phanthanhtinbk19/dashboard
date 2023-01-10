<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        "name","email","address","phone","rule","password","avatar"
    ];
    protected $primaryKey = "id";
    protected $table = "users";
}