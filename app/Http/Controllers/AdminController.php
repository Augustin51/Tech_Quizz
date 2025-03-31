<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 1) {
            return view("admin");
        } else {
            abort(403, 'Accès interdit. Réservé aux administrateurs.');
        }
    }
}
