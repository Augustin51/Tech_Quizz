<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;
use function Psy\debug;


class QuzzController extends Controller
{
    public function displayAll() {
        $all = Quiz::all();
        return view('quiz', ['quizzes' => $all]);
    }

    public function displayOne(int $id_quiz, int $nb_question)
    {
        $quizData = Question::where('id_quiz', $id_quiz)
            ->where('nb_question', $nb_question)
            ->first();
        $nameQuiz = Quiz::where('id_quiz', $id_quiz)->first();

        return view('quizGame', ['quiz' => $quizData->toArray(), 'nameQuiz' => $nameQuiz->toArray()['name_quiz']]);
    }

    public function finalResult(int $id_quiz)
    {
        $nameQuiz = Quiz::where('id_quiz', $id_quiz)->first();

        return view('result', ['nameQuiz' => $nameQuiz->toArray()['name_quiz']]);
    }
}
