@extends('layouts.app')

@section('content')
<div class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold">Our Portfolio</h1>
                <p class="lead">See the amazing transformations we've created for our clients</p>
            </div>
            <div class="col-lg-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">Portfolio</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Recent Projects</h2>
            <p class="lead">Browse our latest painting and renovation work</p>
        </div>
        
        <div class="row g-4">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm portfolio-card">
                    <div class="before-after-container">
                        <div class="before-after-slider">
                            <div class="before-image">
                                <img src="{{ asset('images/portfolio/' . $project['before_image']) }}" 
                                     alt="Before - {{ $project['title'] }}"
                                     onerror="this.src='{{ asset('images/placeholder-before.jpg') }}'">
                                <span class="before-label">Before</span>
                            </div>
                            <div class="after-image">
                                <img src="{{ asset('images/portfolio/' . $project['after_image']) }}" 
                                     alt="After - {{ $project['title'] }}"
                                     onerror="this.src='{{ asset('images/placeholder-after.jpg') }}'">
                                <span class="after-label">After</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['title'] }}</h5>
                        <span class="badge bg-primary mb-2">{{ $project['category'] }}</span>
                        <p class="card-text">{{ $project['description'] }}</p>
                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#projectModal{{ $loop->index }}">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Modal for project details -->
            <div class="modal fade" id="projectModal{{ $loop->index }}" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $project['title'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <img src="{{ asset('images/portfolio/' . $project['before_image']) }}" 
                                         alt="Before - {{ $project['title'] }}"
                                         class="img-fluid"
                                         onerror="this.src='{{ asset('images/placeholder-before.jpg') }}'">
                                    <p class="text-center mt-2"><strong>Before</strong></p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('images/portfolio/' . $project['after_image']) }}" 
                                         alt="After - {{ $project['title'] }}"
                                         class="img-fluid"
                                         onerror="this.src='{{ asset('images/placeholder-after.jpg') }}'">
                                    <p class="text-center mt-2"><strong>After</strong></p>
                                </div>
                            </div>
                            <hr>
                            <p>{{ $project['description'] }}</p>
                            <div class="project-details">
                                <h6>Project Details:</h6>
                                <ul>
                                    <li><strong>Category:</strong> {{ $project['category'] }}</li>
                                    <li><strong>Duration:</strong> 3-5 days</li>
                                    <li><strong>Paint Used:</strong> Premium Eco-Friendly Paint</li>
                                    <li><strong>Warranty:</strong> 2 Years</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="{{ route('contact') }}" class="btn btn-primary">Get Similar Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Ready for Your Own Transformation?</h2>
        <p class="lead mb-4">Let us bring your vision to life with our expert painting services</p>
        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg me-3">Get Free Quote</a>
        <a href="{{ route('services') }}" class="btn btn-outline-primary btn-lg">View Services</a>
    </div>
</section>

<style>
.before-after-container {
    position: relative;
    overflow: hidden;
    border-radius: 0.375rem 0.375rem 0 0;
}

.before-after-slider {
    position: relative;
    height: 250px;
}

.before-image, .after-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.before-image img, .after-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.before-label, .after-label {
    position: absolute;
    top: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 12px;
    font-weight: bold;
}

.before-label {
    left: 10px;
}

.after-label {
    right: 10px;
}

.portfolio-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}
</style>
@endsection
