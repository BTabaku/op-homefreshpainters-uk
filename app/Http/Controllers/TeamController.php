<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team_members = [
            [
                'name' => 'John Smith',
                'position' => 'Founder & Lead Painter',
                'experience' => '15 years',
                'bio' => 'John founded HomeFreshPainters with a vision to provide exceptional painting services. With over 15 years of experience, he leads our team with expertise and passion.',
                'image' => 'team1.jpg',
                'skills' => ['Interior Painting', 'Exterior Painting', 'Color Consultation']
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'Color Consultant',
                'experience' => '10 years',
                'bio' => 'Sarah is our color expert with an eye for design and trends. She helps clients choose the perfect color combinations for their spaces.',
                'image' => 'team2.jpg',
                'skills' => ['Color Theory', 'Interior Design', 'Trend Analysis']
            ],
            [
                'name' => 'Mike Wilson',
                'position' => 'Project Manager',
                'experience' => '12 years',
                'bio' => 'Mike ensures all projects run smoothly from start to finish. He coordinates with clients and manages timelines efficiently.',
                'image' => 'team3.jpg',
                'skills' => ['Project Management', 'Client Relations', 'Quality Control']
            ]
        ];

        return view('team.index', [
            'title' => 'Our Team - HomeFreshPainters',
            'team_members' => $team_members
        ]);
    }
}
