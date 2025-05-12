<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enroll;
use Illuminate\Support\Facades\Validator;

class EnrollController extends Controller
{
    public function index()
    {
        return response()->json(Enroll::all());
    }

    public function show($id)
    {
        $enroll = Enroll::find($id);
        if (!$enroll) return response()->json(['error' => 'Enroll not found'], 404);
        return response()->json($enroll);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'mata_kuliah_id' => 'required|exists:mata_kuliah,id',
        ]);

        if ($validator->fails()) return response()->json($validator->errors(), 400);

        return response()->json(Enroll::create($request->all()), 201);
    }

    public function update(Request $request, $id)
    {
        $enroll = Enroll::find($id);
        if (!$enroll) return response()->json(['error' => 'Enroll not found'], 404);
        $enroll->update($request->all());
        return response()->json($enroll);
    }

    public function destroy($id)
    {
        $enroll = Enroll::find($id);
        if (!$enroll) return response()->json(['error' => 'Enroll not found'], 404);
        $enroll->delete();
        return response()->json(['message' => 'Enroll deleted']);
    }
}