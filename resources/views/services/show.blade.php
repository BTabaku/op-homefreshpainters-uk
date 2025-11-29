@extends('layouts.app')

@section('content')
<div class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold">{{ $service['name'] }}</h1>
                <p class="lead">{{ $service['description'] }}</p>
            </div>
            <div class="col-lg-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('services') }}" class="text-white">Services</a></li>
                        <li class="breadcrumb-item active text-white">{{ $service['name'] }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <img src="{{ asset('images/services/' . $service['image']) }}" 
                         class="card-img-top" 
                         alt="{{ $service['name'] }}"
                         onerror="this.src='{{ asset('images/placeholder-service.jpg') }}'"
                         style="height: 400px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">About This Service</h3>
                        <p class="card-text">{{ $service['details'] }}</p>
                        
                        @if(isset($service['features']))
                        <h4 class="mt-4">What's Included:</h4>
                        <ul class="list-group list-group-flush">
                            @foreach($service['features'] as $feature)
                            <li class="list-group-item">
                                <i class="fas fa-check text-success me-2"></i>{{ $feature }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">Our Process</h4>
                        <div class="process-steps">
                            <div class="step d-flex mb-4">
                                <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">1</div>
                                <div>
                                    <h5>Consultation</h5>
                                    <p class="text-muted">Free consultation to understand your needs and preferences</p>
                                </div>
                            </div>
                            <div class="step d-flex mb-4">
                                <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">2</div>
                                <div>
                                    <h5>Preparation</h5>
                                    <p class="text-muted">Thorough surface preparation and protection of your property</p>
                                </div>
                            </div>
                            <div class="step d-flex mb-4">
                                <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">3</div>
                                <div>
                                    <h5>Painting</h5>
                                    <p class="text-muted">Professional application using high-quality materials</p>
                                </div>
                            </div>
                            <div class="step d-flex">
                                <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">4</div>
                                <div>
                                    <h5>Final Inspection</h5>
                                    <p class="text-muted">Quality check and cleanup to ensure your satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h4 class="card-title">Pricing</h4>
                        <div class="price-display">
                            <span class="text-primary fw-bold fs-2">{{ $service['price'] }}</span>
                        </div>
                        <p class="text-muted">Starting from</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg w-100">Get Exact Quote</a>
                    </div>
                </div>
                
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Service Benefits</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-shield-alt text-primary me-2"></i>
                                2-Year Warranty
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-users text-primary me-2"></i>
                                Professional Team
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-paint-brush text-primary me-2"></i>
                                Quality Materials
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-clock text-primary me-2"></i>
                                On-Time Completion
                            </li>
                            <li>
                                <i class="fas fa-certificate text-primary me-2"></i>
                                Fully Insured
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Need Help?</h5>
                        <p class="text-muted">Have questions about this service? We're here to help!</p>
                        <div class="d-grid gap-2">
                            <a href="tel:+15551234567" class="btn btn-outline-primary">
                                <i class="fas fa-phone me-2"></i>Call Us
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary">
                                <i class="fas fa-envelope me-2"></i>Email Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-4">Related Services</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-home fa-3x text-primary mb-3"></i>
                        <h5>Interior Painting</h5>
                        <p class="text-muted">Transform your living spaces with professional interior painting</p>
                        <a href="{{ route('services.show', 'interior-painting') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-building fa-3x text-primary mb-3"></i>
                        <h5>Exterior Painting</h5>
                        <p class="text-muted">Protect and beautify your home's exterior</p>
                        <a href="{{ route('services.show', 'exterior-painting') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-palette fa-3x text-primary mb-3"></i>
                        <h5>Color Consultation</h5>
                        <p class="text-muted">Expert color advice for your perfect space</p>
                        <a href="{{ route('services.show', 'color-consultation') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
