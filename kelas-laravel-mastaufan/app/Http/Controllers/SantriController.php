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

    public function show($id)
    {
        $santri = Santri::findOrFail($id);  // -> Mencari ID nya 
                                            // -> findOrFail = untuk jika id yang di cari tidak ada maka dia akan memunculkan pesan eror
        // dd($santri);

        return view('santri.show', compact('santri')); // -> Compact untuk mengirim data dari variabel yang di atas

    }

    public function edit($id)
    {
        $santri = Santri::findOrFail($id);

        return view('santri.edit', compact('santri'));
    }

    public function update($id, Request $request)
    {
        $santri = Santri::findOrFail($id);

        // Cara 1
        // $santri->nama = $request->nama;
        // $santri->umur = $request->umur;
        // $santri->alamat = $request->alamat;
        // $santri->jenis_kelamin = $request->jenis_kelamin;
        // $santri->save();

        // Cara 2
        $santri->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('santri.index');
    }

    public function destroy($id)
    {
        $santri = Santri::findOrFail($id);
        $santri->delete();

        return redirect()->route('santri.index');
    }
}
