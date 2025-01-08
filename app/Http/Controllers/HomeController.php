<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisi;
use App\Models\Rekening;
use App\Models\Program;
use App\Models\Bannerhome;
use App\Models\Berita;


class HomeController extends Controller
{
    public function index()
    {
        $visiMisi = VisiMisi::first();  // Pastikan ada data di tabel 'visi_misis'
        $rekening = Rekening::first();
        $program = Program::first();
        $bannerhome = Bannerhome::first();
        // $berita = Berita::first();

        return view('index', compact('visiMisi', 'rekening', 'program', 'bannerhome'));

    }

    public function berita()
    {
        $berita = Berita::orderBy('tanggalberita', 'desc')->get(); // Menampilkan semua berita


        return view('berita', compact('berita'));
    }

    // public function detailberita($id)
    // {
    //     $berita = Berita::findOrFail($id);
    //     return view('blog-detail', compact('berita'));
    // }

    // public function blogdetail(Berita $berita)
    // {
    //     return view('blog-detail', compact('berita'));
    // }

    public function blogdetails($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail(); // Cari berita berdasarkan slug
        return view('blog-details', compact('berita')); // Kirim berita ke halaman detail
    }

    public function pageView(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        } else {
            abort(404);
        }
    }

    
}
