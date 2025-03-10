<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Education Today-Blogs</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

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

<body class="index-page">
   <!-- Navigation Bar -->
   @include('includes.header')

    <main class="main">

        <!-- Blog Hero Section -->
        <section id="blog-hero" class="blog-hero section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-grid">

                    <!-- Featured Post (Large) -->
                    <article class="blog-item featured" data-aos="fade-up">
                        <img src="{{ asset('assets/images/blog/blog-post-3.webp') }}" alt="Blog Image" class="img-fluid">
                        <div class="blog-content">
                            <div class="post-meta">
                                <span class="date">Apr. 14th, 2025</span>
                                <span class="category">Technology</span>
                            </div>
                            <h2 class="post-title">
                                <a href="{{ url('/blog-details') }}"
                                    title="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </a>
                            </h2>
                        </div>
                    </article><!-- End Featured Post -->

                    <!-- Regular Posts -->
                    <article class="blog-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/images/blog/blog-post-portrait-1.webp') }}" alt="Blog Image"
                            class="img-fluid">
                        <div class="blog-content">
                            <div class="post-meta">
                                <span class="date">Apr. 14th, 2025</span>
                                <span class="category">Security</span>
                            </div>
                            <h3 class="post-title">
                                <a href="{{ url('/blog-details') }}" title="Sed do eiusmod tempor incididunt ut labore">
                                    Sed do eiusmod tempor incididunt ut labore
                                </a>
                            </h3>
                        </div>
                    </article><!-- End Blog Item -->

                    <article class="blog-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('assets/images/blog/blog-post-9.webp') }}" alt="Blog Image" class="img-fluid">
                        <div class="blog-content">
                            <div class="post-meta">
                                <span class="date">Apr. 14th, 2025</span>
                                <span class="category">Career</span>
                            </div>
                            <h3 class="post-title">
                                <a href="{{ url('/blog-details') }}"
                                    title="Ut enim ad minim veniam, quis nostrud exercitation">
                                    Ut enim ad minim veniam, quis nostrud exercitation
                                </a>
                            </h3>
                        </div>
                    </article><!-- End Blog Item -->

                    <article class="blog-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('assets/images/blog/blog-post-7.webp') }}" alt="Blog Image" class="img-fluid">
                        <div class="blog-content">
                            <div class="post-meta">
                                <span class="date">Apr. 14th, 2025</span>
                                <span class="category">Cloud</span>
                            </div>
                            <h3 class="post-title">
                                <a href="{{ url('/blog-details') }}"
                                    title="Adipiscing elit, sed do eiusmod tempor incididunt">
                                    Adipiscing elit, sed do eiusmod tempor incididunt
                                </a>
                            </h3>
                        </div>
                    </article><!-- End Blog Item -->

                    <article class="blog-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{ asset('assets/images/blog/blog-post-6.webp') }}" alt="Blog Image" class="img-fluid">
                        <div class="blog-content">
                            <div class="post-meta">
                                <span class="date">Apr. 14th, 2025</span>
                                <span class="category">Programming</span>
                            </div>
                            <h3 class="post-title">
                                <a href="{{ url('/blog-details') }}"
                                    title="Excepteur sint occaecat cupidatat non proident">
                                    Excepteur sint occaecat cupidatat non proident
                                </a>
                            </h3>
                        </div>
                    </article><!-- End Blog Item -->

                </div>
            </div>
        </section><!-- /Blog Hero Section -->


        <!-- Featured Posts Section -->
        <section id="featured-posts" class="featured-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Featured Posts</h2>
                <div><span>Check Our</span> <span class="description-title">Featured Posts</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="blog-posts-slider swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": 3,
                    "spaceBetween": 30,
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 20
                        },
                        "768": {
                            "slidesPerView": 2,
                            "spaceBetween": 20
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 30
                        }
                    }
                }
            </script>

                    <div class="swiper-wrapper">
                        @php
                            $posts = [
                                [
                                    'img' => 'assets/images/blog/blog-post-portrait-1.webp',
                                    'author' => 'Julia Parker',
                                    'date' => 'Jan 15, 2025',
                                    'comments' => '6 Comments',
                                    'title' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet',
                                    'excerpt' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce porttitor metus eget lectus consequat, sit amet feugiat magna vulputate.',
                                    'link' => '#'
                                ],
                                [
                                    'img' => 'assets/images/blog/blog-post-portrait-2.webp',
                                    'author' => 'Mark Wilson',
                                    'date' => 'Jan 18, 2025',
                                    'comments' => '6 Comments',
                                    'title' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
                                    'excerpt' => 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.',
                                    'link' => '#'
                                ],
                                [
                                    'img' => 'assets/images/blog/blog-post-portrait-3.webp',
                                    'author' => 'Sarah Johnson',
                                    'date' => 'Jan 21, 2025',
                                    'comments' => '15 Comments',
                                    'title' => 'At vero eos et accusamus et iusto odio dignissimos ducimus',
                                    'excerpt' => 'Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi.',
                                    'link' => '#'
                                ],
                                [
                                    'img' => 'assets/images/blog/blog-post-portrait-4.webp',
                                    'author' => 'David Brown',
                                    'date' => 'Jan 24, 2025',
                                    'comments' => '10 Comments',
                                    'title' => 'Et harum quidem rerum facilis est et expedita distinctio',
                                    'excerpt' => 'Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.',
                                    'link' => '#'
                                ],
                                [
                                    'img' => 'assets/images/blog/blog-post-portrait-5.webp',
                                    'author' => 'Emma Davis',
                                    'date' => 'Jan 27, 2025',
                                    'comments' => '6 Comments',
                                    'title' => 'Nam libero tempore, cum soluta nobis est eligendi optio',
                                    'excerpt' => 'Aenean leo ligula porttitor eu consequat vitae eleifend ac enim aliquam lorem ante dapibus in viverra.',
                                    'link' => '#'
                                ],
                            ];
                        @endphp

                        @foreach ($posts as $post)
                            <div class="swiper-slide">
                                <div class="blog-post-item">
                                    <img src="{{ asset($post['img']) }}" alt="Blog Image">
                                    <div class="blog-post-content">
                                        <div class="post-meta">
                                            <span><i class="bi bi-person"></i> {{ $post['author'] }}</span>
                                            <span><i class="bi bi-clock"></i> {{ $post['date'] }}</span>
                                            <span><i class="bi bi-chat-dots"></i> {{ $post['comments'] }}</span>
                                        </div>
                                        <h2><a href="{{ $post['link'] }}">{{ $post['title'] }}</a></h2>
                                        <p>{{ $post['excerpt'] }}</p>
                                        <a href="{{ $post['link'] }}" class="read-more">Read More <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- End slide item -->
                        @endforeach
                    </div>

                </div>

            </div>
        </section><!-- /Featured Posts Section -->


        <!-- Category Section Section -->
        <section id="category-section" class="category-section section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Category Section</h2>
                <div> <span class="description-title">Category Section</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <!-- Featured Posts -->
                <div class="row gy-4 mb-4">
                    <div class="col-lg-4">
                        <article class="featured-post">
                            <div class="post-img">
                                <img src="{{ asset('assets/images/blog/blog-post-6.webp') }}" alt="" class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="post-content">
                                <div class="category-meta">
                                    <span class="post-category">Health</span>
                                    <div class="author-meta">
                                        <img src="{{ asset('assets/images/person/person-f-13.webp') }}" alt=""
                                            class="author-img">
                                        <span class="author-name">William G.</span>
                                        <span class="post-date">28 April 2024</span>
                                    </div>
                                </div>
                                <h2 class="title">
                                    <a href="blog-details.html">Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem</a>
                                </h2>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4">
                        <article class="featured-post">
                            <div class="post-img">
                                <img src="{{ asset('assets/images/blog/blog-post-7.webp') }}" alt="" class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="post-content">
                                <div class="category-meta">
                                    <span class="post-category">Education</span>
                                    <div class="author-meta">
                                        <img src="{{ asset('assets/images/person/person-m-10.webp') }}" alt=""
                                            class="author-img">
                                        <span class="author-name">Emma D.</span>
                                        <span class="post-date">30 May 2024</span>
                                    </div>
                                </div>
                                <h2 class="title">
                                    <a href="blog-details.html">Ut enim ad minima veniam, quis nostrum exercitationem
                                        ullam corporis</a>
                                </h2>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4">
                        <article class="featured-post">
                            <div class="post-img">
                                <img src="{{ asset('assets/images/blog/blog-post-5.webp') }}" alt="" class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="post-content">
                                <div class="category-meta">
                                    <span class="post-category">Gaming</span>
                                    <div class="author-meta">
                                        <img src="{{ asset('assets/images/person/person-f-14.webp') }}" alt=""
                                            class="author-img">
                                        <span class="author-name">James F.</span>
                                        <span class="post-date">3 June 2024</span>
                                    </div>
                                </div>
                                <h2 class="title">
                                    <a href="blog-details.html">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                        aut odit aut fugit</a>
                                </h2>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- List Posts -->
                <div class="row">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-xl-4 col-lg-6">
                            <article class="list-post">
                                <div class="post-img">
                                    <img src="{{ asset('assets/images/blog/blog-post-' . $i . '.webp') }}" alt=""
                                        class="img-fluid" loading="lazy">
                                </div>
                                <div class="post-content">
                                    <div class="category-meta">
                                        <span class="post-category">Gaming</span>
                                    </div>
                                    <h3 class="title">
                                        <a href="blog-details.html">Sample Post Title {{ $i }}</a>
                                    </h3>
                                    <div class="post-meta">
                                        <span class="read-time">2 mins read</span>
                                        <span class="post-date">{{ now()->addDays($i * 10)->format('d F Y') }}</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endfor
                </div>
            </div>
        </section>


        <!-- Call To Action 2 Section -->
        <section id="call-to-action-2" class="call-to-action-2 section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="advertise-1 d-flex flex-column flex-lg-row gap-4 align-items-center position-relative">

                    <!-- Left Content -->
                    <div class="content-left flex-grow-1" data-aos="fade-right" data-aos-delay="200">
                        <span class="badge text-uppercase mb-2">Don't Miss</span>
                        <h2>Revolutionize Your Digital Experience Today</h2>
                        <p class="my-4">
                            Strategia accelerates your business growth through innovative solutions and cutting-edge
                            technology.
                            Join thousands of satisfied customers who have transformed their operations.
                        </p>

                        <!-- Features List -->
                        <div class="features d-flex flex-wrap gap-3 mb-4">
                            @foreach (['Premium Support', 'Cloud Integration', 'Real-time Analytics'] as $feature)
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>

                        <!-- Buttons -->
                        <div class="cta-buttons d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-primary">Start Free Trial</a>
                            <a href="#" class="btn btn-outline">Learn More</a>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="content-right position-relative" data-aos="fade-left" data-aos-delay="300">
                        <img src="{{ asset('assets/images/misc/misc-1.webp') }}" alt="Digital Platform"
                            class="img-fluid rounded-4">

                        <!-- Floating Card -->
                        <div class="floating-card">
                            <div class="card-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div class="card-content">
                                <span class="stats-number">245%</span>
                                <span class="stats-text">Growth Rate</span>
                            </div>
                        </div>
                    </div>

                    <!-- Decoration -->
                    <div class="decoration">
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /Call To Action 2 Section -->

        <!-- Latest Posts Section -->
        <section id="latest-posts" class="latest-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Latest Posts</h2>
                <div><span>Check Our</span> <span class="description-title">Latest Posts</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    @foreach ([['category' => 'Politics', 'title' => 'Dolorum optio tempore voluptas dignissimos', 'author' => 'Maria Doe', 'date' => '2022-01-01', 'image' => 'blog-post-1.webp', 'author_image' => 'person-f-12.webp'], ['category' => 'Sports', 'title' => 'Nisi magni odit consequatur autem nulla dolorem', 'author' => 'Allisa Mayer', 'date' => '2022-06-05', 'image' => 'blog-post-2.webp', 'author_image' => 'person-f-13.webp'], ['category' => 'Entertainment', 'title' => 'Possimus soluta ut id suscipit ea ut in quo quia et soluta', 'author' => 'Mark Dower', 'date' => '2022-06-22', 'image' => 'blog-post-3.webp', 'author_image' => 'person-m-10.webp'], ['category' => 'Sports', 'title' => 'Non rem rerum nam cum quo minus olor distincti', 'author' => 'Lisa Neymar', 'date' => '2022-06-30', 'image' => 'blog-post-4.webp', 'author_image' => 'person-f-14.webp'], ['category' => 'Politics', 'title' => 'Accusamus quaerat aliquam qui debitis facilis consequatur', 'author' => 'Denis Peterson', 'date' => '2022-01-30', 'image' => 'blog-post-5.webp', 'author_image' => 'person-m-11.webp'], ['category' => 'Entertainment', 'title' => 'Distinctio provident quibusdam numquam aperiam aut', 'author' => 'Mika Lendon', 'date' => '2022-02-14', 'image' => 'blog-post-6.webp', 'author_image' => 'person-f-15.webp'],] as $post)

                        <div class="col-lg-4">
                            <article>

                                <div class="post-img">
                                    <img src="{{ asset('assets/images/blog/' . $post['image']) }}" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">{{ $post['category'] }}</p>

                                <h2 class="title">
                                    <a href="blog-details.html">{{ $post['title'] }}</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/person/' . $post['author_image']) }}" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">{{ $post['author'] }}</p>
                                        <p class="post-date">
                                            <time
                                                datetime="{{ $post['date'] }}">{{ \Carbon\Carbon::parse($post['date'])->format('M d, Y') }}</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    @endforeach

                </div>
            </div>

        </section><!-- /Latest Posts Section -->


        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="cta-content" data-aos="fade-up" data-aos-delay="200">
                            <h2>Subscribe to our newsletter</h2>
                            <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                Curabitur aliquet quam id dui posuere blandit.</p>

                            <form action="#" method="post" class="php-email-form cta-form" data-aos="fade-up"
                                data-aos-delay="300">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email address..."
                                        aria-label="Email address" aria-describedby="button-subscribe">
                                    <button class="btn btn-primary" type="submit"
                                        id="button-subscribe">Subscribe</button>
                                </div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cta-image" data-aos="zoom-out" data-aos-delay="200">
                            <img src="{{ asset('assets/images/cta/cta-1.webp') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->

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