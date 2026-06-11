<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{
    public function index(Request $request)
    {
       $itensUsuario = Item::where('usuario_encontrou_id', Auth::id())->get();
       return view('itens.paginaUsuario', ['usuario' => Auth::user(), 'itensUsuario'=>$itensUsuario]);
    }
}
