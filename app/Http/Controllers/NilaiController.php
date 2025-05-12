<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nilai;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    public function index()
    {
        return response()->json(Nilai::all());
    }

    public function show($id)
    {
        $nilai = Nilai::find($id);
        if (!$nilai)
            return response()->json(['error' => 'Nilai not found'], 404);
        return response()->json($nilai);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tugas_id' => 'required|exists:materi_tugas,id',
            'mahasiswa_id' => 'required|exists:users,id',
            'nilai' => 'required|numeric',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors(), 400);

        return response()->json(Nilai::create($request->all()), 201);
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        if (!$nilai)
            return response()->json(['error' => 'Nilai not found'], 404);

        $nilai->update($request->all());
        return response()->json($nilai);
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        if (!$nilai)
            return response()->json(['error' => 'Nilai not found'], 404);
        $nilai->delete();
        return response()->json(['message' => 'Nilai deleted']);
    }
}