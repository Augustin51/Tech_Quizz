<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
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

        if (!session()->has('score')) {
            session(['score' => 0]);
        }

        return view('quizGame', ['quiz' => $quizData->toArray(), 'nameQuiz' => $nameQuiz->toArray()['name_quiz']]);
    }

    public function checkAnswer(Request $request, int $idQuiz, int $nbQuestion)
    {


        \Illuminate\Support\Facades\Log::info(session()->all());

        $quizData = Question::where('id_quiz', $idQuiz)
            ->where('nb_question', $nbQuestion)
            ->first();

        if (!$quizData) {
            return redirect()->back()->with('error', 'Question not found.');
        }

        /*$res = $request->validate(['answer' => 'required|string'], ['answer.required' => 'Hej']);
        exit;*/

        $submittedAnswer = $request->input('answer');
        $correctAnswer = $quizData->real_answer;
        if ($submittedAnswer === $correctAnswer) {
            session()->increment('score');
        }
// After updating, check if the score is updated

        if ($nbQuestion < 10) {
            return redirect("/quiz/$idQuiz/" . ($nbQuestion + 1));
        } else {
            return redirect("/quiz/$idQuiz/result");
        }
    }


    public function finalResult(int $id_quiz)
    {
        $nameQuiz = Quiz::where('id_quiz', $id_quiz)->first();

        return view('result', ['nameQuiz' => $nameQuiz->toArray()['name_quiz'], 'score' => session('score')]);
    }
}
