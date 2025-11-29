<footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5><i class="fas fa-paint-brush me-2"></i>HomeFreshPainters</h5>
                <p class="mt-3">Professional painting and renovation services for residential and commercial properties. Quality workmanship, affordable prices.</p>
                <div class="social-links mt-3">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 mb-4">
                <h6>Quick Links</h6>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}" class="text-light text-decoration-none">Services</a></li>
                    <li class="mb-2"><a href="{{ route('portfolio') }}" class="text-light text-decoration-none">Portfolio</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-light text-decoration-none">About Us</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 mb-4">
                <h6>Services</h6>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><a href="{{ route('services.show', 'interior-painting') }}" class="text-light text-decoration-none">Interior Painting</a></li>
                    <li class="mb-2"><a href="{{ route('services.show', 'exterior-painting') }}" class="text-light text-decoration-none">Exterior Painting</a></li>
                    <li class="mb-2"><a href="{{ route('services.show', 'color-consultation') }}" class="text-light text-decoration-none">Color Consultation</a></li>
                    <li class="mb-2"><a href="{{ route('pricing') }}" class="text-light text-decoration-none">Pricing</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 mb-4">
                <h6>Contact Info</h6>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="fas fa-phone me-2"></i>+1 (555) 123-4567</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i>info@homefreshpainters.com</li>
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>123 Main Street, Your City, State 12345</li>
                    <li class="mb-2"><i class="fas fa-clock me-2"></i>Mon-Fri: 8AM-6PM, Sat: 9AM-4PM</li>
                </ul>
            </div>
        </div>
        
        <hr class="border-secondary my-4">
        
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0">&copy; {{ date('Y') }} HomeFreshPainters. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('service-warranty') }}" class="text-light text-decoration-none me-3">Warranty</a>
                <a href="{{ route('faqs') }}" class="text-light text-decoration-none me-3">FAQs</a>
                <a href="{{ route('service-areas') }}" class="text-light text-decoration-none">Service Areas</a>
            </div>
        </div>
    </div>
</footer>
