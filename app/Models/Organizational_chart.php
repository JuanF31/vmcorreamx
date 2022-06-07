<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizational_chart extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'uri_flipbook', 'uri_flipbook_cover', 'status'];
}
