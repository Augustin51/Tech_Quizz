<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 1) {
            $users = User::all();
            return view("admin", ["data" => $users]);
        } else {
            abort(403, 'Accès interdit. Réservé aux administrateurs.');
        }
    }
}
