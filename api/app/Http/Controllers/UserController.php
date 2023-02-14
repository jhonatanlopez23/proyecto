<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }


    public function show($id)
    {
        return User::find($id);
    }

    public function create(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }


    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response(null, 200);
    }
}
