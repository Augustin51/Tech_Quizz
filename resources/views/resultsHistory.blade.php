<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="{{ asset("css/quiz.css") }}">
    <link rel="stylesheet" href="{{ asset('css/resultsHistory.css') }}">
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
        <h1>My result</h1>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Quiz Name</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($result->date)->format('d F Y') }}</td>
                        <td>{{ $result->name_quiz }}</td>
                        <td>{{ $result->score }}/10</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <img class="ellipse ellipse-2" src="{{ asset('img/ellipse2.svg') }}" alt="ellipse">
    </div>
</div>
</body>
</html>

