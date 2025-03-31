<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />
</head>
<body>
<a href="/dashboard"  class="account-icon">
    <i class="ri-account-circle-fill"></i>
</a>
    <ul>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">email</th>
                <th scope="col">role</th>
                <th scope="col">action</th>
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

        <table class="table table-bordered">
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
                        <button type="button" class="btn btn-danger">suprimer</button>

                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Update</a>
                        <button type="button" class="btn btn-primary">view</button>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </ul>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

