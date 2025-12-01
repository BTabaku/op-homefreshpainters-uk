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

    public function home2()
    {
        $data = [
            'title' => 'Home 2 – Paint Splatter',
            'meta_description' => 'Quality painting services for lasting beauty and durability. Professional painting for stunning results.',
            'body_class' => 'envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-2398 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-2398'
        ];
        
        return view('paint-splatter.home-2', $data);
    }

    public function home3()
    {
        $data = [
            'title' => 'Home 3 – Paint Splatter',
            'meta_description' => 'Quality painting services for lasting beauty and durability. Get a free quote today.',
            'body_class' => 'envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-3284 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-3284'
        ];
        
        return view('paint-splatter.home-3', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog – Paint Splatter',
            'meta_description' => 'Read our latest articles about painting tips, trends, and ideas.',
            'body_class' => 'blog wp-custom-logo elementor-default elementor-template-full-width elementor-kit-5'
        ];
        
        return view('paint-splatter.blog.index', $data);
    }
}
