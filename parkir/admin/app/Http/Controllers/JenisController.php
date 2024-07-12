<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jeniss = Jenis::all();
        return view('admin.jenis', compact('jeniss')); // perbaiki view yang di-return menjadi 'jenis.index'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createjenis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        Jenis::create($request->all());

        return redirect()->route('jenis.index')
            ->with('success', 'Jenis berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jenis = Jenis::findOrFail($id);
        return view('admin.showjenis', compact('jenis'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenis = Jenis::findOrFail($id);
        return view('admin.editjenis', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $jenis = Jenis::findOrFail($id);
        $jenis->update($request->all());

        return redirect()->route('jenis.index')
            ->with('success', 'Jenis kendaraan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jenis = Jenis::findOrFail($id);
        $jenis->delete();

        return redirect()->route('admin.jenis')
            ->with('success', 'Jenis berhasil dihapus');
    }
}
