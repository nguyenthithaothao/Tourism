@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4">Thêm tour du lịch</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 p-0">
                <form method="POST" action="{{ route('admin.place.create') }}" enctype="multipart/form-data">
                    @csrf

                    @include('components.InputBase', [
                        'label' => 'Tên',
                        'id' => 'name',
                        'type' => 'text',
                        'name' => 'name',
                        'value' => old('name'),
                    ])

                    @include('components.fileUpload', [
                        'label' => 'Hình ảnh',
                        'id' => 'imagePlace',
                        'name' => 'image',
                    ])

                    <div class="d-flex align-item-center justify-content-end">
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <a href="{{ route('admin.place') }}" type="button" class="btn btn-danger ml-2">Quay lại</a>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <img id="showImage" width="200px" height="150px" class="rounded" />
            </div>
        </div>
    </div>
@endsection
