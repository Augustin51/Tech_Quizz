<p>Current Score: {{ session()->get('score') }}</p>

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
            <form id="quizForm" action="{{ route('quiz.check', ['idQuiz' => $quiz['id_quiz'], 'nbQuestion' => $quiz['nb_question']]) }}" method="POST">
                @csrf
                <div class="input">
                    <div class="label">A</div>
                    <label for="f_answer">{{ $quiz['f_answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="f_answer" value="{{ $quiz['f_answer'] }}" checked>
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
                    <label for="fth_answer">{{ $quiz['fth-answer'] }}</label>
                    <input class="hidden" type="radio" name="answer" id="fth_answer" value="{{ $quiz['fth-answer'] }}">
                    <div class="good"><i class="ri-check-line"></i></div>
                    <div class="bad"><i class="ri-close-line"></i></div>
                </div>
                <input type="hidden" id="goodAnswer" value="{{ $quiz['real_answer'] }}">
                <input class="button" type="submit" value="Submit Answer">
            </form>

            {{-- @if($errors->has('answer'))
                <p>Caca ;</p>
            @endif--}}

        </div>


    </div>
    <div>
        <img class="ellipse ellipse-2" src="{{ asset('img/ellipse2.svg') }}" alt="ellipse">
    </div>
</div>

        <script>
            let submitted = localStorage.getItem('submitted') === 'false';

            document.querySelector('form').addEventListener('submit', (e) => {
                if (!submitted) {
                    e.preventDefault(); // Prevents form submission only the first time

                    const selectedAnswer = document.querySelector('input[name="answer"]:checked');
                    const submit = document.querySelector('input[type="submit"]');
                    const goodAnswer = document.querySelector('#goodAnswer');
                    const inputs = document.querySelectorAll('input.hidden');

                    submit.value = "Next question";

                    if (selectedAnswer.value === goodAnswer.value) {
                        console.log('good answer');
                        selectedAnswer.classList.add('correct-answer');
                    } else {
                        console.log('bad answer');
                        selectedAnswer.classList.add('wrong-answer');
                        inputs.forEach((input) => {
                            console.log(input.value);
                            if (input.value === goodAnswer.value) input.classList.add('good-answer');
                        });
                        inputs.forEach((input) => input.disabled = true);
                    }

                    submitted = true; // Allow normal form submission next time
                    localStorage.setItem('submitted', 'true'); // Store in localStorage
                }
            });

        </script>

</body>
</html>

