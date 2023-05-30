<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TarifApiController extends ApiController
{
    public function index()
    {
        $tarif = DB::table('info_tarif')
        ->get();

        $data = [
            'tarif' => $tarif
        ];

        return $this->successResponse($data);
    }
}
