<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset("css/admin.css") }}">
</head>
<body>
<div class="left-side">
    <a href="/dashboard" class="account-icon">
        <img src="{{ asset('img/Bright Web.png')  }}" alt="logo">
    </a>
    <div class="links">
        @if(isset($data))
            <div class="actually">
                <div class="left"></div>
                <a class="actual" href="/admin/users">Users</a>
            </div>

            <a href="/admin/quiz">Quiz</a>
        @elseif(isset($quizzes))
            <a href="/admin/users">Users</a>
        <div class="actually">
            <div class="left"></div>
            <a class="actual" href="/admin/quiz">Quiz</a>
        </div>

        @else
            <a href="/admin/users">Users</a>
            <a href="/admin/quiz">Quiz</a>
        @endif
    </div>
    <hr>
    <a href="/dashboard">Logout</a>
</div>
<div class="middle-side">
    <div class="a">
        <h1>Users List</h1>
        <button>Add new</button>
    </div>
    @if(isset($data))
        <ul>
            <div class="middle-stay">
                <table>
                    <thead>
                    <tr>
                        @foreach($data as $user)

                        @endforeach
                        <th scope="row">id</th>
                        <td>name</td>
                        <td>email</td>
                        <td>role</td>
                        <td>actions</td>
                    <tr>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if($user->role == 1)
                                    admin
                                @else
                                    user
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Supprimer cet utilisateur ?')">
                                        Supprimer
                                    </button>
                                </form>

                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Update</a>
                                <button type="button" class="btn btn-primary">view</button>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </ul>
    @elseif(isset($quizzes))
        <ul>
            <li class="middle-stay">
                <table>
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">quiz</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($quizzes as $quiz)
                        <tr>
                            <th scope="row">{{$quiz->id_quiz}}</th>
                            <td>{{$quiz->name_quiz}}</td>
                            <td>
                                <button type="button" class="btn btn-danger">supprimer</button>

            @foreach($quizzes as $quiz)
                <tr>
                    <th scope="row">{{$quiz->id_quiz}}</th>
                    <td>{{$quiz->name_quiz}}</td>
                    <td>
                        <form action="{{ route('quiz.destroy', $quiz->id_quiz) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Supprimer ce quiz ?')">
                                Supprimer
                            </button>
                        </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </li>
        </ul>
    @endif



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

