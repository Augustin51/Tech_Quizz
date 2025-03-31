<?php

namespace App\Http\Controllers;

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
        return view("admin", ["data" => $users]);
    }

    public function destroy($id)
    {
        $this->checkAdmin();

        $user = User::findOrFail($id);
        $user->delete();
        return redirect("/admin");
    }
}
