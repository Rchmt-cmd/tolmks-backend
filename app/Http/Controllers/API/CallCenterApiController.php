<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CallCenterApiController extends ApiController
{
    public function index()
    {

        $call_center = DB::table('call_center')->get();

        $call_center_child = DB::table('call_center_child')->get();

        $data = [
            'call-center' => $call_center,
            'call_center_child' => $call_center_child
        ];

        return $this->successResponse($data);
    }
}
