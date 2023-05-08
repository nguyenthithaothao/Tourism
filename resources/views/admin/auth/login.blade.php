@extends('layouts.not_header')

@section('content')
    <section class="vh-100 admin-login" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <form class="card-body p-5 text-center" method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <h3 class="mb-5">ADMIN LOGIN</h3>

                            <div class="form-outline mb-4">
                                <input type="email" value="{{ old('email') }}" name="email" id="email"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="email">Email</label>
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" value="{{ old('password') }}" name="password" id="password"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="password">Mật khẩu</label>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button class="btn btn-primary btn-lg btn-block" type="submit">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
