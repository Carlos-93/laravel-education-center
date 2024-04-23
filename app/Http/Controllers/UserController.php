<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController
{
    // Método para mostrar todos los usuarios
    public function index()
    {
        $users = User::orderBy('name', 'asc')->get();
        return view('users.index', compact('users'));
    }

    // Método para mostrar un usuario
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Método para editar un usuario
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Método para actualizar un usuario
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index');
    }

    // Método para eliminar un usuario
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}