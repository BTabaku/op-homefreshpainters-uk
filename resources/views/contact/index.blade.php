@extends('layouts.app')

@section('content')
<div class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold">Contact Us</h1>
                <p class="lead">Get in touch for a free consultation and quote</p>
            </div>
            <div class="col-lg-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">Contact</li>
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
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-4">Send us a Message</h4>
                        <form id="contactForm" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="invalid-feedback">
                                        Please provide your name.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                    <div class="invalid-feedback">
                                        Please provide your phone number.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="service" class="form-label">Service Interested In</label>
                                    <select class="form-select" id="service" name="service">
                                        <option value="">Select a service</option>
                                        <option value="interior-painting">Interior Painting</option>
                                        <option value="exterior-painting">Exterior Painting</option>
                                        <option value="color-consultation">Color Consultation</option>
                                        <option value="commercial-painting">Commercial Painting</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a message.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Contact Information</h5>
                        <div class="contact-info">
                            <div class="mb-3">
                                <i class="fas fa-phone text-primary me-3"></i>
                                <strong>Phone:</strong> {{ $contact_info['phone'] }}
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <strong>Email:</strong> {{ $contact_info['email'] }}
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <strong>Address:</strong> {{ $contact_info['address'] }}
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-clock text-primary me-3"></i>
                                <strong>Hours:</strong> {{ $contact_info['hours'] }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Business Hours</h5>
                        <div class="hours-info">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Monday - Friday</span>
                                <strong>8:00 AM - 6:00 PM</strong>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Saturday</span>
                                <strong>9:00 AM - 4:00 PM</strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Sunday</span>
                                <strong>Closed</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-4">Find Us</h3>
        <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316bb8b1b1%3A0x4f5c5e8b5b5b5b5b!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1234567890" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
            </iframe>
        </div>
    </div>
</section>
@endsection
