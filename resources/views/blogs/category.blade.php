<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Category - Blogy Bootstrap Template</title>
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
</head>

<body class="category-page">

    @include('includes.header')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title position-relative">
            <div class="breadcrumbs">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active current">Category</li>
                    </ol>
                </nav>
            </div>

            <div class="title-wrapper">
                <h1>Blog Category</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                    mattis, pulvinar dapibus leo.</p>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Category Posts Section -->
                    <section id="category-posts" class="category-posts section">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row gy-4">

                                <div class="col-lg-6">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ asset('assets/images/blog/blog-post-1.webp') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <p class="post-category">Politics</p>
                                        <h2 class="title">
                                            <a href="{{ url('blog-details') }}">Dolorum optio tempore voluptas
                                                dignissimos</a>
                                        </h2>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/person/person-f-12.webp') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Maria Doe</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-01">Jan 1, 2022</time>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-lg-6">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ asset('assets/images/blog/blog-post-2.webp') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <p class="post-category">Sports</p>
                                        <h2 class="title">
                                            <a href="{{ url('blog-details') }}">Nisi magni odit consequatur autem nulla
                                                dolorem</a>
                                        </h2>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/person/person-f-13.webp') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Allisa Mayer</p>
                                                <p class="post-date">
                                                    <time datetime="2022-06-05">Jun 5, 2022</time>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-lg-6">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ asset('assets/images/blog/blog-post-3.webp') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <p class="post-category">Entertainment</p>
                                        <h2 class="title">
                                            <a href="{{ url('blog-details') }}">Possimus soluta ut id suscipit ea ut in
                                                quo quia et soluta</a>
                                        </h2>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/person/person-m-10.webp') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Mark Dower</p>
                                                <p class="post-date">
                                                    <time datetime="2022-06-22">Jun 22, 2022</time>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-lg-6">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ asset('assets/images/blog/blog-post-4.webp') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <p class="post-category">Sports</p>
                                        <h2 class="title">
                                            <a href="{{ url('blog-details') }}">Non rem rerum nam cum quo minus olor
                                                distincti</a>
                                        </h2>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/person/person-f-14.webp') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Lisa Neymar</p>
                                                <p class="post-date">
                                                    <time datetime="2022-06-30">Jun 30, 2022</time>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-lg-6">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ asset('assets/images/blog/blog-post-5.webp') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <p class="post-category">Politics</p>
                                        <h2 class="title">
                                            <a href="{{ url('blog-details') }}">Accusamus quaerat aliquam qui debitis
                                                facilis consequatur</a>
                                        </h2>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/person/person-m-11.webp') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Denis Peterson</p>
                                                <p class="post-date">
                                                    <time datetime="2022-01-30">Jan 30, 2022</time>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- End post list item -->

                                <div class="col-lg-6">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ asset('assets/images/blog/blog-post-6.webp') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <p class="post-category">Entertainment</p>
                                        <h2 class="title">
                                            <a href="{{ url('blog-details') }}">Distinctio provident quibusdam numquam
                                                aperiam aut</a>
                                        </h2>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/person/person-f-15.webp') }}" alt=""
                                                class="img-fluid post-author-img flex-shrink-0">
                                            <div class="post-meta">
                                                <p class="post-author">Mika Lendon</p>
                                                <p class="post-date">
                                                    <time datetime="2022-02-14">Feb 14, 2022</time>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- End post list item -->

                            </div>
                        </div>
                    </section><!-- /Category Posts Section -->


                    <!-- Pagination Section -->
                    <section id="pagination-2" class="pagination-2 section">
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <ul>
                                    <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="active">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li>...</li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </section><!-- /Pagination Section -->

                </div>


                <div class="col-lg-4 sidebar">

                    <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">
                            <h3 class="widget-title">Search</h3>
                            <form action="">
                                <input type="text">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!--/Search Widget -->

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="mt-3">
                                @foreach([['name' => 'General', 'count' => 25], ['name' => 'Lifestyle', 'count' => 12], ['name' => 'Travel', 'count' => 5], ['name' => 'Design', 'count' => 22], ['name' => 'Creative', 'count' => 8], ['name' => 'Education', 'count' => 14]] as $category)
                                    <li><a href="#">{{ $category['name'] }} <span>({{ $category['count'] }})</span></a></li>
                                @endforeach
                            </ul>
                        </div><!--/Categories Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
                            <h3 class="widget-title">Recent Posts</h3>

                            @foreach([['img' => 'blog-post-square-1.webp', 'title' => 'Nihil blanditiis at in nihil autem', 'date' => 'Jan 1, 2020'], ['img' => 'blog-post-square-2.webp', 'title' => 'Quidem autem et impedit', 'date' => 'Jan 1, 2020'], ['img' => 'blog-post-square-3.webp', 'title' => 'Id quia et et ut maxime similique occaecati ut', 'date' => 'Jan 1, 2020'], ['img' => 'blog-post-square-4.webp', 'title' => 'Laborum corporis quo dara net para', 'date' => 'Jan 1, 2020'], ['img' => 'blog-post-square-5.webp', 'title' => 'Et dolores corrupti quae illo quod dolor', 'date' => 'Jan 1, 2020']] as $post)
                                <div class="post-item">
                                    <img src="{{ asset('assets/images/blog/' . $post['img']) }}" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="{{ url('blog-details') }}">{{ $post['title'] }}</a></h4>
                                        <time datetime="2020-01-01">{{ $post['date'] }}</time>
                                    </div>
                                </div><!-- End recent post item-->
                            @endforeach

                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                @foreach(['App', 'IT', 'Business', 'Mac', 'Design', 'Office', 'Creative', 'Studio', 'Smart', 'Tips', 'Marketing'] as $tag)
                                    <li><a href="#">{{ $tag }}</a></li>
                                @endforeach
                            </ul>
                        </div><!--/Tags Widget -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')

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
</body>

</html>