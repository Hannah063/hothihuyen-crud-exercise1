<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Quản lý học sinh</h1>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="table-responsive">
                    <p><a class="btn btn-primary" href="/student/create">Thêm mới</a></p>
                    <table id="listStudent" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên học sinh</th>
                                <th>Số điện thoại</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $key => $student)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->phone_number }}</td>
                                <td><a href="/student/{{ $student->id }}/edit" style="text-decoration: none">Sửa</a></td>
                                <td><a href="/student/{{ $student->id }}/delete" style="text-decoration: none">Xóa</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js" integrity="sha512-F0E+jKGaUC90odiinxkfeS3zm9uUT1/lpusNtgXboaMdA3QFMUez0pBmAeXGXtGxoGZg3bLmrkSkbK1quua4/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#listStudent").DataTable({
                    "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Tất cả"]],
                    "iDisplayLength": 10,
                    "oLanguage": {
                        "sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
                        "oPaginate": {
                            "sFirst": "<span class='glyphicon glyphicon-step-backward' aria-hidden='true'></span>",
                            "sLast": "<span class='glyphicon glyphicon-step-forward' aria-hidden='true'></span>",
                            "sNext": "<span class='glyphicon glyphicon-triangle-right' aria-hidden='true'></span>",
                            "sPrevious": "<span class='glyphicon glyphicon-triangle-left' aria-hidden='true'></span>"
                        },
                        "sEmptyTable": "Không có dữ liệu",
                        "sSearch": "Tìm kiếm:",
                        "sZeroRecords": "Không có dữ liệu",
                        "sInfo": "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ dòng được tìm thấy",
                        "sInfoEmpty" : "Không tìm thấy",
                        "sInfoFiltered": " (trong tổng số _MAX_ dòng)"
                    }
                });
            });
        </script>
    </div>
</body>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</html>
