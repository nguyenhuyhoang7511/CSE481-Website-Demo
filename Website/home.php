<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style3.css">
    <title>Document</title>
</head>

<body>
    <!-- START HEADER -->

    <div class="container mt-3">
        <div class="main_header">
            <div class="main_header_logo" style="flex-basis: 10%;">
                <a href="index.html">
                    <img src="Images_product/logo.jpg" style="width: 120px" alt="">
                </a>
            </div>

            <div class="main_header_search ms-3 me-3" style="flex-basis: 40%;">
                <input type="text" name="" placeholder="Bạn muốn tìm kiếm sản phẩm nào ?" id="" style="width: 100%;">
                <div class="main_header_search_icon">
                    <i class="bi bi-search"></i>
                </div>
            </div>

            <div class="main_header_options ms-3" style="flex-basis: 50%;">
                <div class="main_header_options_dangnhap text-danger">
                    <h6>Xin chào,</h6>
                    <h6>
                        <!-- <input type="text" id="txtShowname" value=" -->
                        <?php
                        // Kiểm tra xem có tồn tại cái error hay không 
                        if (isset($_GET['showname'])) {
                            echo  $_GET['showname'];
                        }
                        ?>
                        <!-- "> -->

                    </h6>
                    <!-- <?php
                            // Bước 01: Kết nối Database Server
                            $conn = mysqli_connect('localhost', 'root', '', 'hahalolo_tour');
                            if (!$conn) {
                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                            }
                            // Bước 02: Thực hiện truy vấn
                            $sql = "SELECT * FROM db_nguoidung";

                            $result = mysqli_query($conn, $sql);

                            // Bước 03: Xử lý kết quả truy vấn
                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <h6><b> <?php echo $row['ten_nguoidung']; ?> </b></h6> 
                    <?php
                                }
                            }

                            // Bước 03: Đóng kết nối
                            mysqli_close($conn);
                    ?> -->
                </div>
                <div class="main_header_options_chatluong">
                    <i class="bi bi-stars"></i>
                    <p>Chất lượng</p>
                </div>

                <div class="main_header_options_vanchuyen">
                    <i class="bi bi-truck"></i>
                    <p>Vận chuyển</p>
                </div>

                <div class="main_header_options_doitra">
                    <i class="bi bi-coin"></i>
                    <p>Đổi trả</p>
                </div>

                <div class="main_header_options_hotro">
                    <i class="bi bi-headset"></i>
                    <p>Hỗ trợ 24/24</p>
                </div>

                <div class="main_header_options_giohang">
                    <i class="bi bi-cart-plus"></i>
                    <p>Giỏ hàng</p>
                </div>
                <div class="main_header_options_dangxuat">
                    <a href="form-login.php" style="text-decoration: none; color: black;">
                        <i class="bi bi-box-arrow-right"></i>
                        <p>Đăng xuất</p>
                    </a>
                </div>
            </div>
        </div>

    <div class="container-fluid  bg-danger  mt-3">
        <div class="container my_header_fluid d-flex justify-content-between">
            <div class="d-flex my_options_sanpham">
                <!-- <i class="bi bi-list"></i> -->
                <!-- <div class="dropdown"> -->
                <i class="bi bi-list " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      <!-- <i class=""></i> -->
                </i>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">Quần</button></li>
                    <li><button class="dropdown-item" type="button">Áo</button></li>
                    <li><button class="dropdown-item" type="button">Giày</button></li>
                    <li><button class="dropdown-item" type="button">Đồ gia dụng</button></li>
                    <li><button class="dropdown-item" type="button">Trang sức</button></li>

                </ul>
                <!-- </div> -->
                <p class="ms-3" style="margin: 0px;">Danh mục sản phẩm</p>
            </div>

            <div class="d-flex my_header_fluid_info">
                <!-- <i class="bi bi-chevron-right"></i> -->
                <p>FaceBook : 2Hand Store</p>
                <i class="bi bi-chevron-right"></i>
                <p>Hotline: 19001001</p>
                <i class="bi bi-chevron-right"></i>
                <p>Địa chỉ: Thanh Xuân - Hà Nội</p>
            </div>
        </div>
    </div>
    <!-- END HEADER -->

    <!-- START BODY -->
    <div class="container mt-3 d-flex justify-content-between align-items-center">
        <div class="body_location d-flex">
            <b><p><a href="index.php" style="text-decoration: none; color: black;">Trang Chủ</a></p></b>
        </div>
        <div class="body_search d-flex">
            <!-- <div>
                <p class="" style="margin: 0px; margin-top: 8px; margin-right: 12px;">Search</p>
            </div> -->
            <select class="form-select form-select-sm" aria-label="Default select example" style="height: 40px ;">
                <option selected>Sắp xếp theo</option>
                <option value="1">Từ thấp đến cao</option>
                <option value="2">Từ cao đến thấp</option>
                <option value="3">Bán chạy</option>
                <option value="4">Hàng mới về</option>
              </select>
        </div>
    </div>

    <!-- START CAROUSEL -->
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images_slideShow/img3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SALE SẬP SÀN NGÀY 3 /3</h5>
                        <p>Đặt hàng ngay hôm nay để có những ưu đãi tốt nhất !</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images_slideShow/img2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Khuyễn mãi lớn</h5>
                        <p>Đặt hàng ngay hôm nay để có những ưu đãi tốt nhất !</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images_slideShow/img3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Khuyễn mãi lớn</h5>
                        <p>Đặt hàng ngay hôm nay để có những ưu đãi tốt nhất !</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
        </div>
    </div>

    <!-- END CAROUSEL -->

    <!-- START CARD_PRODUCT -->
    <div class="container mt-5 justify-content-between" style="box-sizing: content-box">
        <!-- row-2 -->
        <div class="row">
            <div class="col">
                <div class="card" style="width: 19rem;">
                    <img src="images_sanpham/album1/ao1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm 1</h5>
                        <p class="card-text">Áo chống nhăn tốt, dễ giặt sạch, nhanh khô.Giặt tay hay giặt máy thoải mái không sợ ra màu, nhăn , mất form</p>
                        <div class="d-flex justify-content-between">
                            <span class="text-decoration-underline" style=" font-weight: 600; color: crimson;">115.000<sup>đ</sup></span>
                            <a href="Detail/sp1.php" class="btn btn-outline-danger">Xem thêm</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 19rem;">
                    <img src="images_sanpham/album1/ao4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm 2</h5>
                        <p class="card-text">Áo chống nhăn tốt, dễ giặt sạch, nhanh khô.Giặt tay hay giặt máy thoải mái không sợ ra màu, nhăn , mất form</p>
                        <div class="d-flex justify-content-between">
                            <span class="text-decoration-underline" style=" font-weight: 600; color: crimson;">130.000<sup>đ</sup></span>
                            <a href="Detail/sp2.php" class="btn btn-outline-danger">Xem thêm</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 19rem;">
                    <img src="images_sanpham/album1/ao5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm 3</h5>
                        <p class="card-text">Áo chống nhăn tốt, dễ giặt sạch, nhanh khô.Giặt tay hay giặt máy thoải mái không sợ ra màu, nhăn , mất form</p>
                        <div class="d-flex justify-content-between">
                            <span class="text-decoration-underline" style=" font-weight: 600; color: crimson;">110.000<sup>đ</sup></span>
                            <a href="Detail/sp3.php" class="btn btn-outline-danger">Xem thêm</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 19rem;">
                    <img src="images_sanpham/album1/jean1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm 4</h5>
                        <p class="card-text">Quần chống nhăn tốt, dễ giặt sạch, nhanh khô.Giặt tay hay giặt máy thoải mái không sợ ra màu, nhăn , mất form</p>
                        <div class="d-flex justify-content-between">
                            <span class="text-decoration-underline" style=" font-weight: 600; color: crimson;">125.000<sup>đ</sup></span>
                            <a href="Detail/sp4.php" class="btn btn-outline-danger">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'hahalolo_tour');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                $sql = "SELECT * FROM db_thongtintour";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = (mysqli_fetch_assoc($result))) {
                        $id_tour = $row['ma_tour'];
                ?>
                       <div class="col-md-3">
                            <div class="card" style="width: 19rem;">
                                <?php
                            
                            // Include the database configuration file
                            include 'dbConfig.php';

                            // Get images from the database
                            $query = $db->query("SELECT * FROM db_images WHERE ma_tour = '$id_tour'");

                            if($query->num_rows > 0){
                                while($row1 = $query->fetch_assoc()){
                                // $imageURL = './crud_admin/uploads/'.$row1["file_name"];
                                   $imageURL = './crud_admin/uploads/'.$row1["file_name"];
                            ?>

                                <img  src="<?php echo $imageURL; ?>" alt="" class="card-img-top" alt="..." />

                            <?php }
                            }else{ ?>
                                <p>No image(s) found...</p>
                            <?php } ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['loai_tour']; ?></h5>
                                    <p class="card-text" style="min-height: 115px"><?php echo $row['mo_ta']; ?></p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-decoration-underline" style=" font-weight: 600; color: crimson;"><?php echo $row['gia_tour']; ?><sup>đ</sup></span>
                                        <a href="giohang.html" class="btn btn-outline-danger">Xem thêm</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                <?php
                    }
                } else
                    header('location: index.php');
                mysqli_close($conn);
                ?>
        </div>
    </div>
    <!-- END CARD_PRODUCT -->

    <!-- END BODY -->


    <!-- START FOOTER -->
    <div class="container mt-5">
        <div style="border-bottom: solid 1px #c4c4c4;">
            <img src="Images_product/footer_thanhtoan.png" alt="" width="100%">

        </div>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Liên hệ chúng tôi qua mạng xã hội :</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" style="color: black;" class=" ms-3 bi bi-facebook"></a>
                    <a href="" style="color: black;" class=" ms-3 bi bi-twitter"></a>
                    <a href="" style="color: black;" class=" ms-3 bi bi-google"></a>
                    <a href="" style="color: black;" class=" ms-3 bi bi-instagram"></a>
                    <a href="" style="color: black;" class=" ms-3 bi bi-youtube"></a>

                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Công Ty
                            </h6>
                            <p>
                                Những quy tắc cam kết làm kim chỉ nam cho hệ thống kinh doanh, là phương tiện thúc đẩy sự quyết định của khách hàng (hoặc đối tác) lựa chọn sản phẩm của mình và chúng đem lại nhiều lợi ích và hiệu quả lớn trong việc bán hàng và chăm sóc khách hàng.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                CHÍNH SÁCH ƯU ĐÃI
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Chính sách vận chuyển</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Chính sách vận chuyển</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Chính sách thanh toán</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Chính sách bảo mật </a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                THÔNG TIN CỬA HÀNG
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Giới thiệu sản phẩm</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Quan điểm kinh doanh</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Đặt hàng online</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Hỗ trợ trực tuyến</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                HƯỚNG DẪN KHÁCH HÀNG
                            </h6>
                            <p><i class="fas fa-home me-3"></i> Hướng dẫn mua hàng tại cửa hàng</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i> Hướng dẫn mua hàng Online
                                <p><i class="fas fa-phone me-3"></i> Liêm hệ : 0356579021</p>
                                <p><i class="fas fa-print me-3"></i> nguyenhoang080721@gmail.com</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->


        </footer>
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #F8F9FA;">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Images -->
                <section class="">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/111.webp" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/112.webp" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/115.webp" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Images -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Đăng kí bản quyền:
                <a class="text-white" href="https://mdbootstrap.com/">2Hand Store</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>
    <!-- END FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>