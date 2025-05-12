<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Validator;

class MataKuliahController extends Controller
{
    public function index()
    {
        return response()->json(MataKuliah::all());
    }

    public function show($id)
    {
        $mataKuliah = MataKuliah::find($id);
        if (!$mataKuliah) return response()->json(['error' => 'Mata Kuliah not found'], 404);
        return response()->json($mataKuliah);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'deskripsi' => 'nullable|string',
            'video_link' => 'nullable|url',
            'dosen_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        return response()->json(MataKuliah::create($request->all()), 201);
    }

    public function update(Request $request, $id)
    {
        $mataKuliah = MataKuliah::find($id);
        if (!$mataKuliah) return response()->json(['error' => 'Mata Kuliah not found'], 404);

        $mataKuliah->update($request->all());
        return response()->json($mataKuliah);
    }

    public function destroy($id)
    {
        $mataKuliah = MataKuliah::find($id);
        if (!$mataKuliah) return response()->json(['error' => 'Mata Kuliah not found'], 404);
        $mataKuliah->delete();
        return response()->json(['message' => 'Mata Kuliah deleted']);
    }
}