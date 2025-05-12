<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;

class AutenticacaoController extends Controller
{
    public function login()
    {
        return view('formularios.login');
    }

    public function logar(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'senha' => 'required|string',
        ]);

        $credentials = $request->all();

        $professor = Professor::where('email', $request->input('login'))->first();

        if($professor && Hash::check($request->input('senha'), $professor->senha)){
            
            return view('home', $request);
            // return redirect(RouteServiceProvider::HOME);
            
        }
        return redirect()->back()->with('error', 'Usuário e/ou senha estão incorretos');
    }

    public function logout()
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
