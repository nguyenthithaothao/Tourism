@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4">Địa điểm</h2>
        <a href="{{ route('admin.place.create') }}" type="button" class="btn btn-success">Thêm mới</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Hình ảnh</th>
                <th scope="col" class="text-center">Tên</th>
                <th scope="col" class="text-center">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($places as $place)
                <tr>
                    <td class="text-center" style="line-height: 50px;">{{ $place->id }}</td>
                    <td class="text-center" style="line-height: 50px;">
                        <img src="{{ asset($place->image) }}" class="rounded" width="80px" height="50px" />
                    </td>
                    <td class="text-center" style="line-height: 50px;">{{ $place->name }}</td>
                    <td class="text-center" style="line-height: 50px;">
                        <a href="{{ route('admin.place.edit', [$place->id]) }}" class="text-primary">Sửa</a>
                        <a href="#" class="text-danger ml-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-{{ $place->id }}">Xóa</a>
                    </td>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-{{ $place->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel-{{ $place->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('admin.place.delete', $place) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h3 class="modal-title text-danger" id="exampleModalLabel-{{ $place->id }}">Thông
                                            báo!</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Bạn có thực sự muốn xóa hay không?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info">ĐỒNG Ý</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $places->appends(request()->query())->links() !!}
    </div>
@endsection
