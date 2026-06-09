<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginPaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Login.login');
    }

    public function register(Request $request)
    {
        // 1. Validação no servidor (SEMPRE faça isso, mesmo com validação no JS)
        $request->validate([
            'first_name' => 'required|string|max:100',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:8|confirmed', // confirmed = precisa de password_confirmation
        ]);

        // 2. Cria o usuário (senha já vai com hash automático via cast)
        $user = User::create([
            'name' => $request->first_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        // 3. Loga o usuário automaticamente após o cadastro
        Auth::login($user);

        // 4. Redireciona para a home (ou onde quiser)
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
