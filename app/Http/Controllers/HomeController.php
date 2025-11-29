<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Home page data - will be populated from database later
        $data = [
            'title' => 'HomeFreshPainters – Painting & Renovation Services',
            'meta_description' => 'Professional painting and renovation services. Expert color consultation, affordable prices, and exceptional quality.',
            'slides' => [
                [
                    'heading' => 'Painting Your Vision With Precision',
                    'description' => 'Let us help you make your space reflect your personal style and taste with our expert color consultation.',
                    'button_text' => 'Our Services',
                    'button_link' => route('services')
                ],
                [
                    'heading' => 'Your Space, Our Masterpiece.',
                    'description' => 'Our affordable prices and exceptional quality make us the go-to choice for all your painting needs.',
                    'button_text' => 'Get Quote',
                    'button_link' => route('contact')
                ]
            ],
            'services' => [
                [
                    'title' => 'Interior Painting',
                    'description' => 'Transform your home with our professional interior painting services.',
                    'icon' => 'fa-paint-brush'
                ],
                [
                    'title' => 'Exterior Painting',
                    'description' => 'Protect and beautify your home exterior with our premium painting solutions.',
                    'icon' => 'fa-home'
                ],
                [
                    'title' => 'Color Consultation',
                    'description' => 'Expert color advice to help you choose the perfect palette for your space.',
                    'icon' => 'fa-palette'
                ]
            ]
        ];
        
        return view('home.index', $data);
    }
}
