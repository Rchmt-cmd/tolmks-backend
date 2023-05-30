<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SejarahApiController extends ApiController
{
    public function index()
    {
        $banner = DB::table('banner')
        ->where('active', '=', '1')
        ->where('menu', '=', '1')
        ->get();

        $data['judul'] = [
            'ind' => 'Sejarah Perusahaan',
            'eng' => 'Business Milestone'
        ];

        $sejarah = db::table('sejarah_perusahaan')->where('active', '=', '1')->orderBy('tanggal', 'asc')->get();

        $data = [
            'banner' => $banner,
            'sejarah' => $sejarah
        ];

        return $this->successResponse($data);
    }
}
