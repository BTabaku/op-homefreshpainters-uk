<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'Modern Living Room',
                'category' => 'Interior',
                'before_image' => 'living-room-before.jpg',
                'after_image' => 'living-room-after.jpg',
                'description' => 'Complete transformation of a living room with modern color scheme.'
            ],
            [
                'title' => 'Exterior Home Makeover',
                'category' => 'Exterior',
                'before_image' => 'exterior-before.jpg',
                'after_image' => 'exterior-after.jpg',
                'description' => 'Fresh exterior paint job with weather-resistant materials.'
            ],
            [
                'title' => 'Kitchen Renovation',
                'category' => 'Interior',
                'before_image' => 'kitchen-before.jpg',
                'after_image' => 'kitchen-after.jpg',
                'description' => 'Kitchen cabinets and walls painting with premium finishes.'
            ]
        ];

        return view('portfolio.index', [
            'title' => 'Our Portfolio - HomeFreshPainters',
            'projects' => $projects
        ]);
    }
}
