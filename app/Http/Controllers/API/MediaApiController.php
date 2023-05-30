<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaApiController extends ApiController
{
    public function index()
    {

        $media = DB::table('media')->orderBy('created_at', 'desc')->where('kategori_media', '=', '2')->get();

        $data = [
            'media' => $media
        ];

        return $this->successResponse($data);
    }

    public function detail($id)
    {

        $media = DB::table('media')->where('id', $id)->first();

        $data = [
            'media' => $media
        ];

        return $this->successResponse($data);
    }
}
