<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';

    protected $fillable = [
        'id_quiz',
        'name_question',
        'f_answer',
        's_answer',
        't_answer',
        'fth_answer',
        'real_answer',
    ];
}

