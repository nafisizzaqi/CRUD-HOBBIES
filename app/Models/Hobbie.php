<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hobbie extends Model
{
    use HasFactory;
    protected $table = 'hobbies';
    protected $fillable = ['hobby', 'is_done'];
}
