@extends('layouts.app')

@section('content')
<div class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold">Our Team</h1>
                <p class="lead">Meet the talented professionals behind our success</p>
            </div>
            <div class="col-lg-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">Our Team</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Meet Our Experts</h2>
            <p class="lead">Experienced professionals dedicated to delivering exceptional results</p>
        </div>
        
        <div class="row g-4">
            @foreach($team_members as $member)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm team-card">
                    <img src="{{ asset('images/team/' . $member['image']) }}" 
                         class="card-img-top" 
                         alt="{{ $member['name'] }}"
                         onerror="this.src='{{ asset('images/placeholder-team.jpg') }}'"
                         style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member['name'] }}</h5>
                        <p class="text-primary fw-bold">{{ $member['position'] }}</p>
                        <p class="text-muted small">{{ $member['experience'] }} experience</p>
                        <p class="card-text">{{ $member['bio'] }}</p>
                        
                        @if(isset($member['skills']))
                        <div class="skills mb-3">
                            @foreach($member['skills'] as $skill)
                            <span class="badge bg-light text-dark me-1">{{ $skill }}</span>
                            @endforeach
                        </div>
                        @endif
                        
                        <div class="social-links">
                            <a href="#" class="text-primary me-3"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Join Our Team Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Join Our Team</h2>
        <p class="lead mb-4">We're always looking for talented individuals to join our growing team</p>
        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Apply Now</a>
    </div>
</section>

<style>
.team-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.social-links a {
    transition: color 0.3s ease;
}

.social-links a:hover {
    color: #0b5ed7 !important;
}
</style>
@endsection
