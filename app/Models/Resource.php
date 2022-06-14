<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_resource',
        'slug',
        'type',
        'resource',
        'department_id',
        'published'
    ];
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
