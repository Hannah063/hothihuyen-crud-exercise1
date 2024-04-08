<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<div class="container">
    <h4 class="text-center mt-5">Thêm học sinh</h4>
    <form action="/student/create" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Tên học sinh</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Tên học sinh"
                required />
        </div>
        <div class="form-group">
            <label for="phone_number">Số điện thoại</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Số điện thoại"
                required />
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary text-center">Thêm vào</button>
        </div>
    </form>
</div>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
