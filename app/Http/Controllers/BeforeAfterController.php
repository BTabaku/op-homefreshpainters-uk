<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeforeAfterController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'Living Room Transformation',
                'before_image' => 'living-room-before.jpg',
                'after_image' => 'living-room-after.jpg',
                'description' => 'Complete living room makeover with modern color scheme and accent wall.',
                'details' => 'Client wanted a modern, bright living space. We transformed the dark room with light gray walls and a navy blue accent wall.'
            ],
            [
                'title' => 'Kitchen Refresh',
                'before_image' => 'kitchen-before.jpg',
                'after_image' => 'kitchen-after.jpg',
                'description' => 'Kitchen cabinet painting and wall color update.',
                'details' => 'Updated outdated oak cabinets to modern white with new hardware and fresh wall colors.'
            ],
            [
                'title' => 'Exterior Home Makeover',
                'before_image' => 'exterior-before.jpg',
                'after_image' => 'exterior-after.jpg',
                'description' => 'Complete exterior painting with weather-resistant finishes.',
                'details' => 'Full exterior preparation and painting with premium weather-resistant paint system.'
            ]
        ];

        return view('before-after.index', [
            'title' => 'Before & After - HomeFreshPainters',
            'projects' => $projects
        ]);
    }
}
