<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultsHistory extends Model
{
    use HasFactory;

    protected $table = 'results_history';
    protected $fillable = ['id_user', 'name_quiz', 'score', 'date'];

    public $timestamps = false;
}

