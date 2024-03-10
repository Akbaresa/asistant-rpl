<?php

namespace App\Http\Controllers;

use App\Models\Aslab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AslabController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'npm' => 'required|unique:aslab|regex:/^[0-9]+$/',
            'email' => 'required|unique:aslab|ends_with:@gmail.com',
            'password' => 'required',
            'no_wa' => 'required|unique:aslab|max:12',
            'status_aktif' => 'required',
            'id_role_aslab' => 'required|exists:role_aslab,id_role_aslab',
        ];
        $messages = [
            'required' => ':attribute wajib diisi',
            'unique' => ':attribute sudah terdaftar',
            'regex' => ':attribute berupa angka tanpa titik (.)',
            'ends_with' => ':attribute harus diakhiri dengan :values',
            'max' => ':attribute maksimal berisi :max',
            'exists' => ':attribute tidak valid',
        ];
        $attributes = [
            'nama' => 'Nama',
            'npm' => 'NPM',
            'email' => 'Email',
            'password' => 'Password',
            'no_wa' => 'Nomor WhatsApp',
            'status_aktif' => 'Status Aktif',
            'id_role_aslab' => 'Role Aslab',
        ];
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal menambahkan Aslab',
                'errors' => $validator->errors()->first(),
            ], 400);
        }

        try {
            Aslab::query()->create($request->all());

            return response()->json([
                'message' => 'Berhasil menambahkan Aslab',
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Gagal menambahkan Aslab',
                'errros' => $th->getMessage(),
            ], 400);
        }
    }

    public function update(Request $request, $id_aslab)
    {
        $rules = [
            'npm' => 'unique:aslab,npm|regex:/^[0-9]+$/',
            'email' => 'unique:aslab|ends_with:@gmail.com',
            'no_wa' => 'unique:aslab|max:12',
            'id_role_aslab' => 'exists:role_aslab,id_role_aslab',
        ];
        $messages = [
            'unique' => ':attribute sudah terdaftar',
            'regex' => ':attribute berupa angka tanpa titik (.)',
            'ends_with' => ':attribute harus diakhiri dengan :values',
            'max' => ':attribute maksimal berisi :max',
            'exists' => ':attribute tidak valid',
        ];
        $attributes = [
            'npm' => 'NPM',
            'email' => 'Email',
            'no_wa' => 'Nomor WhatsApp',
            'id_role_aslab' => 'Role Aslab',
        ];
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal memperbarui Aslab',
                'errors' => $validator->errors()->first(),
            ], 400);
        }

        try {
            Aslab::query()
                ->where('id_aslab', $id_aslab)
                ->first()
                ->update($request->all());

            return response()->json([
                'message' => 'Berhasil memperbarui Aslab',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Gagal memperbarui Aslab',
                'errors' => $th->getMessage(),
            ], 400);
        }

    }

    public function delete($id_aslab)
    {
        try {
            Aslab::query()
                ->where('id_aslab', $id_aslab)
                ->delete();

            return response()->json([
                'message' => 'Berhasil menghapus Aslab',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Gagal menghapus Aslab',
                'errors' => $th->getMessage(),
            ], 400);
        }
    }
}
