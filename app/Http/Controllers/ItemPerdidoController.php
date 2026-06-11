<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemPerdidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $itensPerdidos = Item::all();

        return view('index', compact('itensPerdidos'));
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
        $item->quemAchou = $request->quemAchou;
        $item->img = $request->file('imagem')->store('imagensItens', 'public');
        $item->save();

        return redirect('/itensperdidos');
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
