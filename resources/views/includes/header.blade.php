<!-- resources/views/partials/navbar.blade.php -->
<div class="bg-light py-2">
    <div class="container">
        <div class="row align-items-center">
            <div
                class="col-md-6 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-start gap-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-envelope me-2 fs-5" style="color: #2487CE;"></i>
                    <span class="text-muted fs-6">contact@example.com</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-phone-alt me-2 fs-5" style="color: #2487CE;"></i>
                    <span class="text-muted fs-6">+1 5589 55488 55</span>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center justify-content-md-end social-icons gap-3">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-#FBFBFB shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/ETlogo.png') }}" alt="educationtoday" class="img-fluid"
                style="max-height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-md-4">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active">HOME</a></li>
                <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">ABOUT</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown">MAGAZINES</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/magazines') }}">Magazines-2</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ url('/events') }}" class="nav-link">EVENTS</a></li>
                <li class="nav-item"><a href="{{ url('/survey') }}" class="nav-link">SURVEY</a></li>
                <li class="nav-item"><a href="{{ url('/voting') }}" class="nav-link">VOTING</a></li>
                <li class="nav-item"><a href="{{ url('/blogs') }}" class="nav-link">BLOGS</a></li>
                <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">CONTACT</a></li>
            </ul>
            <a href="{{ url('/login') }}" class="btn ms-md-4"
                style="background-color: #2487CE; border-color: #2487CE; color: white; padding: 8px 20px; font-weight: bold; text-transform: uppercase;">
                LOGIN
            </a>
        </div>
    </div>
</nav>