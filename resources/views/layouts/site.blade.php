<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @yield('header')
</head>

<body>
    <!-- header -->
    <header>
        <section class="section_header bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="row w-100">
                        <div class="col-sm-2 d-flex justify-content-center">
                            <img src="{{ asset('images/logo.webp') }}" class="logo img-fluid" alt="logo" />
                        </div>
                        <div class="col-sm-8 py-4 d-flex align-items-center justify-content-between">
                            <nav class="navbar navbar-expand-lg bg-light">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-grow-1">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Trang chủ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Giới thiệu
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Về sản phẩm</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sản phẩm
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Về sản phẩm</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tin tức</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Cẩm nang</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <form class="search-form me-4">
                                <div style="display: flex;">
                                    <input type="search" placeholder="Search" class="search-input rounded me-2" aria-label="Search" style="flex: 1;" />
                                    <button type="submit" class="buta search-button rounded">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-2 d-flex justify-content-center">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-heart me-3"></i>
                                <i class="fas fa-bell me-3"></i>
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </header>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/slider.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider1.png') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider2.png') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
    </div>

    <main>

        @yield('maincontent')
    </main>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>THÔNG TIN CÔNG TY</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Chuyên cung cấp các loại sản phẩm từ yến đảm bảo an toàn – uy tín – chất lượng. Vua Yến là món quà gửi gắm sự yêu thương, nâng niu sức khoẻ cho chính bạn, cho chính những người thân yêu quanh mình.</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>VỀ CHÚNG TÔI</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Cẩm nang</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4>CHÍNH SÁCH</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Chính sách giao hàng</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính sách bán hàng</a></li>
                        <li><a href="#">Chính sách mua hàng</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>THÔNG TIN LIÊN HỆ</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Tòa nhà Ladeco, 266 Đội Cấn, Quận Ba Đình, TP Hà Nội</a></li>
                        <li><a href="#">1900 6750</a></li>
                        <li><a href="#">support@sapo.vn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('footer')
</body>

</html>
