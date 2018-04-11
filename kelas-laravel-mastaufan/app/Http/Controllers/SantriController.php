<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        //  untuk mengambil semuanya
        $santris = Santri::all(); 
        // compact = data uanng mau dikirm ke foldernya
        return view('santri.index', compact('santris'));
    }

    public function create()
    {
        // return view('santri.create');
        return view('santri.insert');
    }

    public function store(Request $request)
    {
        // <==> This for validation 
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        

        $nama = $request->nama;
        $umur = $request->umur;
        $alamat = $request->alamat;
        $jenis_kelamin = $request->jenis_kelamin;

        Santri::create([
            'nama' => $nama,
            'umur' => $umur,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin
        ]);
        return redirect()->route('santri.create');

    }
}
