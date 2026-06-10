<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemPaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->route('id');
        $item = Item::findOrFail($id);

        return view('itens.paginaItem', compact('item'));
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

    public function reivindicar(Request $request, string $id)
    {
        $item = Item::findOrFail($id);
        
        // Verifica se o item já foi reivindicado
        if ($item->usuario_reivindicante_id) {
            return back()->with('erro', 'Este item já foi reivindicado por outra pessoa.');
        }

        $item->usuario_reivindicante_id = Auth::id();
        $item->save();

        return back()->with('sucesso', 'Item reivindicado com sucesso! Entraremos em contato.');
    }
}
