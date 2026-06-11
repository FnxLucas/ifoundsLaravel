<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdministracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $itensPerdidos = Item::all();
        $usuarios = User::all();
        return view('itens.index',compact('itensPerdidos', 'usuarios'));
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
        $item = new Item();
        $item->usuario_encontrou_id = Auth::id();
        $item->nome = $request->nome;
        $item->localizacao = $request->localizacao;
        $item->descricao = $request->descricao;
        $item->img = $request->file('imagem')->store('imagensItens','public');
        $item->save();

        return redirect('/admin');
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
    public function update(Request $request)
    {
        $item = Item::find($request->id);
        $item->nome = $request->nome;
        $item->localizacao = $request->localizacao;
        $item->descricao = $request->descricao;
        $item->save();
        return redirect('/admin')->with('sucesso', 'Item atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Item::destroy($request->id);
        return redirect('/admin')->with('sucesso', 'Item deletado com sucesso!');
    }

    public function tornarAdmin(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->is_admin = true;
        $user->save();

        return redirect('/admin')->with('sucesso', 'Usuário ' . $user->name . ' promovido a administrador!');
    }
}
