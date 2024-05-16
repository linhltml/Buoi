@extends('layouts.site')

@section('title', 'Sản phẩm')

@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('maincontent')
    <div class="maincontent mb-5">
        <div class="p-4">
            <h1 class="text-center text-success mb-4">TẤT CẢ SẢN PHẨM MỚI</h1>
            <div class="row">
                <?php
                $newProducts = [
                    [
                        'name' => 'Tổ yến tinh chế loại 1',
                        'description' => 'Tổ yến tinh chế loại 1.',
                        'price' => '2,200,000 VND',
                        'image' => 'images/sp1.webp'
                    ],
                    [
                        'name' => 'Tổ yến rút lông thường',
                        'description' => 'Tổ yến rút lông thường.',
                        'price' => '5,700,000 VND',
                        'image' => 'images/sp2.webp'
                    ],
                    [
                        'name' => 'Nước Yến sào Sanest lọ 70ml, Hộp 8 lọ',
                        'description' => 'Nước Yến sào Sanest lọ 70ml, Hộp 8 lọ.',
                        'price' => '350,000 VND',
                        'image' => 'images/sp3.webp'
                    ],
                    [
                        'name' => 'Tổ yến rút lông xuất khẩu',
                        'description' => 'Tổ yến rút lông xuất khẩu.',
                        'price' => '5,200,000 VND',
                        'image' => 'images/sp4.webp'
                    ],
                ];

                foreach ($newProducts as $product) {
                    echo '
                    <div class="col-6 col-md-3 mb-4">
                        <div class="card h-100">
                            <img src="' . asset($product['image']) . '" class="card-img-top" alt="' . $product['name'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $product['name'] . '</h5>
                                <p class="card-text">' . $product['description'] . '</p>
                                <p class="card-text text-success">' . $product['price'] . '</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>

        <div class="p-4">
            <h1 class="text-center text-success mb-4">TẤT CẢ SẢN PHẨM SALE</h1>
            <div class="row">
                <?php
                $saleProducts = [
                    [
                        'name' => 'Tổ yến tinh chế VIP độc quyền',
                        'description' => 'Tổ yến tinh chế VIP độc quyền.',
                        'price' => '2,550,000 VND',
                        'original_price' => '2,700,000 VND',
                        'discount' => '- 6%',
                        'image' => 'images/sp5.webp'
                    ],
                    // Thêm các sản phẩm sale khác tại đây
                ];

                foreach ($saleProducts as $product) {
                    echo '
                    <div class="col-6 col-md-3 mb-4">
                        <div class="card h-100 product-card">
                            <div class="discount-badge">' . $product['discount'] . '</div>
                            <img src="' . asset($product['image']) . '" class="card-img-top" alt="' . $product['name'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $product['name'] . '</h5>
                                <p class="card-text">' . $product['description'] . '</p>
                                <p class="card-text text-success">' . $product['price'] . ' <span class="original-price">' . $product['original_price'] . '</span></p>
                                <button class="choose-button">Tùy chọn</button>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>

        <div class="p-4">
            <h1 class="text-center text-success mb-4">TẤT CẢ BÀI VIẾT MỚI</h1>
            <div class="row">
                <?php
                $newArticles = [
                    [
                        'title' => 'Lợi ích của tổ yến đối với sức khỏe',
                        'excerpt' => 'Tổ yến không chỉ là món ăn ngon mà còn mang lại nhiều lợi ích cho sức khỏe.',
                        'date' => '2023-05-10',
                        'image' => 'images/article.webp'
                    ],
                    [
                        'title' => 'Cách chế biến tổ yến ngon nhất',
                        'excerpt' => 'Hướng dẫn cách chế biến tổ yến ngon và giữ nguyên chất dinh dưỡng.',
                        'date' => '2023-05-12',
                        'image' => 'images/article.webp'
                    ],
                    [
                        'title' => 'Tổ yến và những điều cần biết',
                        'excerpt' => 'Tìm hiểu về nguồn gốc và các loại tổ yến phổ biến trên thị trường.',
                        'date' => '2023-05-14',
                        'image' => 'images/article.webp'
                    ],
                    // Thêm các bài viết mới tại đây
                ];

                foreach ($newArticles as $article) {
                    echo '
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100 article-card">
                            <img src="' . asset($article['image']) . '" class="card-img-top" alt="' . $article['title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $article['title'] . '</h5>
                                <p class="card-text">' . $article['excerpt'] . '</p>
                                <p class="card-text"><small class="text-muted">' . $article['date'] . '</small></p>
                                <a href="#" class="btn btn-primary">Đọc tiếp</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
@endsection
