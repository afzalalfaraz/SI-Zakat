<?php

namespace App\Http\Controllers;

use App\Models\KasKeluar;
use Illuminate\Http\Request;

class KasKeluarController extends Controller
{
    public function index()
    {
        $kasKeluar = KasKeluar::orderBy('tanggal', 'desc')->get();
        return view('admin.kasKeluar.index', compact('kasKeluar'));
    }
    public function create()
    {
        return view('admin.kasKeluar.create');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        KasKeluar::create([
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect back with a success message
        return redirect()->route('kasKeluar.index')->with('success', 'Data kas masuk berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $kasKeluar = KasKeluar::findOrFail($id);
        return view('admin.kasKeluar.edit', compact('kasKeluar'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        // Find the Kas Masuk record by ID
        $kasKeluar = KasKeluar::findOrFail($id);

        // Update the record with new data
        $kasKeluar->update([
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect back to the index page with a success message
        return redirect()->route('kasKeluar.index')->with('success', 'Data Kas Masuk berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Find the Kas Masuk record by ID
        $kasKeluar = KasKeluar::findOrFail($id);

        // Delete the record
        $kasKeluar->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('kasKeluar.index')->with('success', 'Data Kas Masuk berhasil dihapus.');
    }
}
