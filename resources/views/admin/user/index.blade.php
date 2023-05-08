@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4">Người dùng</h2>
        <a href="{{ route('admin.user.create') }}" type="button" class="btn btn-success">Thêm mới</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Loại tài khoản</th>
                <th scope="col" class="text-center">Tên</th>
                <th scope="col" class="text-center">Họ đệm</th>
                <th scope="col" class="text-center">Liên hệ</th>
                <th scope="col" class="text-center">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @php
                    $isAdmin = $user->isAdmin() ? 'text-success' : '';
                @endphp
                <tr>
                    <td class="{{ $isAdmin }}">{{ $user->id }}</td>
                    <td class="text-center {{ $isAdmin }}">{{ $user->email }}</td>
                    <td class="text-center {{ $isAdmin }}">{{ $user->typeAccount }}</td>
                    <td class="text-center {{ $isAdmin }}">{{ $user->name }}</td>
                    <td class="text-center {{ $isAdmin }}">{{ $user->surname }}</td>
                    <td class="text-center {{ $isAdmin }}">{{ $user->telephone }}</td>
                    <td class="text-center {{ $isAdmin }}">
                        <a href="{{ route('admin.user.edit', [$user]) }}" class="text-primary">Sửa</a>
                        <a href="#" class="text-danger ml-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-{{ $user->id }}">Xóa</a>
                    </td>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-{{ $user->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel-{{ $user->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('admin.user.delete', [$user]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h3 class="modal-title text-danger" id="exampleModalLabel-{{ $user->id }}">
                                            Thông
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
        {!! $users->appends(request()->query())->links() !!}
    </div>
@endsection
