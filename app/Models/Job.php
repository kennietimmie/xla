<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'unique_id',
        'description',
        'category',
        'level'
    ];

    public function candidates(){
        $this->hasMany('User');
    }
}
