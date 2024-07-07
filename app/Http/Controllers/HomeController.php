<?php

namespace App\Http\Controllers;

use App\Services\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dbUser = Auth::user();
        $password = $dbUser->password;
        $cpf = $dbUser->cpf;
        $alertPassword = Hash::check($cpf,$password);

        Logger::access('Página inicial após login');

        return view('home',compact('dbUser','alertPassword'));
    }
}
