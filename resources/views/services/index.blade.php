@extends('layouts.app')

@section('content')
<div class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold">Our Services</h1>
                <p class="lead">Professional painting services tailored to your needs</p>
            </div>
            <div class="col-lg-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/services/' . $service['image']) }}" 
                                 class="img-fluid h-100 object-fit-cover" 
                                 alt="{{ $service['name'] }}"
                                 onerror="this.src='{{ asset('images/placeholder-service.jpg') }}'">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service['name'] }}</h5>
                                <p class="card-text">{{ $service['description'] }}</p>
                                <p class="card-text">
                                    <small class="text-primary fw-bold">{{ $service['price'] }}</small>
                                </p>
                                <a href="{{ route('services.show', $service['slug']) }}" class="btn btn-primary">
                                    Learn More
                                </a>
                            </div>
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
        <h2 class="display-5 fw-bold mb-4">Need a Custom Solution?</h2>
        <p class="lead mb-4">Contact us for a personalized quote based on your specific requirements</p>
        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get Free Quote</a>
    </div>
</section>
@endsection
