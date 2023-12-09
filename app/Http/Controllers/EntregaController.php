<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrega;
use Illuminate\Support\Carbon;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entregas = Entrega::all();
        return view('entrega.list', compact('entregas'));
    }

 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $today = Carbon::today();

        // Obter todas as entregas de hoje
        $entregas = Entrega::whereDate('created_at', $today)->get();
        return view('entrega.create', compact('entregas'));
    }

    public function list()
    {
        return view('entrega.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Entrega::create([
            "produto" => $request->produto,
            "cliente" => $request->cliente,
            "quantidade" => $request->quantidade
        ]);
        return redirect('/entrega/create')->with('success', 'Entrega criada com sucesso!');
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
    public function destroy(string $host, string $id)
    {
        $entrega = Entrega::findOrFail($id);
        $entrega->delete();
    

        return redirect('entrega/' .$host)->with('success', 'Entrega excluída com sucesso!');
    }
}
