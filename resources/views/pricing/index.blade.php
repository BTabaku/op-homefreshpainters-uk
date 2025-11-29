@extends('layouts.app')

@section('content')
<div class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold">Pricing</h1>
                <p class="lead">Transparent pricing for all our painting services</p>
            </div>
            <div class="col-lg-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">Pricing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Choose Your Plan</h2>
            <p class="lead">Flexible pricing options to suit your needs and budget</p>
        </div>
        
        <div class="row g-4 align-items-start">
            @foreach($pricing_plans as $plan)
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm pricing-card {{ $plan['popular'] ? 'border-primary' : '' }}">
                    @if($plan['popular'])
                    <div class="card-header bg-primary text-white text-center">
                        <span class="badge bg-warning text-dark">Most Popular</span>
                    </div>
                    @endif
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $plan['name'] }}</h5>
                        <div class="price mb-3">
                            <span class="display-4 fw-bold text-primary">{{ $plan['price'] }}</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            @foreach($plan['features'] as $feature)
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>{{ $feature }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('contact') }}" class="btn {{ $plan['popular'] ? 'btn-primary' : 'btn-outline-primary' }} w-100">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Pricing Questions</h2>
            <p class="lead">Common questions about our pricing</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="pricingAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                Are the prices fixed?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                Our prices are starting points. Final quotes depend on project size, complexity, and specific requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                Do you offer payment plans?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                Yes, we offer flexible payment options for larger projects. Contact us to discuss payment arrangements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                What's included in the price?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                All prices include labor, basic materials, surface preparation, and cleanup. Premium paints and additional services may cost extra.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.pricing-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pricing-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.price {
    font-size: 3rem;
    font-weight: bold;
}
</style>
@endsection
