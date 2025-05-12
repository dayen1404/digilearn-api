<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {
        return response()->json(User::all());
    }

    public function show($id) {
        $user = User::find($id);
        if (!$user) return response()->json(['error' => 'User not found'], 404);
        return response()->json($user);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'nullable|in:dosen,mahasiswa',
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        return response()->json(User::create($request->all()), 201);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        if (!$user) return response()->json(['error' => 'User not found'], 404);

        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy($id) {
        $user = User::find($id);
        if (!$user) return response()->json(['error' => 'User not found'], 404);
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }
}