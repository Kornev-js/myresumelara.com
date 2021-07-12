<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeData extends Model
{
    use HasFactory;

    protected $fillable = [
        'id' ,
        'phone',
        'email',
        'address',
        'link',
        'education',
        'skills',
        'profile_info',
        'experience' ,
        'created_at',
    ];
}
