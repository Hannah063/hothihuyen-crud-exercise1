<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<div class="container">
    <h4 class="text-center mt-5">Sửa học sinh</h4>
    <form action="/student/{{ $student->id }}/edit" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Tên học sinh</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Tên học sinh"
                value="{{ $student->name }}" required />
        </div>
        <div class="form-group">
            <label for="phone_number">Số điện thoại</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Số điện thoại"
                value="{{ $student->phone_number }}" required />
        </div>
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-primary text-center">Cập nhật</button>
        </div>
    </form>
</div>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
