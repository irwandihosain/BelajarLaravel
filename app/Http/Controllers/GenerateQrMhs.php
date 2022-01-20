<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class GenerateQrMhs extends Controller
{
    public function index()
    {
        return view('dashboard/generateqr/generateqrmhs');
    }

    public function update(Request $request)
    {
        @ddd($request);
        $validatedData = $request->validate([
            'image' => 'required',
        ]);

        Mahasiswa::where('nim', $request->nim)
            ->update($validatedData);


        return redirect('/dashboard/generateqr/generateqrmhs')->with('success', 'Post has been updated');
    }
}
