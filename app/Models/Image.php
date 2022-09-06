<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['src', 'project_id'];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
