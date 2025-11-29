<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = [
            [
                'name' => 'Interior Painting',
                'slug' => 'interior-painting',
                'description' => 'Professional interior painting services for residential and commercial properties.',
                'details' => 'Our interior painting services include wall preparation, priming, painting, and cleanup. We use high-quality paints and materials to ensure a flawless finish.',
                'price' => 'Starting from $500',
                'image' => 'interior-painting.jpg'
            ],
            [
                'name' => 'Exterior Painting',
                'slug' => 'exterior-painting',
                'description' => 'Exterior painting services to protect and beautify your property.',
                'details' => 'Exterior painting requires special expertise. We handle surface preparation, weather-proofing, and application of durable exterior paints.',
                'price' => 'Starting from $800',
                'image' => 'exterior-painting.jpg'
            ],
            [
                'name' => 'Color Consultation',
                'slug' => 'color-consultation',
                'description' => 'Professional color consultation services to help you choose the perfect colors.',
                'details' => 'Our color experts help you select the perfect color palette that matches your style and enhances your space.',
                'price' => 'Starting from $150',
                'image' => 'color-consultation.jpg'
            ],
            [
                'name' => 'Commercial Painting',
                'slug' => 'commercial-painting',
                'description' => 'Professional painting services for commercial properties.',
                'details' => 'We provide efficient, high-quality painting services for businesses, offices, and commercial spaces with minimal disruption.',
                'price' => 'Contact for quote',
                'image' => 'commercial-painting.jpg'
            ]
        ];

        return view('services.index', [
            'title' => 'Our Services - HomeFreshPainters',
            'services' => $services
        ]);
    }

    public function show($service)
    {
        $services = [
            'interior-painting' => [
                'name' => 'Interior Painting',
                'description' => 'Professional interior painting services for residential and commercial properties.',
                'details' => 'Our interior painting services include wall preparation, priming, painting, and cleanup. We use high-quality paints and materials to ensure a flawless finish.',
                'price' => 'Starting from $500',
                'image' => 'interior-painting.jpg',
                'features' => [
                    'Wall preparation and repair',
                    'High-quality paint application',
                    'Clean and professional service',
                    'Color consultation included'
                ]
            ],
            'exterior-painting' => [
                'name' => 'Exterior Painting',
                'description' => 'Exterior painting services to protect and beautify your property.',
                'details' => 'Exterior painting requires special expertise. We handle surface preparation, weather-proofing, and application of durable exterior paints.',
                'price' => 'Starting from $800',
                'image' => 'exterior-painting.jpg',
                'features' => [
                    'Surface preparation',
                    'Weather-resistant paints',
                    'Professional application',
                    'Extended warranty'
                ]
            ]
        ];

        if (!isset($services[$service])) {
            abort(404);
        }

        return view('services.show', [
            'title' => $services[$service]['name'] . ' - HomeFreshPainters',
            'service' => $services[$service]
        ]);
    }
}
