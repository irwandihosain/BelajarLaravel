<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class GenerateQrDsn extends Controller
{
    public function index()
    {
        return view('dashboard/generateqr/generateqrdsn');
    }

    public function update(Request $request)
    {
        @ddd($request);
        $validatedData = $request->validate([
            'image' => 'required',
        ]);

        Dosen::where('nid', $request->nid)
            ->update($validatedData);


        return redirect('/dashboard/generateqr/generateqrmhs')->with('success', 'Post has been updated');
    }
}
