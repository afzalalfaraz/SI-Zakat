<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        $donasi = Donasi::all();
        return view('admin.donasi.index', compact('donasi'));
    }
    public function create()
    {
        return view('admin.donasi.create');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'nama' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        Donasi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect back with a success message
        return redirect()->route('donasi.index')->with('success', 'Donasi berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('admin.donasi.edit', compact('donasi'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'nama' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        // Find the Kas Masuk record by ID
        $donasi = Donasi::findOrFail($id);

        // Update the record with new data
        $donasi->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect back to the index page with a success message
        return redirect()->route('donasi.index')->with('success', 'Data Donasi berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Find the Kas Masuk record by ID
        $donasi = Donasi::findOrFail($id);

        // Delete the record
        $donasi->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('donasi.index')->with('success', 'Data Donasi berhasil dihapus.');
    }
}
