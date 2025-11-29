<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index', [
            'title' => 'About Us - HomeFreshPainters',
            'company_info' => [
                'name' => 'HomeFreshPainters',
                'founded' => '2015',
                'experience' => '8+ years of experience',
                'description' => 'We are a professional painting company dedicated to providing high-quality painting services for residential and commercial properties.'
            ],
            'team_members' => [
                [
                    'name' => 'John Smith',
                    'position' => 'Founder & Lead Painter',
                    'experience' => '15 years',
                    'image' => 'team1.jpg'
                ],
                [
                    'name' => 'Sarah Johnson',
                    'position' => 'Color Consultant',
                    'experience' => '10 years',
                    'image' => 'team2.jpg'
                ],
                [
                    'name' => 'Mike Wilson',
                    'position' => 'Project Manager',
                    'experience' => '12 years',
                    'image' => 'team3.jpg'
                ]
            ]
        ]);
    }
}
