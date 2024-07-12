<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Kendaraan;
use App\Models\AreaParkir;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('admin.transaksi', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraans = Kendaraan::all();
        $areaParkirs = AreaParkir::all();

        return view('admin.createtransaksi', compact('kendaraans', 'areaParkirs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'akhir' => 'required|date_format:H:i',
            'biaya' => 'required|numeric',
            'kendaraan_id' => 'required|exists:kendaraans,id',
            'area_parkir_id' => 'required|exists:area_parkirs,id',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksi.index')
            ->with('success', 'Data transaksi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.showtransaksi', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $kendaraans = Kendaraan::all();
        $areaParkirs = AreaParkir::all();
        return view('admin.edittransaksi', compact('transaksi', 'kendaraans', 'areaParkirs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'akhir' => 'required|date_format:H:i',
            'biaya' => 'required|numeric',
            'kendaraan_id' => 'required|exists:kendaraans,id',
            'area_parkir_id' => 'required|exists:area_parkirs,id',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());

        return redirect()->route('transaksi.index')
            ->with('success', 'Data transaksi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')
            ->with('success', 'Data transaksi berhasil dihapus');
    }
}
