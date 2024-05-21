<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::all();
        return view('agenda', compact('agenda'));
    }
    public function indexAdmin()
    {
        $agenda = Agenda::all();
        return view('admin.agenda.index', compact('agenda'));
    }
    public function create()
    {
        return view('admin.agenda.create');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
        ]);

        // Handle the image upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Agenda Gambar'), $imageName);

            // Store image path in the database
            Agenda::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => 'images/' . $imageName,
            ]);

            // Redirect back with a success message
            return redirect()->route('agenda.index')->with('success', 'Agenda berhasil ditambahkan.');
        }
    }
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('agenda'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
        ]);

        $agenda = Agenda::findOrFail($id);

        // Handle the image upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Agenda Gambar'), $imageName);
            $agenda->gambar = 'Agenda Gambar/' . $imageName;
        }

        // Update the other fields
        $agenda->judul = $request->judul;
        $agenda->deskripsi = $request->deskripsi;
        $agenda->save();

        // Redirect back with a success message
        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Find the Kas Masuk record by ID
        $agenda = Agenda::findOrFail($id);

        // Delete the record
        $agenda->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('agenda.index')->with('success', 'Data berhasil dihapus.');
    }
}
