<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'icon', 'banner', 'slug'];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function resource(){
        return $this->hasMany(Resource::class);
    }
}
