<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsApiController extends ApiController
{
    public function index()
    {

        $info_tol =DB::table('info_tol')->leftJoin('icon', 'info_tol.icon', '=', 'icon.id')->select('info_tol.id as id', 'info_tol.judul as judul', 'info_tol.icon as icon_id', 'info_tol.link as link', 'icon.class as cl', 'info_tol.btn as btn')->where('active', 1)->get();

        $alamat_1 =DB::table('alamat_1')->first();

        $banner =DB::table('banner')->where('active', 1)->get();

        $data = [
            'info_tol' => $info_tol,
            'alamat_1' => $alamat_1,
            'banner' => $banner
        ];

        return $this->successResponse($data);
    }
}
