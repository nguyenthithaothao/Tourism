@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-4">Bình luận</h2>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Người dùng</th>
                <th scope="col" class="text-center">Địa điểm</th>
                <th scope="col" style="width: 150px" class="text-center">Sao</th>
                <th scope="col" class="text-center">Bình luận</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td class="text-center">{{ $review->id }}</td>
                    <td class="text-center">{{ $review?->user?->name }}</td>
                    <td class="text-center">{{ $review->tour->name }}</td>
                    <td class="text-center">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fa-solid fa-star {{ $i < $review->rating ? "text-warning" : null }}"></i>
                        @endfor
                    </td>
                    <td class="text-center">{{ $review->comment }}</td>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $reviews->appends(request()->query())->links() !!}
    </div>
@endsection
