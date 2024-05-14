<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lógica para listar usuários
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Lógica para mostrar o formulário de criação do usuário
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Lógica para salvar um novo usuário
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Lógica para mostrar os detalhes de um usuário
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Lógica para mostrar os detalhes de edição de um usuário
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Lógica para atualizar um agendamento
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Lógica para deletar um agendamento
    }
}
