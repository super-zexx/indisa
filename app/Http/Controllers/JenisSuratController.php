<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use Illuminate\Http\Request;

class JenisSuratController extends Controller
{
    public function getFormTambahan(Request $request)
    {
        $jenisSurat = JenisSurat::find($request->jenis_surat_id);

        if (!$jenisSurat) {
            return response()->json(['error' => 'Jenis surat tidak ditemukan'], 404);
        }

        // Logika untuk menentukan form tambahan
        switch ($jenisSurat->nama_surat) {
            case 'Surat Keterangan Usaha Mikro':
                $form = view('surat.partials.usaha_mikro')->render();
                break;
            case 'Pengantar Surat Keterangan Catatan Kepolisian':
                $form = view('surat.partials.skck')->render();
                break;
            default:
                $form = '<p>Tidak ada form tambahan untuk jenis surat ini.</p>';
                break;
        }

        return response()->json(['form' => $form], 200, ['Content-Type' => 'application/json']);

    }
}
