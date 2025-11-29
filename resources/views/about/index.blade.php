@extends('layouts.app')

@section('content')
<div class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold">About Us</h1>
                <p class="lead">{{ $company_info['description'] }}</p>
            </div>
            <div class="col-lg-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Our Story</h2>
                <p class="lead">{{ $company_info['description'] }}</p>
                <p>Founded in {{ $company_info['founded'] }}, {{ $company_info['name'] }} has been providing exceptional painting services for over {{ $company_info['experience'] }}. Our commitment to quality, attention to detail, and customer satisfaction has made us a trusted name in the painting industry.</p>
                
                <div class="row g-4 mt-4">
                    <div class="col-6">
                        <div class="text-center">
                            <h3 class="text-primary fw-bold">500+</h3>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center">
                            <h3 class="text-primary fw-bold">100%</h3>
                            <p>Customer Satisfaction</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center">
                            <h3 class="text-primary fw-bold">{{ $company_info['experience'] }}</h3>
                            <p>Industry Experience</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center">
                            <h3 class="text-primary fw-bold">2 Years</h3>
                            <p>Warranty on All Work</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="img-fluid rounded shadow" onerror="this.src='{{ asset('images/placeholder-about.jpg') }}'">
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Our Team</h2>
            <p class="lead">Meet the talented professionals behind our success</p>
        </div>
        
        <div class="row g-4">
            @foreach($team_members as $member)
            <div class="col-md-4">
                <div class="card h-100 text-center shadow-sm">
                    <img src="{{ asset('images/team/' . $member['image']) }}" 
                         class="card-img-top" 
                         alt="{{ $member['name'] }}"
                         onerror="this.src='{{ asset('images/placeholder-team.jpg') }}'"
                         style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member['name'] }}</h5>
                        <p class="text-primary fw-bold">{{ $member['position'] }}</p>
                        <p class="small text-muted">{{ $member['experience'] }} experience</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Our Values</h2>
            <p class="lead">The principles that guide our work</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="value-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h5>Quality Craftsmanship</h5>
                    <p class="text-muted">We take pride in delivering exceptional results with attention to every detail.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="value-icon mb-3">
                        <i class="fas fa-handshake fa-3x text-primary"></i>
                    </div>
                    <h5>Integrity</h5>
                    <p class="text-muted">We believe in honest communication and transparent pricing with our clients.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="value-icon mb-3">
                        <i class="fas fa-clock fa-3x text-primary"></i>
                    </div>
                    <h5>Reliability</h5>
                    <p class="text-muted">We complete projects on time and maintain clean, organized work sites.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
