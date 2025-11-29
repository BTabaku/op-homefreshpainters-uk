<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceWarrantyController extends Controller
{
    public function index()
    {
        $warranty_info = [
            'duration' => '2 Years',
            'coverage' => [
                'Paint defects',
                'Workmanship issues',
                'Color fading (normal wear excluded)',
                'Peeling and blistering'
            ],
            'exclusions' => [
                'Damage from misuse',
                'Normal wear and tear',
                'Water damage',
                'Structural issues'
            ],
            'claim_process' => [
                'Contact us within warranty period',
                'Provide proof of service',
                'Schedule inspection',
                'Resolution within 5 business days'
            ]
        ];

        return view('service-warranty.index', [
            'title' => 'Service Warranty - HomeFreshPainters',
            'warranty_info' => $warranty_info
        ]);
    }
}
