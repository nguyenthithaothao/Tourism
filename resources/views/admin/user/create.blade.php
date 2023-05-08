@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4">Thêm người dùng</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 p-0">
                <form method="POST" action="{{ route('admin.user.create') }}" enctype="multipart/form-data">
                    @csrf

                    @include('components.InputBase', [
                        'label' => 'Họ',
                        'id' => 'surname',
                        'type' => 'text',
                        'name' => 'surname',
                        'value' => old('surname'),
                    ])

                    @include('components.InputBase', [
                        'label' => 'Tên',
                        'id' => 'name',
                        'type' => 'text',
                        'name' => 'name',
                        'value' => old('name'),
                    ])

                    <div class="d-flex mb-4">
                        <div class="form-check">
                            <input class="form-check-input" value="1" type="radio" name="role"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Admin
                            </label>
                        </div>
                        <div class="form-check ml-2">
                            <input class="form-check-input" value="2" type="radio" name="role"
                                id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                User
                            </label>
                        </div>
                    </div>

                    @include('components.InputBase', [
                        'label' => 'Email',
                        'id' => 'email',
                        'type' => 'email',
                        'name' => 'email',
                        'value' => old('email'),
                    ])

                    @include('components.InputBase', [
                        'label' => 'Số điện thoại',
                        'id' => 'telephone',
                        'type' => 'tel',
                        'name' => 'telephone',
                        'value' => old('telephone'),
                        'pattren' => '[0-9]{3}-[0-9]{2}-[0-9]{3}',
                    ])

                    @include('components.InputBase', [
                        'label' => 'Mật khẩu',
                        'id' => 'password',
                        'type' => 'password',
                        'name' => 'password',
                        'value' => old('password'),
                    ])

                    @include('components.InputBase', [
                        'label' => 'Xác nhận mật khẩu',
                        'id' => 'password_confirmation',
                        'type' => 'password',
                        'name' => 'password_confirmation',
                        'value' => old('password_confirmation'),
                    ])

                    <input id="jsUploadInput" class="d-none" type="file" name="avatar" id="photo" accept="image/*"
                        class=" form-control-file @error('avatar') is-invalid @enderror">

                    <div class="d-flex align-item-center justify-content-end">
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <a href="{{ route('admin.user') }}" type="button" class="btn btn-danger ml-2">Quay lại</a>
                    </div>
                </form>
            </div>
            <div class="col-6 p-0">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img id="userAvatar"
                        src="{{  asset('images/avatar-admin.jpg') }}" alt="Avatar"
                        class="rounded-circle mb-2" width="200" height="200" />
                    <i id="jsUploadBtn" class="fa-solid fa-camera" style="font-size: 30px; cursor: pointer;"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
