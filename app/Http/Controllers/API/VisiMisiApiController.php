<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisiMisiApiController extends ApiController
{
    public function index()
    {

        $banner = DB::table('banner')
        ->where('active', '=', '1')
            ->where('menu', '=', '1')
            ->get();

        // $data['judul'] = [
        //     'ind' => 'Visi & Misi Perusahaan',
        //     'eng' => 'Vision & Mision',
        //     'nil_indo' => 'Nilai Perusahaan',
        //     'nil_eng' => 'Company Value',
        //     'kebijakan' => 'Kebijakan Manajemen Sistem'
        // ];

        $visimisi = db::table('visi_misi')->first();

        $nilai = db::table('nilai_bsd')->where('active', '=', '1')->get();

        $data = [
            'banner' => $banner,
            'visi-misi' => $visimisi,
            'nilai' => $nilai,
        ];

        return $this->successResponse($data);
    }
}
