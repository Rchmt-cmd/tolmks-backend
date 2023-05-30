<?php

namespace App\Http\Controllers\API;

use App\Models\Billboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillboardApiController extends ApiController
{
    public function index()
    {

        $billboard = Billboard::orderBy('id', 'desc')->get();

        $customBillboard = [];

        foreach ($billboard as $billboard) {
            $location = explode(",", $billboard->location);
            $long = $location[1];
            $lat = $location[0];
            $customBillboard[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [$long, $lat],
                    'type' => 'Point',
                ],
                'properties' => [
                    'locationId' => $billboard->id,
                    'title' => $billboard->name,
                    'image' => $billboard->image,
                    'description' => $billboard->description,
                    'specification' => $billboard->specification
                ]
            ];
        }

        $geoLocation = [
            'type' => 'FeatureCollection',
            'features' => $customBillboard
        ];

        $geoJson = collect($geoLocation)->toJson();

        $data = [
            'geoJson' => $geoLocation
        ];

        return $this->successResponse($data);
    }
}
