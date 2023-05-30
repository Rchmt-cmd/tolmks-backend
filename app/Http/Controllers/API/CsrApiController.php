<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CsrApiController extends ApiController
{
    public function index()
    {
        $banner = DB::table('banner')
        ->where('active', '=', '1')
            ->where('menu', '=', '1')
            ->get();

        // $data['judul'] = [
        //     'ind' => 'Tanggung Jawab Operasional',
        //     'eng' => 'Corporate Social Responsibility'
        // ];

        $csr = db::table('media')->where('kategori_media', '=', '1')->orderBy('created_at', 'DESC')->get();

        $data = [
            'banner' => $banner,
            'csr' => $csr
        ];

        return $this->successResponse($data);
    }
}
