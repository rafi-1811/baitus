<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Program;
use App\Models\Rekening;
use App\Models\VisiMisi;
use App\Models\DataYatim;
use App\Models\Bannerhome;
use Illuminate\Http\Request;
use App\Models\TentangYayasan;
use Illuminate\Support\Facades\Cache;


class PagesController extends Controller
{
    private function getProgramYayasan()
    {
        // return Cache::remember('programs', 120, function() {
        return Program::with('berita') // Eager loading berita terkait
            ->orderBy('id', 'asc')
            ->get(); // Mengambil semua data program
        // });
    }

    private function getBanner()
    {
        // return Cache::remember('banners', 120, function() {
        return Bannerhome::all();
        // })
    }


    private function getTentangYayasan()
    {
        // return Cache::remember('visi_misi', 120, function() {
        return TentangYayasan::first();
        // });
    }

    private function getDataYatim()
    {
        // return Cache::remember('data_yatim', 120, function() {
        return DataYatim::first();
        // });
    }

    private function getRekening()
    {
        // return Cache::remember('rekening', 120, function() {
        return Rekening::all();
        // })
    }

    private function getBerita()
    {
        // return Cache::remember('berita', 120, function() {
        return Berita::with('program')->orderBy('created_at', 'desc')->limit(6)->get();
        // });
    }

    public static function staticData()
    {
        $data = app(PagesController::class);

        return [
            'program' => $data->getProgramYayasan(),
            'banner' => $data->getBanner(),
            'tentang_yayasan' => $data->getTentangYayasan(),
            'data_yatim' => $data->getDataYatim(),
            'rekening' => $data->getRekening(),
            'berita' => $data->getBerita(),
        ];
    }

    public function home()
    {
        return view('index');
    }

    public function detailProgram($slug)
    {
        $data = Program::with('berita')->where('slug', $slug)->firstOrFail(); // Cari program berdasarkan slug
        return view('detail-program', compact('data'));
    }

    public function berita()
    {
        return view('berita');
    }

    public function detailBerita($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail(); // Cari berita berdasarkan slug
        dd($berita);
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
