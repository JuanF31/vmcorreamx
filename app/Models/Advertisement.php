<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasFactory;

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
