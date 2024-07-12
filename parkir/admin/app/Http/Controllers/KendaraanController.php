<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Jenis;
use App\Models\AreaParkir;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('admin.kendaraan', compact('kendaraans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jeniss = Jenis::all();
        $areaParkirs = AreaParkir::all(); // Mengambil semua data area parkir

        return view('admin.createkendaraan', compact('jeniss', 'areaParkirs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|string|max:50',
            'pemilik' => 'required|string|max:100',
            'nopol' => 'required|string|max:20',
            'tahun_beli' => 'required|integer',
            'jenis_kendaraan_id' => 'required|exists:jenis,id',
            'kapasitas_id' => 'required|exists:area_parkirs,id', // memastikan kapasitas ada di area parkir
            'rating' => 'required|integer|min:1|max:5'
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('admin.showkendaraan', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $jeniss = Jenis::all();
        $areaParkirs = AreaParkir::all(); // Mengambil semua data area parkir

        return view('admin.editkendaraan', compact('kendaraan', 'jeniss', 'areaParkirs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required|string|max:50',
            'pemilik' => 'required|string|max:100',
            'nopol' => 'required|string|max:20',
            'tahun_beli' => 'required|integer',
            'jenis_kendaraan_id' => 'required|exists:jenis,id',
            'kapasitas_id' => 'required|exists:area_parkirs,id', // memastikan kapasitas ada di area parkir
            'rating' => 'required|integer|min:1|max:5'
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil dihapus');
    }
}
