<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Praktikum;
use Illuminate\Support\Facades\Validator;

class PraktikumController extends Controller
{
    // public function index() {
    //     return response()->json([
    //         'message' => 'Selamat Datang di Web Programming Unpas',
    //     ], 200); // test
    // }

    public function tambahPraktikum(Request $request){
        $validator=Validator::make($request->all(), [
            'tahun' => 'required',
            'id_jenis_praktikum' => 'required | exists:jenis_praktikum,id_jenis_praktikum'
        ]);
        if ($validator -> fails()) {
            return response() -> json(['message' => $validator->errors()->first()], 400);
        }
        // $request->validate([
        //     'tahun' => 'required',
        //     'id_jenis_praktikum' => 'required | exists:jenis_praktikum,id_jenis_praktikum'
        // ]); // tambah praktikum

        try {
            // dd($request);
            $praktikum = new Praktikum;
            $praktikum->query()->create($request->all());

            return response()->json([
                'message' => 'berhasil',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'gagal menambahkan praktikum',
                'errors' => $e->getMessage()// '{constraint}' // $e->getMessage()
            ], 400);
        }
    }

    public function editPraktikum(Request $request, $id_praktikum){
        $request->validate([
            'tahun' => 'required',
            'id_jenis_praktikum' => 'required'
        ]); // edit praktkum

        try {
            $praktikum = Praktikum::where(['id_praktikum'=>$id_praktikum]);
            $praktikum->update($request->all());

            return response()->json([
                'message' => 'berhasil',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'gagal mengedit praktikum',
                'errors' => $e->getMessage() // '{constraint}' // $e->getMessage()
            ], 400);
        }
    }

    public function hapusPraktikum($id_praktikum){
        try {
            $praktikum = Praktikum::where(['id_praktikum'=>$id_praktikum]);
            $praktikum->delete();

            return response()->json([
                'message' => 'berhasil',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'gagal menghapus praktikum',
                'errors' => 'praktikum tidak ditemukan' // $e->getMessage()
            ], 400);
        }
    }
}
