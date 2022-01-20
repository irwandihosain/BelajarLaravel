<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class ambilScan extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required'
        ]);

        $validatedData['nama'] = auth()->user()->name;

        MataKuliah::create($validatedData);

        return redirect('/scan')->with('success', 'Absen Masuk');
    }
}
