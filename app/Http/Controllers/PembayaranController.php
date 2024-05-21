<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk menyimpan file
use Illuminate\Support\Str; 
use BaconQrCode\Encoder\QrCode;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRendererInterface;

class PembayaranController extends Controller
{
    public function index()
    {
         
        $donasis = Donasi::all();

        return view('pembayaran', ['donasis' => $donasis]);
    }

    public function store(Request $request)
    {
        // Validasi data
        // dd($request);
        $validatedData = $request->validate([
            'donasi_id' => 'required|exists:donasis,id', // Pastikan Donasi ID valid
            'nama_bank' => 'required|string|max:255',
            'no_rek' => 'required|numeric',
            'nama_pengirim' => 'required|string|max:255',
            'jumlah' => 'required|string|max:255',
            'bukti' => 'required|file|mimes:jpg,jpeg,png,pdf', // Validasi untuk file
        ]);

        // Simpan bukti pembayaran
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension(); // Nama file unik
            $file->storeAs('bukti_pembayaran', $filename); // Simpan di folder 'bukti_pembayaran'

            $validatedData['bukti'] = $filename; // Tambahkan nama file ke data yang disimpan
        }

        // dd($validatedData);
        // Buat entri baru di Pembayaran
        $pembayaran = Pembayaran::create($validatedData);

        // Redirect atau respons setelah sukses
        return redirect('/')->with('success', 'Pembayaran berhasil disimpan!');
    }
    public function indexAdmin()
    {
        $pembayaran = Pembayaran::with('donasi')->get();
        return view('admin.pembayaran.index', compact('pembayaran'));
    }
    public function create()
    {
        $donasi= Donasi::all(); // Ambil semua data donasi
        return view('admin.pembayaran.create', compact('donasi')); // Kirim data donasi ke view
    }
    public function storeAdmin(Request $request)
    {
        // Validasi data
        // dd($request);
        $validatedData = $request->validate([
            'donasi_id' => 'required|exists:donasis,id', // Pastikan Donasi ID valid
            'nama_bank' => 'required|string|max:255',
            'no_rek' => 'required|numeric',
            'nama_pengirim' => 'required|string|max:255',
            'jumlah' => 'required|string|max:255',
            'bukti' => 'required|file|mimes:jpg,jpeg,png,pdf', // Validasi untuk file
        ]);

        // Simpan bukti pembayaran
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension(); // Nama file unik
            $file->storeAs('bukti_pembayaran', $filename); // Simpan di folder 'bukti_pembayaran'

            $validatedData['bukti'] = $filename; // Tambahkan nama file ke data yang disimpan
        }

        // dd($validatedData);
        // Buat entri baru di Pembayaran
        $pembayaran = Pembayaran::create($validatedData);

        // Redirect atau respons setelah sukses
        return redirect('/pembayaran-admin')->with('success', 'Pembayaran berhasil disimpan!');
    }
    public function edit($id)
    {
        $donasi= Donasi::all();
        $pembayaran = Pembayaran::findOrFail($id);
        return view('admin.pembayaran.edit', compact('pembayaran', 'donasi'));
    }
    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan melalui form
        $validatedData = $request->validate([
            'nama_bank' => 'required|string|max:255',
            'no_rek' => 'required|numeric',
            'nama_pengirim' => 'required|string|max:255',
            'jumlah' => 'required|string|max:255',
            'bukti' => 'nullable|file|mimes:jpg,jpeg,png,pdf', // Bukti pembayaran bisa tidak diubah
        ]);

        // Ambil data pembayaran berdasarkan ID
        $pembayaran = Pembayaran::findOrFail($id);

        // Perbarui data pembayaran sesuai dengan data yang diterima dari form
        $pembayaran->nama_bank = $validatedData['nama_bank'];
        $pembayaran->no_rek = $validatedData['no_rek'];
        $pembayaran->nama_pengirim = $validatedData['nama_pengirim'];
        $pembayaran->jumlah = $validatedData['jumlah'];

        // Jika ada file bukti pembayaran yang diunggah, simpan file baru
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension(); // Nama file unik
            $file->storeAs('bukti_pembayaran', $filename); // Simpan di folder 'bukti_pembayaran'

            // Hapus file lama jika ada
            if ($pembayaran->bukti) {
                Storage::delete('bukti_pembayaran/' . $pembayaran->bukti);
            }

            // Perbarui nama file bukti pembayaran
            $pembayaran->bukti = $filename;
        }

        // Simpan perubahan data pembayaran
        $pembayaran->save();

        // Redirect ke halaman terkait dengan pesan sukses
        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil diperbarui');
    }
    public function destroy($id)
    {
        // Find the Kas Masuk record by ID
        $pembayaran = Pembayaran::findOrFail($id);

        // Delete the record
        $pembayaran->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('pembayaran.index')->with('success', 'Data berhasil dihapus.');
    }
}
