<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foodMenu extends Model
{
    use HasFactory;
    protected $fillable = ['table_number', 'food_type'];
}
