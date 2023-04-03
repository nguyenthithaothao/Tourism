@extends('layouts.app')

@section('content')

<section class="tour">
    <!-- Head -->
    <div class="container-sm">
        <div class="links">
            <a href="#">Trang chủ</a>
            <i class="fa-solid fa-chevron-right"></i>
            <a href="#">Hội An</a>
            <i class="fa-solid fa-chevron-right"></i>
            <p>Các địa điểm tham quan</p>
        </div>
        <p class="title">Địa Điểm Tham Quan ở Hội An</p>
        <p class="action">345 hoạt động</p>


        <!-- Content -->
        <div class="container content">
            <div class="row">
                <div class="col-4 filter">
                    <!-- Filter -->
                    <div class="title">Lọc</div>

                    <!-- Giá -->
                    <b>Giá</b>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                            Trên 15.000.000VNĐ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">
                            10.000.000VNĐ - 15.000.000VNĐ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                        <label class="form-check-label" for="flexCheckDefault3">
                            5.000.000VNĐ - 10.000.000VNĐ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4">
                            2.000.000VNĐ - 5.000.000VNĐ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                        <label class="form-check-label" for="flexCheckDefault5">
                            0 - 2.000.000VNĐ
                        </label>
                    </div>

                    <!-- Sao -->

                    <b>Sao</b>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                        <label class="form-check-label" for="flexCheckDefault6">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                        <label class="form-check-label" for="flexCheckDefault7">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                        <label class="form-check-label" for="flexCheckDefault8">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                        <label class="form-check-label" for="flexCheckDefault9">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
                        <label class="form-check-label" for="flexCheckDefault10">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </label>
                    </div>
                </div>

                <!-- List tour -->
                <div class="col-8">
                    <div class="list-tour">
                        <div class="item">
                            <img src="{{ asset('images/nt.jpg') }}" alt="Card image" width="174px" height="174px">
                            <div class="w-100">
                                <p>Đà Nẵng <span>Bán chạy nhất</span></p>
                                <p class="name">Du thuyền trên sông Hàn</p>
                                <p class="desc">Du thuyền ngắm cảnh thành phố</p>
                                <div class="bot">
                                    <div>
                                        <p>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <b>4.6 / 5</b> (367 đánh giá)
                                        </p>
                                        <p class="text-success">
                                            <i class="fa-regular fa-calendar-check"></i>
                                            Có lựa chọn hủy miễn phí
                                        </p>
                                    </div>
                                    <div>
                                        <p class="cost">Từ <br> <b>€&nbsp;4,45</b></p>

                                        <a href="" class="btn d-block">
                                            Xem chỗ trống
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/nt.jpg') }}" alt="Card image" width="174px" height="174px">
                            <div class="w-100">
                                <p>Đà Nẵng <span>Bán chạy nhất</span></p>
                                <p class="name">Du thuyền trên sông Hàn</p>
                                <p class="desc">Du thuyền ngắm cảnh thành phố</p>
                                <div class="bot">
                                    <div>
                                        <p>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <b>4.6 / 5</b> (367 đánh giá)
                                        </p>
                                        <p class="text-success">
                                            <i class="fa-regular fa-calendar-check"></i>
                                            Có lựa chọn hủy miễn phí
                                        </p>
                                    </div>
                                    <div>
                                        <p class="cost">Từ <br> <b>€&nbsp;4,45</b></p>

                                        <a href="" class="btn d-block">
                                            Xem chỗ trống
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/nt.jpg') }}" alt="Card image" width="174px" height="174px">
                            <div class="w-100">
                                <p>Đà Nẵng <span>Bán chạy nhất</span></p>
                                <p class="name">Du thuyền trên sông Hàn</p>
                                <p class="desc">Du thuyền ngắm cảnh thành phố</p>
                                <div class="bot">
                                    <div>
                                        <p>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <b>4.6 / 5</b> (367 đánh giá)
                                        </p>
                                        <p class="text-success">
                                            <i class="fa-regular fa-calendar-check"></i>
                                            Có lựa chọn hủy miễn phí
                                        </p>
                                    </div>
                                    <div>
                                        <p class="cost">Từ <br> <b>€&nbsp;4,45</b></p>

                                        <a href="" class="btn d-block">
                                            Xem chỗ trống
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/nt.jpg') }}" alt="Card image" width="174px" height="174px">
                            <div class="w-100">
                                <p>Đà Nẵng <span>Bán chạy nhất</span></p>
                                <p class="name">Du thuyền trên sông Hàn</p>
                                <p class="desc">Du thuyền ngắm cảnh thành phố</p>
                                <div class="bot">
                                    <div>
                                        <p>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <b>4.6 / 5</b> (367 đánh giá)
                                        </p>
                                        <p class="text-success">
                                            <i class="fa-regular fa-calendar-check"></i>
                                            Có lựa chọn hủy miễn phí
                                        </p>
                                    </div>
                                    <div>
                                        <p class="cost">Từ <br> <b>€&nbsp;4,45</b></p>

                                        <a href="" class="btn d-block">
                                            Xem chỗ trống
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/nt.jpg') }}" alt="Card image" width="174px" height="174px">
                            <div class="w-100">
                                <p>Đà Nẵng <span>Bán chạy nhất</span></p>
                                <p class="name">Du thuyền trên sông Hàn</p>
                                <p class="desc">Du thuyền ngắm cảnh thành phố</p>
                                <div class="bot">
                                    <div>
                                        <p>
                                            <i class="fa-solid fa-star text-warning"></i>
                                            <b>4.6 / 5</b> (367 đánh giá)
                                        </p>
                                        <p class="text-success">
                                            <i class="fa-regular fa-calendar-check"></i>
                                            Có lựa chọn hủy miễn phí
                                        </p>
                                    </div>
                                    <div>
                                        <p class="cost">Từ <br> <b>€&nbsp;4,45</b></p>

                                        <a href="" class="btn d-block">
                                            Xem chỗ trống
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paginate -->
                    <nav class="paginate" aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>



</section>

@endsection
