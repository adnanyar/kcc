<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'q_user',
        'q_name',
        'q_email',
        'q_department',
        'q_programe',
        'q_title',
        'q_description',
        'a_name',
        'a_email',
        'a_programe',
        'a_department',
        'a_description',
    ];

    use HasFactory;
}
