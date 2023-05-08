<!doctype html>
<html lang="en">

<head>
    <title>ADMIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- fortawesome -->
    <link href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="icon"
        href="https://cf.bstatic.com/static/img/favicon-new-32/40749a316c45e239a7149b6711ea4c48d10f8d89.ico"
        sizes="any">
    <link rel="icon" href="https://cf.bstatic.com/static/img/favicon/9ca83ba2a5a3293ff07452cb24949a5843af4592.svg"
        type="image/svg+xml">

    <script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
</head>

<body>
    @php
        $tab = $tab ?? null;
    @endphp
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <img src="{{ asset('images/avatar-admin.jpg') }}" class="img logo rounded-circle mb-5" />
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="{{ route('admin.user') }}" class="{{ $tab === 'user' ? 'text-success' : null }}">
                            <i class="fa-solid fa-user"></i>
                            &nbsp;&nbsp;Người Dùng
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.place') }}" class="{{ $tab === 'place' ? 'text-success' : null }}">
                            <i class="fa-solid fa-location-dot"></i>
                            &nbsp;&nbsp;Địa điểm
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.tour') }}" class="{{ $tab === 'tour' ? 'text-success' : null }}">
                            <i class="fa-solid fa-car-side"></i>
                            &nbsp;&nbsp;Tour
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.review') }}" class="{{ $tab === 'review' ? 'text-success' : null }}">
                            <i class="fa-solid fa-comments"></i>
                            &nbsp;&nbsp;Bình luận
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.logout') }}" class="text-danger">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            &nbsp;&nbsp;Đăng xuất
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('js/admin/app.js') }}"></script>
</body>

</html>
