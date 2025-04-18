<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_title',
        'image',
        'description',
        'price',
        'lieu',
        'event_type',
        'date'
    ];

}
