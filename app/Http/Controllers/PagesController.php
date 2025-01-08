<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Program;
use App\Models\Rekening;
use App\Models\VisiMisi;
use App\Models\Bannerhome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class PagesController extends Controller
{
    private function getProgramYayasan(){
        // return Cache::remember('programs', 120, function() {
            return Program::with('berita') // Eager loading berita terkait
                ->orderBy('id', 'asc')
                ->get(); // Mengambil semua data program
        // });
    }

    private function getBanner(){
        // return Cache::remember('banners', 120, function() {
            return Bannerhome::all();
        // })
    }

    public static function staticData(){
        $data = app(PagesController::class);

        return [
            'program' => $data->getProgramYayasan(),
            'banner' => $data->getBanner(),
        ];
    }

    public function home()
    {
        $visiMisi = VisiMisi::first();  // Pastikan ada data di tabel 'visi_misis'
        $rekening = Rekening::first();
        $program = Program::all();
        // $berita = Berita::first();
        return view('index', compact('visiMisi', 'rekening'));

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
