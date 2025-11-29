@extends('layouts.app')

@section('content')
<div class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold">Testimonials</h1>
                <p class="lead">What our clients say about our services</p>
            </div>
            <div class="col-lg-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">Testimonials</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Client Reviews</h2>
            <p class="lead">Real feedback from satisfied customers</p>
        </div>
        
        <div class="row g-4">
            @foreach($testimonials as $testimonial)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm testimonial-card">
                    <div class="card-body">
                        <div class="rating mb-3">
                            @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $testimonial['rating'] ? 'text-warning' : 'text-muted' }}"></i>
                            @endfor
                        </div>
                        <blockquote class="mb-3">
                            <p class="card-text">"{{ $testimonial['comment'] }}"</p>
                        </blockquote>
                        <div class="d-flex align-items-center">
                            <div class="avatar me-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    {{ substr($testimonial['name'], 0, 1) }}
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-0">{{ $testimonial['name'] }}</h6>
                                <small class="text-muted">{{ $testimonial['location'] }}</small>
                                <br>
                                <small class="text-primary">{{ $testimonial['project'] }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <h2 class="display-4 fw-bold text-primary counter" data-target="500">0</h2>
                <p class="lead">Happy Clients</p>
            </div>
            <div class="col-md-3 mb-4">
                <h2 class="display-4 fw-bold text-primary counter" data-target="750">0</h2>
                <p class="lead">Projects Completed</p>
            </div>
            <div class="col-md-3 mb-4">
                <h2 class="display-4 fw-bold text-primary counter" data-target="8">0</h2>
                <p class="lead">Years Experience</p>
            </div>
            <div class="col-md-3 mb-4">
                <h2 class="display-4 fw-bold text-primary counter" data-target="100">0</h2>
                <p class="lead">% Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Ready to Join Our Happy Clients?</h2>
        <p class="lead mb-4">Get in touch with us for your next painting project</p>
        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get Free Quote</a>
    </div>
</section>

<style>
.testimonial-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.rating {
    color: #ffc107;
}

.counter {
    font-weight: bold;
}
</style>
@endsection
