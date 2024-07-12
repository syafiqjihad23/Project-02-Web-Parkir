<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kampus;
use Illuminate\Http\Request;

class AreaParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areaparkirs = AreaParkir::all();
        return view('admin.areaparkir', compact('areaparkirs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kampuses = Kampus::all(); // Mengambil semua kampus dari model Kampus
        return view('admin.createareaparkir', compact('kampuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:20',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string|max:45',
            'kampus_id' => 'required|exists:kampuses,id'
        ]);

        AreaParkir::create($request->all());

        return redirect()->route('areaparkir.index')
            ->with('success', 'Data area parkir berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $areaparkir = AreaParkir::findOrFail($id);
        return view('admin.showareaparkir', compact('areaparkir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $areaparkir = AreaParkir::findOrFail($id);
        $kampuses = Kampus::all(); // Mengambil semua kampus dari model Kampus
        return view('admin.editareaparkir', compact('areaparkir', 'kampuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:20',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string|max:45',
            'kampus_id' => 'required|exists:kampuses,id'
        ]);

        $areaparkir = AreaParkir::findOrFail($id);
        $areaparkir->update($request->all());

        return redirect()->route('areaparkir.index')
            ->with('success', 'Data area parkir berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $areaparkir = AreaParkir::findOrFail($id);
        $areaparkir->delete();

        return redirect()->route('areaparkir.index')
            ->with('success', 'Data area parkir berhasil dihapus');
    }
}
