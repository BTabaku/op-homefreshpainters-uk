<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = [
            [
                'name' => 'Emily Davis',
                'location' => 'London',
                'rating' => 5,
                'comment' => 'Excellent service! The team was professional and the quality of work exceeded my expectations.',
                'project' => 'Living Room Painting'
            ],
            [
                'name' => 'Robert Brown',
                'location' => 'Manchester',
                'rating' => 5,
                'comment' => 'Great attention to detail and very reasonable prices. Highly recommend!',
                'project' => 'Exterior House Painting'
            ],
            [
                'name' => 'Lisa Anderson',
                'location' => 'Birmingham',
                'rating' => 5,
                'comment' => 'Professional team, excellent communication, and beautiful results.',
                'project' => 'Kitchen Renovation'
            ]
        ];

        return view('testimonials.index', [
            'title' => 'Testimonials - HomeFreshPainters',
            'testimonials' => $testimonials
        ]);
    }
}
