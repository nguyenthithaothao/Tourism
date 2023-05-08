@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4">Sửa tour du lịch</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 p-0">
                <form method="POST" action="{{ route('admin.tour.store') }}" enctype="multipart/form-data">
                    @csrf

                    @include('components.InputBase', [
                        'label' => 'Tên',
                        'id' => 'name',
                        'type' => 'text',
                        'name' => 'name',
                        'value' => old('name'),
                    ])

                    @include('components.SelectBase', [
                        'label' => 'Địa điểm',
                        'id' => 'place_id',
                        'name' => 'place_id',
                        'value' => old('place_id'),
                        'options' => $places,
                    ])

                    @include('components.InputBase', [
                        'label' => 'Giá',
                        'id' => 'price',
                        'type' => 'text',
                        'name' => 'price',
                        'value' => old('price'),
                    ])

                    @include('components.TeraBase', [
                        'label' => 'Mô tả',
                        'id' => 'description',
                        'name' => 'description',
                        'value' => old('description'),
                    ])

                    @include('components.TeraBase', [
                        'label' => 'Nội dung',
                        'id' => 'content1',
                        'name' => 'content',
                        'value' => old('content'),
                        'row' => 8,
                    ])

                    @include('components.fileUpload', [
                        'label' => 'Ảnh chính',
                        'id' => 'imageTourMain',
                        'name' => 'image_main',
                        'value' => old('image_main'),
                    ])

                    <div class="container">
                        <div class="row">
                            <div class="col pl-0">
                                @include('components.fileUpload', [
                                    'label' => 'Ảnh phụ 1',
                                    'id' => 'imageTourSub1',
                                    'name' => 'image_sub_1',
                                    'value' => old('image_sub_1'),
                                ])
                            </div>
                            <div class="col pr-0">
                                @include('components.fileUpload', [
                                    'label' => 'Ảnh phụ 2',
                                    'id' => 'imageTourSub2',
                                    'name' => 'image_sub_2',
                                    'value' => old('image_sub_2'),
                                ])
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-item-center justify-content-end">
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <a href="{{ route('admin.tour') }}" type="button" class="btn btn-danger ml-2">Quay lại</a>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <img id="showImageMain" width="100%" height="300px" class="rounded" />
                <div class="row mt-4">
                    <div class="col-6">
                        <img id="showImageSub1" width="100%" height="150px" class="rounded" />
                    </div>
                    <div class="col-6">
                        <img id="showImageSub2" width="100%" height="150px" class="rounded" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
