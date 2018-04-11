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
            'umur' => 'required|integer',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        // Cara 1
        // $nama = $request->nama;
        // $umur = $request->umur;
        // $alamat = $request->alamat;
        // $jenis_kelamin = $request->jenis_kelamin;
        
        // Santri::create([
        //     'nama' => $nama,
        //     'umur' => $umur,
        //     'alamat' => $alamat,
        //     'jenis_kelamin' => $jenis_kelamin
        // ]);

        // Cara 2
        // $data['nama'] = $request->nama;
        // $data['umur'] = $request->umur;
        // $data['alamat'] = $request->alamat;
        // $data['jenis_kelamin'] = $request->jenis_kelamin;

        // Santri::create($data);

        // Cara 3
        Santri::create($request->all());

        return redirect()->route('santri.index');

    }
}
