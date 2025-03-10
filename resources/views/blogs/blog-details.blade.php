<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Blog Details - Blogy Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
      
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body class="blog-details-page">

    @include('includes.header')

    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="breadcrumbs">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Category</a>
                        </li>
                        <li class="breadcrumb-item active current">Blog Details</li>
                    </ol>
                </nav>
            </div>

            <div class="title-wrapper">
                <h1>Blog Details</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                    mattis, pulvinar dapibus leo.</p>
            </div>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container" data-aos="fade-up">
                            <article class="article">
                                <div class="hero-img" data-aos="zoom-in">
                                    <img src="{{ asset('assets/images/blog/blog-post-3.webp') }}" alt="Featured blog image"
                                        class="img-fluid" loading="lazy">
                                    <div class="meta-overlay">
                                        <div class="meta-categories">
                                            <a href="#" class="category">Web Development</a>
                                            <span class="divider">•</span>
                                            <span class="reading-time"><i class="bi bi-clock"></i> 6 min read</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                                    <div class="content-header">
                                        <h1 class="title">Modern Web Development: Best Practices and Future Trends for
                                            2025</h1>
                                        <div class="author-info">
                                            <div class="author-details">
                                                <img src="{{ asset('assets/images/person/person-f-8.webp') }}" alt="Author"
                                                    class="author-img">
                                                <div class="info">
                                                    <h4>Michael Chen</h4>
                                                    <span class="role">Senior Web Developer</span>
                                                </div>
                                            </div>
                                            <div class="post-meta">
                                                <span class="date"><i class="bi bi-calendar3"></i> Mar 15, 2025</span>
                                                <span class="divider">•</span>
                                                <span class="comments"><i class="bi bi-chat-text"></i> 18
                                                    Comments</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <p class="lead">The landscape of web development continues to evolve...</p>
                                        <p>As we delve into 2025, the web development ecosystem has transformed
                                            dramatically...</p>

                                        <div class="content-image right-aligned">
                                            <img src="{{ asset('assets/images/blog/blog-hero-2.webp') }}" class="img-fluid"
                                                alt="Modern web development tools" loading="lazy">
                                            <figcaption>Modern development environments emphasize collaboration and
                                                efficiency</figcaption>
                                        </div>

                                        <h2>The Rise of Web Components</h2>
                                        <p>Web Components have become increasingly crucial in modern web development...
                                        </p>

                                        <h2>Performance Optimization</h2>
                                        <blockquote>
                                            <p>"The future of web development lies not just in writing code, but in
                                                creating seamless experiences..."</p>
                                            <cite>Emily Thompson, Web Performance Architect</cite>
                                        </blockquote>
                                    </div>

                                    <div class="meta-bottom">
                                        <div class="tags-section">
                                            <h4>Related Topics</h4>
                                            <div class="tags">
                                                <a href="#" class="tag">Web Development</a>
                                                <a href="#" class="tag">Performance</a>
                                                <a href="#" class="tag">Best Practices</a>
                                                <a href="#" class="tag">Trends</a>
                                                <a href="#" class="tag">2025</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>

                    <!-- Blog Author Section -->
                    <section id="blog-author" class="blog-author section">
                        <div class="container" data-aos="fade-up">
                            <div class="author-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-4 text-center">
                                        <img src="{{ asset('assets/images/person/person-f-12.webp') }}"
                                            class="author-img rounded-circle" alt="" loading="lazy">
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        <div class="author-content">
                                            <h3 class="author-name">Sarah Anderson</h3>
                                            <span class="author-title">Senior Tech Writer & Developer Advocate</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-4 sidebar">
                    <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">
                            <h3 class="widget-title">Search</h3>
                            <form method="GET">
                                <input type="text" name="query">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="mt-3">
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Education <span>(14)</span></a></li>
                            </ul>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
                            <h3 class="widget-title">Recent Posts</h3>

                            <div class="post-item">
                                <img src="{{ asset('assets/images/blog/blog-post-square-1.webp') }}" alt=""
                                    class="flex-shrink-0">
                                <div>
                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>

                            <div class="post-item">
                                <img src="{{ asset('assets/images/blog/blog-post-square-2.webp') }}" alt=""
                                    class="flex-shrink-0">
                                <div>
                                    <h4><a href="#">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>

                            <div class="post-item">
                                <img src="{{ asset('assets/images/blog/blog-post-square-3.webp') }}" alt=""
                                    class="flex-shrink-0">
                                <div>
                                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>

                            <div class="post-item">
                                <img src="{{ asset('assets/images/blog/blog-post-square-4.webp') }}" alt=""
                                    class="flex-shrink-0">
                                <div>
                                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>

                            <div class="post-item">
                                <img src="{{ asset('assets/images/blog/blog-post-square-5.webp') }}" alt=""
                                    class="flex-shrink-0">
                                <div>
                                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    @include('includes.footer')
</body>
</html>