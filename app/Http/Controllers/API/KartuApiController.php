<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KartuApiController extends ApiController
{
    public function store(Request $request)
    {

        $id = $request->id;
        $kartu = $request->kartu;

        for ($i = 0; $i < count($kartu); $i++) {
            $data = [
                'user_id' => $id,
                'kartu' => $kartu[$i]
            ];

            DB::table('user_kartu')->insert($data);
        }

        return $this->successResponse($data);
    }
}
