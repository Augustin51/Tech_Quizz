<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="{{asset("css/quiz.css")}}">
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />
</head>
<body class="font-sans text-gray-900" style="background-color: #F4F6FA">
<div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <img class="ellipse ellipse-1" src="{{ asset('img/ellipse1.svg') }}" alt="ellipse">
    </div>
    <div class="form">
        <h1>{{ $nameQuiz }}</h1>
        <div>
            <p>Question {{ $quiz['nb_question'] }} of 10 </p>
            <h2>{{ $quiz['name_question'] }}</h2>
            <div class="slider-wrapper-wrapper">
                <div class="slider-wrapper">
                    <div class="slider" style=" background-color:#A729F5; height: 100%; width: {{ $quiz['nb_question'] * 10 }}%"></div>
                </div>
            </div>
        </div>
        <div>
            <form action="/quiz/{{ $quiz['id_quiz'] }}/{{ $quiz['nb_question'] }}">
                @csrf
                <div class="input">
                    <div class="label">A</div>
                    <label for="f_answer">{{ $quiz['f_answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="f_answer" value="50cm" class="hidden">
                </div>
                <div class="input">
                    <div class="label">B</div>
                    <label for="s_answer">{{ $quiz['s_answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="s_answer" class="hidden">
                </div>
                <div class="input">
                    <div class="label">C</div>
                    <label for="t_answer">{{ $quiz['t_answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="t_answer" class="hidden">
                </div>
                <div class="input">
                    <div class="label">D</div>
                    <label for="fth-answer">{{ $quiz['fth-answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="fth-answer" class="hidden">
                </div>
                <input class="button" type="submit" value="Submit Answer">
            </form>
        </div>


    </div>
    <div>
        <img class="ellipse ellipse-2" src="{{ asset('img/ellipse2.svg') }}" alt="ellipse">
    </div>
</div>
</body>
</html>

