<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfileApiController extends ApiController
{
    public function index()
    {
        $banner = DB::table('banner')
        ->where('active', '=', '1')
        ->where('menu', '=', '1')
        ->get();

        $data['judul'] = [
            'ind' => 'Profil Perusahaan',
            'eng' => 'Company Profile'
        ];

        $profile_bsd = db::table('profile_bsd')->first();
        $sertifikat = db::table('sertifikat_bsd')->get();

        $data = [
            'banner' => $banner,
            'profile' => $profile_bsd,
            'sertifikat' => $sertifikat
        ];

        return $this->successResponse($data);
    }
}
