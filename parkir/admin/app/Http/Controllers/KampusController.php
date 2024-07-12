<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kampuses = Kampus::all();
        return view('admin.kampus', compact('kampuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createkampus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:20',
            'alamat' => 'required|string|max:45',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Kampus::create($request->all());

        return redirect()->route('kampus.index')
            ->with('success', 'Kampus berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kampus = Kampus::findOrFail($id);
        return view('admin.showkampus', compact('kampus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kampus = Kampus::findOrFail($id);
        return view('admin.editkampus', compact('kampus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:20',
            'alamat' => 'required|string|max:45',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $kampus = Kampus::findOrFail($id);
        $kampus->update($request->all());

        return redirect()->route('kampus.index')
            ->with('success', 'Kampus berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kampus = Kampus::findOrFail($id);
        $kampus->delete();

        return redirect()->route('admin.kampus')
            ->with('success', 'Kampus berhasil dihapus');
    }
}
