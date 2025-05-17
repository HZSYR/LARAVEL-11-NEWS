<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tambahkan CSS untuk efek salju -->
    <style>
        .snowflake {
            color: #fff;
            font-size: 1em;
            font-family: Arial, sans-serif;
            text-shadow: 0 0 5px #000;
            position: fixed;
            top: -10%;
            z-index: 9999;
            user-select: none;
            cursor: default;
            animation-name: snowflakes-fall, snowflakes-shake;
            animation-duration: 10s, 3s;
            animation-timing-function: linear, ease-in-out;
            animation-iteration-count: infinite, infinite;
            animation-play-state: running, running;
        }

        @keyframes snowflakes-fall {
            0% {
                top: -10%;
            }

            100% {
                top: 100%;
            }
        }

        @keyframes snowflakes-shake {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(80px);
            }
        }

        .snowflake:nth-of-type(1) {
            left: 10%;
            animation-delay: 0s, 0s;
        }

        .snowflake:nth-of-type(2) {
            left: 20%;
            animation-delay: 1s, 1s;
        }

        .snowflake:nth-of-type(3) {
            left: 30%;
            animation-delay: 6s, 0.5s;
        }

        .snowflake:nth-of-type(4) {
            left: 40%;
            animation-delay: 4s, 2s;
        }

        .snowflake:nth-of-type(5) {
            left: 50%;
            animation-delay: 8s, 3s;
        }

        .snowflake:nth-of-type(6) {
            left: 60%;
            animation-delay: 6s, 2s;
        }

        .snowflake:nth-of-type(7) {
            left: 70%;
            animation-delay: 2.5s, 1s;
        }

        .snowflake:nth-of-type(8) {
            left: 80%;
            animation-delay: 1s, 0s;
        }

        .snowflake:nth-of-type(9) {
            left: 90%;
            animation-delay: 3s, 1.5s;
        }

        .snowflake:nth-of-type(10) {
            left: 25%;
            animation-delay: 2s, 0s;
        }

        .snowflake:nth-of-type(11) {
            left: 65%;
            animation-delay: 4s, 2.5s;
        }
    </style>

    <!-- HTML untuk efek salju -->
    <div class="snowflakes" aria-hidden="true">
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
    </div>

    <!-- Script untuk mengaktifkan/menonaktifkan efek -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Secara default efek salju aktif
            // Tambahkan kode berikut jika ingin menambahkan tombol untuk mengaktifkan/menonaktifkan efek
            const toggleSnow = document.getElementById('toggle-snow');
            if (toggleSnow) {
                toggleSnow.addEventListener('click', function() {
                    const snowflakes = document.querySelector('.snowflakes');
                    if (snowflakes.style.display === 'none') {
                        snowflakes.style.display = 'block';
                    } else {
                        snowflakes.style.display = 'none';
                    }
                });
            }

        });
    </script>
    <style>
        .bg-custom {
            background-color: rgb(204, 216, 235);
        }
    </style>
    <meta charset="utf-8" />
    <title>Domus News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/x-icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('th/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('th/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('th/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('th/css/style.css') }}" rel="stylesheet" />

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/scroll.css') }}">
</head>

<body>
    {{-- <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End --> --}}

    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid topbar bg-dark d-none d-lg-block">
            <div class="container px-0">
                <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                    <div class="top-info flex-grow-0">
                        <span class="rounded-circle btn-sm-square bg-primary me-2">
                            <i class="fas fa-bolt text-white"></i>
                        </span>
                        <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                            <p class="mb-0 text-white fs-6 fw-normal">Trending</p>
                        </div>
                        @foreach (\App\Models\News::where('status', 'Accept')->withCount('likes')->orderBy('likes_count', 'desc')->take(1)->get() as $news)
                        <div class="overflow-hidden" style="width: 1035px">
                            <div id="note" class="ps-2">
                                <img src="{{ $news->image ? asset('storage/images/' . $news->image) : asset('img/noimg.jpg') }}"
                                    class="img-fluid rounded-circle border border-3 border-primary me-2"
                                    style="width: 30px; height: 30px" alt="" />
                                <a href="{{ route('news.show', $news->id) }}">
                                    <p class="text-white mb-0 link-hover">
                                        {{ $news->title }}
                                    </p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-custom">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="{{ route('index') }}" class="navbar-brand d-block">
                        <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"
                            style="max-width: 60px;">
                    </a>
                    <button class="navbar-toggler py-2 px-3  " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-custom justify-content-between" id="navbarCollapse">
                        <div class="scroll-container">
                            <button class="scroll-button left btn btn-outline-primary d-none d-xl-block " id="scrollLeft">
                                <span>&lt;</span>
                            </button>
                            <div class="scroll-content">
                                <div class="navbar-nav mx-lg-4 border-top"
                                    style="white-space: nowrap; max-width: 60vw;">
                                    @foreach (\App\Models\Category::all() as $categories)
                                    <a href="{{ route('news.viewCategory', $categories->id) }}"
                                        class="nav-item nav-link mt-2">{{ $categories->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <button class="scroll-button right btn btn-outline-primary d-none d-xl-block" id="scrollRight">
                                <span>&gt;</span>
                            </button>
                        </div>
                        <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0 mx-2">
                            <div class="d-flex">
                                <img src="{{ asset('th/img/weather-icon.png') }}" class="img-fluid w-100 ms-2"
                                    alt="" />
                                <div class="d-flex align-items-center">
                                    <strong class="fs-4 text-secondary" id="temp">--°C</strong>
                                    <div class="d-flex flex-column ms-2" style="width: 150px">
                                        <span class="text-body" id="city">Loading city...</span>
                                        <small id="date">Loading date...</small>
                                    </div>
                                </div>

                                <script>
                                    // Tampilkan tanggal lokal dari device
                                    const dateElement = document.getElementById("date");
                                    const now = new Date();
                                    const options = {
                                        weekday: 'short',
                                        year: 'numeric',
                                        month: 'short',
                                        day: 'numeric'
                                    };
                                    dateElement.textContent = now.toLocaleDateString(undefined, options);

                                    // Ambil lokasi berdasarkan IP
                                    fetch("https://ipapi.co/json/")
                                        .then(res => res.json())
                                        .then(data => {
                                            const city = data.city || "Unknown City";
                                            document.getElementById("city").textContent = city;

                                            // Ambil cuaca dari wttr.in berdasarkan kota
                                            return fetch(`https://wttr.in/${city}?format=%t`);
                                        })
                                        .then(res => res.text())
                                        .then(temp => {
                                            document.getElementById("temp").textContent = temp.trim();
                                        })
                                        .catch(err => {
                                            console.error("Error:", err);
                                            document.getElementById("city").textContent = "City not found";
                                            document.getElementById("temp").textContent = "--°C";
                                        });
                                </script>

                            </div>
                            <!-- <button
                                class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto"
                                data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="fas fa-search text-primary"></i>
                            </button> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Search by keyword
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1" />
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-xl-3">
                    <div class="footer-item-1">
                        <h4 class="mb-4 text-white">Get In Touch</h4>
                        <p class="text-secondary line-h">
                            Address: <span class="text-white">Padang</span>
                        </p>
                        <p class="text-secondary line-h">
                            Email: <span class="text-white">Domus@gmail.com</span>
                        </p>
                        <p class="text-secondary line-h">
                            Phone: <span class="text-white">+62x-xxx-xxx-xx</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="footer-item-2">
                        @foreach (\App\Models\News::where('status', 'Accept')->orderBy('created_at', 'desc')->take(1)->get() as $news)
                        <div class="d-flex flex-column mb-4">
                            <h4 class="mb-4 text-white">Recent News</h4>
                            <a href="{{ route('news.viewCategory', $news->category->id) }}">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                        <img src="{{ $news->image ? asset('storage/images/' . $news->image) : asset('img/noimg.jpg') }}"
                                            class="img-zoomin img-fluid rounded-circle w-100" alt=""
                                            style="width: 100px; height: 100px; object-fit: cover;" />
                                    </div>
                                    <div class="d-flex flex-column ps-4">
                                        <p class="text-uppercase text-white mb-3">{{ $news->category->name }}</p>
                                        <a href="{{ route('news.show', $news->id) }}" class="h6 text-white">
                                            {{ $news->title }}
                                        </a>
                                        <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i>
                                            {{ $news->created_at->translatedFormat('j F Y') }}</small>
                                        </small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @foreach (\App\Models\News::where('status', 'Accept')->orderBy('created_at', 'desc')->skip(1)->take(1)->get() as $news)
                        <div class="d-flex flex-column">
                            <a href="{{ route('news.viewCategory', $news->category->id) }}">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                        <img src="{{ $news->image ? asset('storage/images/' . $news->image) : asset('img/noimg.jpg') }}"
                                            class="img-zoomin img-fluid rounded-circle w-100" alt=""
                                            style="width: 100px; height: 100px; object-fit: cover;" />
                                    </div>
                                    <div class="d-flex flex-column ps-4">
                                        <p class="text-uppercase text-white mb-3">{{ $news->category->name }}</p>
                                        <a href="{{ route('news.show', $news->id) }}" class="h6 text-white">
                                            {{ $news->title }}
                                        </a>
                                        <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i>
                                            {{ $news->created_at->translatedFormat('j F Y') }}</small>
                                        </small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="d-flex flex-column text-start footer-item-3">
                        <h4 class="mb-4 text-white">Categories</h4>
                        @foreach (\App\Models\Category::orderBy('views', 'desc')->take(6)->get() as $categories)
                        <a class="btn-link text-white"
                            href="{{ route('news.viewCategory', $categories->id) }}"><i
                                class="fas fa-angle-right text-white me-2"></i> {{ $categories->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="footer-item-4">
                        <h4 class="mb-4 text-white">Our Gallery</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('img/pict1.jpeg') }}"
                                        class="img-zoomin img-fluid rounded w-100" alt="" />
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('img/pict2.jpeg') }}"
                                        class="img-zoomin img-fluid rounded w-100" alt="" />
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('img/pict3.jpeg') }}"
                                        class="img-zoomin img-fluid rounded w-100" alt="" />
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('img/pict4.jpeg') }}"
                                        class="img-zoomin img-fluid rounded w-100" alt="" />
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('img/pict5.jpeg') }}"
                                        class="img-zoomin img-fluid rounded w-100" alt="" />
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('img/pict6.jpeg') }}"
                                        class="img-zoomin img-fluid rounded w-100" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <style>
        .copyright {
            background-color: #111;
            overflow: hidden;
            position: relative;
        }

        .scroll-text {
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
            animation: scroll-left 20s linear infinite;
            color: #00f7ff;
            font-weight: bold;
            font-size: 1rem;
            text-shadow: 0 0 5px #00f7ff, 0 0 10px #00f7ff;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .glow {
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 5px #00f7ff, 0 0 10px #00f7ff;
            }

            to {
                text-shadow: 0 0 10px #00f7ff, 0 0 20px #00f7ff;
            }
        }
    </style>

    <div class="container-fluid copyright py-3 fade-in">
        <div class="container text-center">
            <div class="scroll-text glow">
                &copy; 2025 HAFIZH ASSYURA & ERIK MULYA SAPUTRA. All rights reserved. Designed with ❤️ for creativity and innovation.
            </div>
        </div>
    </div>

    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('th/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('th/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('th/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('th/js/main.js') }}"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('js/shortcut.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
</body>

</html>