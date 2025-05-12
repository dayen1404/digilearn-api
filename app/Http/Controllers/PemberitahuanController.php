<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemberitahuan;
use Illuminate\Support\Facades\Validator;

class PemberitahuanController extends Controller
{
    public function index()
    {
        return response()->json(Pemberitahuan::all());
    }

    public function show($id)
    {
        $pemberitahuan = Pemberitahuan::find($id);
        if (!$pemberitahuan) return response()->json(['error' => 'Pemberitahuan not found'], 404);
        return response()->json($pemberitahuan);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mata_kuliah_id' => 'required|exists:mata_kuliah,id',
            'isi' => 'required|string',
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        return response()->json(Pemberitahuan::create($request->all()), 201);
    }

    public function update(Request $request, $id)
    {
        $pemberitahuan = Pemberitahuan::find($id);
        if (!$pemberitahuan) return response()->json(['error' => 'Pemberitahuan not found'], 404);

        $pemberitahuan->update($request->all());
        return response()->json($pemberitahuan);
    }

    public function destroy($id)
    {
        $pemberitahuan = Pemberitahuan::find($id);
        if (!$pemberitahuan) return response()->json(['error' => 'Pemberitahuan not found'], 404);
        $pemberitahuan->delete();
        return response()->json(['message' => 'Pemberitahuan deleted']);
    }
}