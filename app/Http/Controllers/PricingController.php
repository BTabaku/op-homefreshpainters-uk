<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricing_plans = [
            [
                'name' => 'Basic Room',
                'price' => '$500',
                'features' => [
                    'One room painting',
                    'Standard paint',
                    'Basic preparation',
                    '1-day completion'
                ],
                'popular' => false
            ],
            [
                'name' => 'Complete Home',
                'price' => '$2,500',
                'features' => [
                    'Up to 5 rooms',
                    'Premium paint',
                    'Full preparation',
                    'Color consultation',
                    '3-5 days completion'
                ],
                'popular' => true
            ],
            [
                'name' => 'Premium Package',
                'price' => '$5,000',
                'features' => [
                    'Unlimited rooms',
                    'Luxury paint',
                    'Full preparation & repairs',
                    'Color consultation',
                    'Priority scheduling',
                    'Extended warranty'
                ],
                'popular' => false
            ]
        ];

        return view('pricing.index', [
            'title' => 'Pricing - HomeFreshPainters',
            'pricing_plans' => $pricing_plans
        ]);
    }
}
