<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'html'];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function thumbnail(){
        return $this->hasOne(Image::class)->where('thumbnail', true);
    }
}
