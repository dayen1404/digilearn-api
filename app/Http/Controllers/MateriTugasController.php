<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriTugas;
use Illuminate\Support\Facades\Validator;

class MateriTugasController extends Controller
{
    public function index()
    {
        return response()->json(MateriTugas::all());
    }

    public function show($id)
    {
        $materiTugas = MateriTugas::find($id);
        if (!$materiTugas) return response()->json(['error' => 'Materi Tugas not found'], 404);
        return response()->json($materiTugas);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mata_kuliah_id' => 'required|exists:mata_kuliah,id',
            'tipe' => 'required|in:materi,tugas',
            'judul' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        return response()->json(MateriTugas::create($request->all()), 201);
    }

    public function update(Request $request, $id)
    {
        $materiTugas = MateriTugas::find($id);
        if (!$materiTugas) return response()->json(['error' => 'Materi Tugas not found'], 404);

        $materiTugas->update($request->all());
        return response()->json($materiTugas);
    }

    public function destroy($id)
    {
        $materiTugas = MateriTugas::find($id);
        if (!$materiTugas) return response()->json(['error' => 'Materi Tugas not found'], 404);
        $materiTugas->delete();
        return response()->json(['message' => 'Materi Tugas deleted']);
    }
}