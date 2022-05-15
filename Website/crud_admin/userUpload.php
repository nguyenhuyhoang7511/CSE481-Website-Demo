<?php
$connect = mysqli_connect("localhost", "root", "", "hahalolo_tour");
$query = "SELECT * FROM db_thongtintour ORDER BY ma_tour ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>HahaLoLo_Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <br /><br />
    <div class="container">
        <h3 class="text-center " style="font-size: 40px; font-weight: 700;"> <i class="bi bi-stack-overflow"></i> USER 2HAND STORE</h3>

        <br />

    </div>
    <div class="container">
        <div>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>   -->
                        <h4 class="modal-title">ĐIỀN DỮ LIỆU VÀO FORM</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="insert_form">
                            <label> Mã Sản Phẩm</label>
                            <input type="text" name="ma_tour" id="ma_tour" class="form-control" />
                            <br />
                            <label>Loại Sản Phẩm</label>
                            <select name="chu_tour" id="chu_tour" class="form-control">
                                <option value="Quần">Quần</option>
                                <option value="Áo">Áo</option>
                                <option value="Giày">Giày</option>
                                <option value="Đồ gia dụng">Đồ gia dụng</option>
                                <option value="Trang sức">Trang sức</option>
                            </select>
                            <br />
                            <label>Tên Sản Phẩm</label>
                            <input type="text" name="loai_tour" id="loai_tour" class="form-control" />
                            <br />
                            <label>Tình Trạng</label>
                            <input type="text" name="ten_tour" id="ten_tour" class="form-control" />
                            <br />
                            <label>Giá</label>
                            <input type="text" name="gia_tour" id="gia_tour" class="form-control" />
                            <br />
                            <label>Mô Tả</label>
                            <textarea type="text" name="mo_ta" id="mo_ta" class="form-control" cols="" rows=""></textarea>
                            <br />
                            <!-- <input type="hidden" name="employee_id" id="employee_id" />   -->
                            <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Đăng tải ảnh</h2>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                    <!-- <span aria-hidden="true">&times;</span> -->
                    <!-- </button> -->
                </div>
                <div class="modal-body">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="alert alert-success text-center text-danger fw-bold text-uppercase" role="alert">
                            <?php
                            // Kiểm tra xem có tồn tại cái error hay không 
                            if (isset($_GET['showTB'])) {

                                echo  $_GET['showTB'];
                            }
                            ?>
                        </div>
                        <div class="container_flex" style="display: flex;">
                            <!-- <input type="text" class=""   placeholder="Nhập mã tour" name="txt_matour"> -->


                            <select id="txt_matour" name="txt_matour">
                                <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                                <?php
                                // Bước 01: Kết nối Database Server
                                $conn = mysqli_connect('localhost', 'root', '', 'hahalolo_tour');
                                if (!$conn) {
                                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                }
                                // Bước 02: Thực hiện truy vấn
                                $sql = "SELECT * FROM db_thongtintour";

                                $result = mysqli_query($conn, $sql);

                                // Bước 03: Xử lý kết quả truy vấn
                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <option value="<?php echo $row['ma_tour']; ?>"><?php echo $row['ma_tour']; ?></option>
                                <?php
                                    }
                                }


                                ?>

                            </select>

                            <input class="form-control" type="file" name="files[]" multiple style="width: 546px; margin-left: 40px;">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="submit" value="Đăng Bài" style="margin-left: 30px; ">
                            <!-- <button type="button" class="btn btn-primary">Send message</button> -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="carousel slide" data-bs-ride="carousel" style="margin-top: 10px;">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="./img/no-img.png" class="d-block w-100" alt="...">
            </div>
            <?php
            // Include the database configuration file
            include 'dbConfig.php';

            // Get images from the database
            $query = $db->query("SELECT * FROM db_images img ,db_thongtintour tour WHERE img.ma_tour = tour.ma_tour  ");

            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $imageURL = 'uploads/' . $row["file_name"];
            ?>
                    <div class="carousel-item " data-bs-interval="2000">
                        <img src="<?php echo $imageURL; ?>" alt="" class="d-block w-100" alt="..." />
                    </div>
                <?php }
            } else { ?>
                <p>No image(s) found...</p>
            <?php } ?>
        </div>

    </div>


    <!-- <div class="container mb-5">
            <form method="post" action="upload.php" enctype="multipart/form-data" id="myform">
                <div class='preview'>
                    <img src="" id="img" width="100" height="100">
                </div>
                <div >
                    <input type="file" id="file" name="file" />
                    <input type="button" class="button"  name="submit" value="Upload" id="but_upload">
                </div>
            </form>
                      
      </div> -->

    <script>
        $(document).ready(function() {
            $('#add').click(function() {
                $('#insert').val("Insert");
                $('#insert_form')[0].reset();
            });
            $(document).on('click', '.edit_data', function() {
                var employee_id = $(this).attr("id");
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        employee_id: employee_id
                    },
                    dataType: "json",
                    success: function(data) { // HIỂN THỊ DỮ LIỆU LÊN FORM SỬA
                        $('#ma_tour').val(data.ma_tour);
                        $('#chu_tour').val(data.chu_tour);
                        $('#loai_tour').val(data.loai_tour);
                        $('#ten_tour').val(data.ten_tour);
                        $('#dia_diem').val(data.dia_diem);
                        $('#thoi_gian').val(data.thoi_gian);
                        $('#gia_tour').val(data.gia_tour);
                        $('#mo_ta').val(data.mo_ta);
                        $('#employee_id').val(data.id);
                        $('#insert').val("Update");
                        $('#add_data_Modal').modal('show');
                    }
                });
            });

            //  GỬI DỮ LIỆU ĐẾN INSERT.PHP
            $('#insert_form').on("submit", function(event) {
                event.preventDefault();
                if ($('#name').val() == "") {
                    alert("Name is required");
                } else if ($('#address').val() == '') {
                    alert("Address is required");
                } else if ($('#designation').val() == '') {
                    alert("Designation is required");
                } else if ($('#age').val() == '') {
                    alert("Age is required");
                } else {
                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        beforeSend: function() {
                            $('#insert').val("Inserting");
                        },
                        success: function(data) {
                            $('#insert_form')[0].reset();
                            $('#add_data_Modal').modal('hide');
                            $('#employee_table').html(data);
                        }
                    });
                }
            });

            //  GỬI DỮ LIỆU ĐẾN UPDATE.PHP
            $('#insert_form').on("submit", function(event) {
                event.preventDefault();
                if ($('#name').val() == "") {
                    alert("Name is required");
                } else if ($('#address').val() == '') {
                    alert("Address is required");
                } else if ($('#designation').val() == '') {
                    alert("Designation is required");
                } else if ($('#age').val() == '') {
                    alert("Age is required");
                } else {
                    $.ajax({
                        url: "update.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        beforeSend: function() {
                            $('#insert').val("Updating");
                        },
                        success: function(data) {
                            $('#insert_form')[0].reset();
                            $('#add_data_Modal').modal('hide');
                            $('#employee_table').html(data);
                        }
                    });
                }
            });


            // GỬI DỮ LIỆU ĐẾN SELECT.PHP
            $(document).on('click', '.view_data', function() {
                var employee_id = $(this).attr("id");
                if (employee_id != '') {
                    $.ajax({
                        url: "select.php",
                        method: "POST",
                        data: {
                            employee_id: employee_id
                        },
                        success: function(data) {
                            $('#employee_detail').html(data);
                            $('#dataModal').modal('show');
                        }
                    });
                }
            });

            // GỬI DỮ LIỆU ĐẾN DELETE.PHP
            $(document).on('click', '.delete_data', function() {
                var employee_id = $(this).attr("id");
                $.ajax({
                    url: "delete.php",
                    method: "POST",
                    data: {
                        employee_id: employee_id
                    },
                    success: function(data) { // HIỂN THỊ DỮ LIỆU LÊN FORM SỬA
                        $('#employee_table').html(data);
                    }
                });
            });


            // $("#but_upload").click(function(){

            // var fd = new FormData();
            // var files = $('#file')[0].files;

            // // Check file selected or not
            // if(files.length > 0 ){
            // fd.append('file',files[0]);

            // $.ajax({
            //      url: 'upload.php',
            //      type: 'post',
            //      data: fd,
            //      contentType: false,
            //      processData: false,
            //      success: function(response){
            //           if(response != 0){
            //                $("#img").attr("src",response); 
            //                $(".preview img").show(); // Display image element
            //           }else{
            //                alert('file not uploaded');
            //           }
            //      },
            // });
            // }else{
            // alert("Please select a file.");
            // }
            // });

        });
    </script>

</body>

</html>