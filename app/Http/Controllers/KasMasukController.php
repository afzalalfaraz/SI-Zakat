<?php

namespace App\Http\Controllers;

use App\Models\KasMasuk;
use Illuminate\Http\Request;

class KasMasukController extends Controller
{
    public function index()
    {
        $kasMasuk = KasMasuk::orderBy('tanggal', 'desc')->get();
        return view('admin.kasMasuk.index', compact('kasMasuk'));
    }
    public function create()
    {
        return view('admin.kasMasuk.create');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        // Create a new KasMasuk record
        KasMasuk::create([
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect back with a success message
        return redirect()->route('kasMasuk.index')->with('success', 'Data kas masuk berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $kasMasuk = KasMasuk::findOrFail($id);
        return view('admin.kasMasuk.edit', compact('kasMasuk'));
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
        $kasMasuk = KasMasuk::findOrFail($id);

        // Update the record with new data
        $kasMasuk->update([
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect back to the index page with a success message
        return redirect()->route('kasMasuk.index')->with('success', 'Data Kas Masuk berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Find the Kas Masuk record by ID
        $kasMasuk = KasMasuk::findOrFail($id);

        // Delete the record
        $kasMasuk->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('kasMasuk.index')->with('success', 'Data Kas Masuk berhasil dihapus.');
    }
}
