<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class RegisterDsn extends Controller
{
    public function index()
    {
        return view('dashboard/register/registerdsn', [
            'title' => 'Create Dosen',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nid' => 'required|min:3|max:255|unique:dosens',
        ]);

        Dosen::create($validatedData);

        $request->session()->flash('success', 'Registration Succesful!');

        return redirect('/dashboard/register/dosen');
    }
}
