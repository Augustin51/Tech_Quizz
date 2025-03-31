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
</div>
<div class="middle-side">
    <div class="a">
        <h1>Users List</h1>
        <button>Add new</button>
    </div>
    <ul>
        <div class="middle-stay">
            <table>
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
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </ul>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

