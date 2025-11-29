<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceAreasController extends Controller
{
    public function index()
    {
        $service_areas = [
            [
                'city' => 'London',
                'areas' => ['Central London', 'West London', 'East London', 'North London', 'South London'],
                'coverage' => 'Full coverage'
            ],
            [
                'city' => 'Manchester',
                'areas' => ['City Centre', 'Salford', 'Old Trafford', 'Didsbury'],
                'coverage' => 'Full coverage'
            ],
            [
                'city' => 'Birmingham',
                'areas' => ['City Centre', 'Edgbaston', 'Sutton Coldfield', 'Solihull'],
                'coverage' => 'Full coverage'
            ]
        ];

        return view('service-areas.index', [
            'title' => 'Service Areas - HomeFreshPainters',
            'service_areas' => $service_areas
        ]);
    }
}
