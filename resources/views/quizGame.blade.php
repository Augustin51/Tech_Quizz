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
            <form action="" method="post">
                @csrf
                <div class="input">
                    <div class="label">A</div>
                    <label for="f_answer">{{ $quiz['f_answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="f_answer" value="{{ $quiz['f_answer'] }}">
                    <div class="good"><i class="ri-check-line"></i></div>
                    <div class="bad"><i class="ri-close-line"></i></div>
                </div>
                <div class="input">
                    <div class="label">B</div>
                    <label for="s_answer">{{ $quiz['s_answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="s_answer" value="{{ $quiz['s_answer'] }}">
                    <div class="good"><i class="ri-check-line"></i></div>
                    <div class="bad"><i class="ri-close-line"></i></div>
                </div>
                <div class="input">
                    <div class="label">C</div>
                    <label for="t_answer">{{ $quiz['t_answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="t_answer" value="{{ $quiz['t_answer'] }}">
                    <div class="good"><i class="ri-check-line"></i></div>
                    <div class="bad"><i class="ri-close-line"></i></div>
                </div>
                <div class="input">
                    <div class="label">D</div>
                    <label for="fth_answer">{{ $quiz['fth_answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="fth_answer" value="{{ $quiz['fth_answer'] }}">
                    <div class="good"><i class="ri-check-line"></i></div>
                    <div class="bad"><i class="ri-close-line"></i></div>
                </div>
                <input type="hidden" id="goodAnswer" value="{{ $quiz['real_answer'] }}">
                <input class="button" type="submit" value="Submit Answer">
                @if($quiz['nb_question'] != 10)
                    <a href="/quiz/{{ $quiz['id_quiz'] }}/{{ $quiz['nb_question'] + 1 }}" class="next-question hidden">Next Question</a>
                @else
                    <a href="/quiz/{{ $quiz['id_quiz'] }}/result" class="next-question hidden">See result</a>
                @endif
            </form>
        </div>


    </div>
    <div>
        <img class="ellipse ellipse-2" src="{{ asset('img/ellipse2.svg') }}" alt="ellipse">
    </div>
</div>
<script>
    document.querySelector('form').addEventListener('submit', (e) => {
        e.preventDefault();

        const buttonSwitch = document.querySelector('.button');
        const selectedAnswer = document.querySelector('input[name="answer"]:checked');
        const goodAnswer = document.querySelector('#goodAnswer');
        const inputs = document.querySelectorAll('input.hidden');
        const nextQuestion = document.querySelector('.next-question');

        if(selectedAnswer != null) {
            buttonSwitch.classList.add('hidden');
            nextQuestion.classList.remove('hidden');

            if (selectedAnswer.value === goodAnswer.value) {
                console.log('good answer')
                selectedAnswer.classList.add('correct-answer')
            } else {
                console.log('bad answer')
                selectedAnswer.classList.add('wrong-answer')
                inputs.forEach((input) => {
                    console.log(input.value)
                    if(input.value === goodAnswer.value) input.classList.add('good-answer')
                })
            }
            inputs.forEach((input) => input.disabled = true)
        }
    })
</script>

</body>
</html>

