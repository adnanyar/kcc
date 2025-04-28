<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class swen_question extends Model
{
    use HasFactory;

    protected $fillable=[
        'q_user',
        'q_name',
        'q_email',
        'q_department',
        'q_programe',
        'q_title',
        'q_description',
    ];
    

}
