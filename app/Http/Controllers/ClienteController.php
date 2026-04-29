<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $query = Cliente::query();

        if ($request->nome) {
            $query->where('nome', 'ilike', '%' . $request->nome . '%');
        }

        return $query->paginate(10);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:clientes',
            'telefone' => 'nullable|string'
        ]);

        $cliente = Cliente::create($data);

        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $data = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'telefone' => 'nullable|string'
        ]);

        $cliente->update($data);

        return $cliente;
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return response()->json(null, 204);
    }
}