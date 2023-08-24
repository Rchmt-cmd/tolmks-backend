<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukApiController extends ApiController
{
    public function index(Request $request)
    {
        if (!empty($request->kartu)) {

            $kartu = $request->kartu;

            // $data = Http::get('http://emestech.host:1771/api/resi_web.php?cid=' . $kartu);
            // $datas = $data->json();
            $dataa = [ //data dummy kalau misal tidak dikasi izin akses ke api nya
                [
                    "plaza" => "BIRINGKANAYA 01",
                    "gardu" => "Samsir",
                    "shift" => "2",
                    "transaksi" => "2021-10-01 16:00:55",
                    "resi" => "RESI =>08BC52",
                    "metode" => "6032984000844112",
                    "gol" => "1",
                    "payment" => "10,000",
                    "saldo" => "154,175",
                    "kartu" => "MANDIRI",
                    "kepmen" => "1076\/KPTS\/M\/2019"
                ]
            ];
        }
        return $this->successResponse($dataa);
    }

    public function cetak_data_transaksi(Request $request)
    {
        $kartu = $request->kartu;
        $tanggal_awal = $request->from;
        $tanggal_akhir = $request->to;

        $data = DB::table('tes_kartu')->where('kartu', $kartu)->whereBetween('tanggal', array($tanggal_awal, $tanggal_akhir))->get();

        $pdf = PDF::loadview('frontend/pages/data-transaksi', ['data' => $data]);

        return $pdf->download('data-transaksi.pdf');
    }
}
