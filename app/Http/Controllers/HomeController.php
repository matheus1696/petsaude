<?php

namespace App\Http\Controllers;

use App\Models\Notice\NoticeBoard;
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
        $dbNotices = NoticeBoard::where('mark_read',FALSE)
            ->where('to_specific_user_id',Auth::user()->id)
            ->get();
            
        //Verificação de Senha do usuário
        $password = $dbUser->password;
        $cpf = $dbUser->cpf;
        $alertPassword = Hash::check($cpf,$password);

        Logger::access('Página inicial após login');

        return view('home',compact('dbUser','dbNotices','alertPassword'));
    }
}
