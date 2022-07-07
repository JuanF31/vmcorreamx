<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'mediaContent',
        'department_id'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
