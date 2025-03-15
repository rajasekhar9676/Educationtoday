<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Education Today Admin')</title>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script> -->

    <!-- Layout Styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />

    @stack('styles')

    <style>
    /* Ensure sidebar and main content are side by side */
    .page-body-wrapper {
    display: flex;
    min-height: 100vh;
    width: 100%;
    overflow-x: hidden; /* Prevent horizontal scrolling */
}

.sidebar {
    width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 80px;
    overflow-y: auto;
   /* Adjust background color */
    color: white;
}

.main-content {
    margin-left: 250px; /* This pushes content to the right, after the sidebar */
    flex-grow: 1;
    padding: 20px;
    padding-top: 80px;
    min-height: 100vh;
    overflow-x: hidden; /* Prevent horizontal scroll */
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .sidebar {
        width: 60px; /* Collapsed sidebar */
    }

    .main-content {
        margin-left: 60px; /* Adjust main content */
    }
}

@media (max-width: 768px) {
    .sidebar {
        width: 100%; /* Sidebar takes full width */
        height: auto; /* Adjust height */
        position: relative; /* Remove fixed positioning */
    }

    .main-content {
        margin-left: 0; /* Full width main content */
    }
}


@media (max-width: 768px) {
    .sidebar {
        width: 100%; /* Make sidebar full width */
        height: auto; /* Adjust height */
        position: relative; /* Remove fixed positioning */
    }

    .main-content {
        margin-left: 0; /* Full width main content */
    }
}

</style>
</head>
<body>
<div class="container-scroller">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @include('partials.navbar')
            @yield('content')
        </div>
    </div>
    <!-- JS Scripts -->

    <!-- endinject -->
    <!-- Plugin js for this page -->
 
    <!-- End plugin js for this page -->
    <!-- inject:js -->

    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.cookie.js') }}"></script>
  
    <!-- endinject -->
    <!-- Custom js for this page -->
   
    <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".nav-link[data-bs-toggle='collapse']").forEach(link => {
            link.addEventListener("click", function () {
                document.querySelectorAll(".collapse").forEach(menu => {
                    if (menu.id !== this.getAttribute("href").substring(1)) {
                        menu.classList.remove("show");
                    }
                });
            });
        });

        // Sidebar hover effect for small screens
        document.querySelectorAll(".sidebar .nav-item").forEach(item => {
            item.addEventListener("mouseover", function () {
                if (document.body.classList.contains("sidebar-icon-only")) {
                    item.classList.add("hover-open");
                }
            });
            item.addEventListener("mouseout", function () {
                if (document.body.classList.contains("sidebar-icon-only")) {
                    item.classList.remove("hover-open");
                }
            });
        });
    });
</script>

    @stack('scripts')
</body>
</html>




