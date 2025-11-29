<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurClientsController extends Controller
{
    public function index()
    {
        $client_types = [
            [
                'type' => 'Residential',
                'description' => 'Homeowners across the UK trust us for their painting needs.',
                'count' => '500+ Happy Homeowners',
                'clients' => ['Private Homes', 'Apartments', 'Condominiums']
            ],
            [
                'type' => 'Commercial',
                'description' => 'Businesses rely on us for professional commercial painting services.',
                'count' => '100+ Business Clients',
                'clients' => ['Offices', 'Retail Stores', 'Restaurants']
            ],
            [
                'type' => 'Property Management',
                'description' => 'Property management companies partner with us for reliable services.',
                'count' => '50+ Property Managers',
                'clients' => ['Rental Properties', 'Managed Communities', 'Real Estate']
            ]
        ];

        return view('our-clients.index', [
            'title' => 'Our Clients - HomeFreshPainters',
            'client_types' => $client_types
        ]);
    }
}
