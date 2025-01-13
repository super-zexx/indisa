<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Helpers\Roman;
use App\Models\Perangkat;
use App\Models\JenisSurat;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public  function index()
    {
        $surat = Surat::with('perangkat')->get();
        $penduduk = Penduduk::all();
        $perangkat = Perangkat::all();
        return view('surat.suratkeluar.index',compact('surat','penduduk','perangkat'));
    }
    public function create()
    {
        $jenisSurat = JenisSurat::all();
        $nomorSurat = $this->generateNomorSurat();
        $perangkat = Perangkat::all();
        return view('surat.suratkeluar.create', compact('jenisSurat', 'nomorSurat', 'perangkat'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'jenis_surat_id' => 'required',
            'penduduk_id' => 'required',
            'keperluan' => 'required',
        ]);

        $surat = Surat::create([
            'nomor_surat' => $this->generateNomorSurat(),
            'jenis_surat_id' => $request->jenis_surat_id,
            'penduduk_id' => $request->penduduk_id,
            'keperluan' => $request->keperluan,
            'perangkat_id' => $request->perangkat_id,
            'dikeluarkan_tanggal' => $request->dikeluarkan_tanggal,
            'berlaku_sampai' => $request->berlaku_sampai,
            'status' => $request->status,
        ]);

        return redirect()->route('surat.index',)
            ->with('success', 'Surat berhasil dibuat');
    }

    public function show(Surat $surat)
    {
        return view('surat.show', compact('surat'));
    }

    private function generateNomorSurat()
    {
        $lastNumber = Surat::whereYear('created_at', now()->year)
            ->count();

        return sprintf(
            '%03d/DS/%s/%s',
            $lastNumber + 1,
            Roman::convert(now()->month),
            now()->year
        );
    }



    public function print($id)
{
    // Ambil data surat berdasarkan ID
    $surat = Surat::with(['jenisSurat', 'penduduk', 'perangkat'])->find($id);

    if (!$surat) {
        abort(404, 'Data surat tidak ditemukan.');
    }

    // Tentukan view berdasarkan jenis surat
    switch ($surat->jenisSurat->nama_surat) {
        case 'Pengantar Surat Keterangan Catatan Kepolisian':
            $view = 'surat.print.skck';
            break;
        case 'Surat Undangan':
            $view = 'prints.surat_undangan';
            break;
        case 'Surat Pernyataan':
            $view = 'prints.surat_pernyataan';
            break;
        default:
            $view = 'prints.default';
            break;
    }

    // Kirim data ke view
    return view($view, compact('surat'));
}

}
