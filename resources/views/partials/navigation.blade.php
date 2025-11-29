<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-paint-brush me-2"></i>HomeFreshPainters
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('services*') ? 'active' : '' }}" 
                       href="#" role="button" data-bs-toggle="dropdown">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services') }}">All Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.show', 'interior-painting') }}">Interior Painting</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.show', 'exterior-painting') }}">Exterior Painting</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.show', 'color-consultation') }}">Color Consultation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">
                        Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}" href="{{ route('team') }}">
                        Our Team
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('testimonials') }}">Testimonials</a></li>
                        <li><a class="dropdown-item" href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a class="dropdown-item" href="{{ route('faqs') }}">FAQs</a></li>
                        <li><a class="dropdown-item" href="{{ route('before-after') }}">Before & After</a></li>
                        <li><a class="dropdown-item" href="{{ route('service-areas') }}">Service Areas</a></li>
                        <li><a class="dropdown-item" href="{{ route('service-warranty') }}">Warranty</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}" href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
