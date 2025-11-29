<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = [
            [
                'question' => 'How long does a typical painting project take?',
                'answer' => 'The duration depends on the project size. A typical room takes 1-2 days, while a full house may take 1-2 weeks.'
            ],
            [
                'question' => 'Do you provide free estimates?',
                'answer' => 'Yes, we provide free, no-obligation estimates for all painting projects.'
            ],
            [
                'question' => 'What type of paint do you use?',
                'answer' => 'We use high-quality, eco-friendly paints from reputable brands. We can also use specific brands if requested.'
            ],
            [
                'question' => 'Are you insured and licensed?',
                'answer' => 'Yes, we are fully insured and licensed to operate in all areas we serve.'
            ],
            [
                'question' => 'Do you offer a warranty?',
                'answer' => 'Yes, we offer a 2-year warranty on all our painting services.'
            ]
        ];

        return view('faqs.index', [
            'title' => 'FAQs - HomeFreshPainters',
            'faqs' => $faqs
        ]);
    }
}
