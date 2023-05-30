<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NearbyApiController extends ApiController
{
    public function index()
    {
        $nearby = DB::table('service_location')
        ->where('active', '=', '1')
            ->get();

        $nearby_1 = DB::table('service_location')
        ->where('active', '=', '1')
            ->where('kategori', '=', '1')
            ->get();

        $nearby_2 = DB::table('service_location')
        ->where('active', '=', '1')
            ->where('kategori', '=', '2')
            ->get();

        $nearby_3 = DB::table('service_location')
        ->where('active', '=', '1')
            ->where('kategori', '=', '3')
            ->get();

        $nearby_4 = DB::table('service_location')
        ->where('active', '=', '1')
            ->where('kategori', '=', '4')
            ->get();

        $nearby_5 = DB::table('service_location')
        ->where('active', '=', '1')
            ->where('kategori', '=', '5')
            ->get();

        $kategori = DB::table('kategori')->get();

        $data = [
            'nearby' => $nearby,
            'nearby_1' => $nearby_1,
            'nearby_2' => $nearby_2,
            'nearby_3' => $nearby_3,
            'nearby_4' => $nearby_4,
            'nearby_5' => $nearby_5,
            'kategori' => $kategori
        ];

        return $this->successResponse($data);
    }
}
