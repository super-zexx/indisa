<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q');
        return Penduduk::where('nik', 'like', "%{$query}%")
            ->orWhere('nama', 'like', "%{$query}%")
            ->get();
    }
}
