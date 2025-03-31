<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller

{
    public function checkAdmin()
    {
        if (Auth::user()->role != 1) {
            abort(403, 'Accès interdit. Réservé aux administrateurs.');
        }
    }

    public function index()
    {
        $this->checkAdmin();

        $users = User::all();

        $quiz = Quiz::all();

        return view("admin", ["data" => $users, "quizzes" => $quiz]);
    }

    public function destroy($id)
    {
        $this->checkAdmin();

        $user = User::findOrFail($id);
        $user->delete();
        return redirect("/admin");
    }

    public function edit($id)
    {
        $this->checkAdmin();

        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }



    public function update(Request $request, $id)
    {
        $this->checkAdmin();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|integer',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);


        return redirect('/admin')->with('success', 'Utilisateur mis à jour.');
    }
}
