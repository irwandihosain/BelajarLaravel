<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class RegisterMhs extends Controller
{
    public function index()
    {
        return view('dashboard/register/registerdmhs', [
            'title' => 'Register  Mahasiswa',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|min:3|max:255|unique:mahasiswas',
        ]);

        Mahasiswa::create($validatedData);

        $request->session()->flash('success', 'Registration Succesful!');

        return redirect('/dashboard/register/mahasiswa');
    }
}
