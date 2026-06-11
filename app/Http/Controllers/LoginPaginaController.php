<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class LoginPaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('/itensperdidos');
        }

        return view('Login.login');
    }
    
    public function register(Request $request)
    {
        // 1. Validação no servidor (SEMPRE faça isso, mesmo com validação no JS)
        $dadosValidados = $request->validate([
            'name' => 'required|string|max:100',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:8|confirmed',
        ]);

        $is_first = User::count() === 0;
        $user = User::create($dadosValidados);

        if ($is_first) {
            $user->is_admin = true;
            $user->save();
        }

        Auth::login($user);

        return redirect('/itensperdidos');
    }
    
    public function login(Request $request)
    {
        $dadosValidados = $request->validate([
            'email'      => 'required|email',
            'password'   => 'required|string',
        ]);

        if(Auth::attempt($dadosValidados)){
            $request->session()->regenerate();
            return redirect()->intended('/itensperdidos');
        } 
        
        throw ValidationException::withMessages([
            'credenciais' => 'As credenciais estão incorretas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
