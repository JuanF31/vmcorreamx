<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'uri_directory', 'uri_directory_cover', 'status'];
}
