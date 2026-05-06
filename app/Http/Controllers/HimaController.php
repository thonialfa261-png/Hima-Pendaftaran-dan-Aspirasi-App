<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HimaController extends Controller
{
    public function storeRegistration(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|unique:registrations',
            'angkatan' => 'required',
            'alasan' => 'required',
        ]);

        DB::table('registrations')->insert($validated + ['created_at' => now()]);

        return back()->with('success', 'Pendaftaran berhasil dikirim!');
    }

    public function storeAspiration(Request $request)
    {
        $validated = $request->validate([
            'subjek' => 'required|string|max:255',
            'pesan' => 'required',
            'is_anonymous' => 'nullable',
        ]);

        DB::table('aspirations')->insert([
            'subjek' => $validated['subjek'],
            'pesan' => $validated['pesan'],
            'is_anonymous' => $request->has('is_anonymous'),
            'created_at' => now(),
        ]);

        return back()->with('success', 'Aspirasi telah diterima!');
    }
}