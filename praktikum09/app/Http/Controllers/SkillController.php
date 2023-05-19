<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('form_skill');
    }
    // Fungsi untuk menampilkan hasil
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill[]' => 'required'
        ]);
        return view('hasil_form', ['data' => $request]);
    }
}
