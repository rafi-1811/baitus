<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Program;
use App\Models\Rekening;
use App\Models\DataYatim;
use App\Models\Bannerhome;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Models\TentangYayasan;
use Illuminate\Support\Facades\Cache;


class PagesController extends Controller
{

    private function getProgramYayasan()
    {
        return Cache::remember('programs', 120, function () {
            return Program::with('berita')
                ->orderBy('id', 'asc')
                ->get();
        });
    }

    private function getBanner()
    {
        return Cache::remember('banners', 120, function () {
            return Bannerhome::where('status', 'aktif')->get();
        });
    }


    private function getTentangYayasan()
    {
        return Cache::remember('tentang-yayasan', 120, function () {
            return TentangYayasan::first();
        });
    }

    private function getDataYatim()
    {
        return Cache::remember('data_yatim', 120, function () {
            return DataYatim::select('gambar', 'jumlah_data', 'kategori_data')->get();
        });
    }

    private function getRekening()
    {
        return Cache::remember('rekening', 120, function () {
            return Rekening::all();
        });
    }

    private function getBerita()
    {
        return Cache::remember('berita', 120, function () {
            return Berita::with('program')->where('status', 'published')->orderBy('created_at', 'desc')->limit(6)->get();
        });
    }

    private function getKontak()
    {
        return Cache::remember('kontak', 120, function () {
            return Kontak::first();
        });
    }

    private function getSosialMedia()
    {
        return Cache::remember('sosial-media', 120, function () {
            return SocialMedia::all();
        });
    }

    // Static Data
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
            'kontak' => $data->getKontak(),
            'sosial_media' => $data->getSosialMedia(),
        ];
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
