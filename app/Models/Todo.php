<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Add this line to specify which fields can be mass-assigned
    protected $fillable = ['task', 'completed'];
}
