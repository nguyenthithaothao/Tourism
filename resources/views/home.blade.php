@extends('layouts.app')

@section('content')

<section class="search">
    <div class="container-sm">
        <div class="box">
            <div class="title">Bạn muốn trải nghiệm điều gì?</div>
            <p class="desc">Khám phá các hoạt động và địa điểm tham quan mới theo sở thích và gu du lịch của bạn</p>
            <div class="input-group">
                <div class="form-search">
                    <i class="fa-brands fa-pagelines text-success"></i>
                    <input id="search-focus" type="search" id="form1" class="form-control form-control-lg" placeholder="Bạn muốn đi đâu?" />
                </div>
                <button type="button" class="btn btn-primary btn-search">
                    Tìm
                </button>
            </div>
        </div>
    </div>
</section>

<section class="destination">
    <div class="container-sm">
        <p class="title">Điểm đến lân cận</p>
        <div class="container">
            <div class="row gx-3 gy-3">
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/hue.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Huế</p>
                            <p class="work">53 hoạt động</p>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/nt.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Nha Trang</p>
                            <p class="work">39 hoạt động</p>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/hoian.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Hội An</p>
                            <p class="work">153 hoạt động</p>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/hue.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Huế</p>
                            <p class="work">53 hoạt động</p>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/nt.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Nha Trang</p>
                            <p class="work">39 hoạt động</p>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/hoian.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Hội An</p>
                            <p class="work">153 hoạt động</p>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/hue.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Huế</p>
                            <p class="work">53 hoạt động</p>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/nt.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Nha Trang</p>
                            <p class="work">39 hoạt động</p>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="/tour" class="box">
                        <img src="{{ asset('images/hoian.jpg') }}" alt="Card image" class="card-img">
                        <div class="desc">
                            <p class="name">Hội An</p>
                            <p class="work">153 hoạt động</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="hr"></div>

<section>
    <div class="container-sm introduce">
        <div class="title">Bạn cứ vô tư khám phá, những thứ khác chúng tôi lo</div>
        <div class="container">
            <div class="row gx-8">
                <div class="col-4 item">
                    <i class="fa-brands fa-pagelines text-success"></i>
                    <div>
                        <b>Khám phá các địa điểm tham quan hàng đầu</b>
                        <p>Trải nghiệm những điều tuyệt vời nhất tại điểm đến với các địa điểm tham quan, tour và nhiều hoạt động khác</p>
                    </div>
                </div>
                <div class="col-4 item">
                    <i class="fa-regular fa-calendar-check text-success"></i>
                    <div>
                        <b>Nhanh chóng và linh hoạt</b>
                        <p>Đặt vé online trong vài phút với lựa chọn hủy miễn phí ở nhiều địa điểm quan tham</p>
                    </div>
                </div>
                <div class="col-4 item">
                    <i class="fa-solid fa-comment-medical text-success"></i>
                    <div>
                        <b>Được trợ giúp khi bạn cần</b>
                        <p>Đội ngũ Dịch vụ Khách hàng toàn cầu của Booking.com sẽ luôn có mặt để hỗ trợ bạn 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
