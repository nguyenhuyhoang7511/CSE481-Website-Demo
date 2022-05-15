<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/style3.css">
    <title>Document</title>
</head>

<body>
    <!-- START NAVBAR -->
    <div class="container-fluid d-flex  justify-content-center" style="height: 75px; background-color: #fff;">
        <nav class="nav_main mt-4">
            <div class="nav_start" style="margin-top: -30px">
                <!-- <i style="font-size: 26px; color: black;" class="bi bi-activity"></i> -->
                <img width="100%" height="80px" src="https://i.pinimg.com/originals/d5/9f/a6/d59fa6016093e9b57738fcbca1cd93d9.png" alt="">
            </div>
            <div class="nav_center" style="margin-left: 220px;">
            </div>
            <div class="nav_end" style="margin-left: 150px;">
                <i style=" font-family: 800; color: black; font-size: 26px; margin-right: 15px;" class="bi bi-search"></i>
                <i style=" font-family: 800; color: black; font-size: 26px; margin-right: 15px;" class="bi bi-person"></i>
                <i style=" font-family: 800; color: black; font-size: 26px;" class="bi bi-bag"></i>

            </div>
        </nav>
    </div>

    <!-- END NAVBAR -->

    <!-- START SẢN PHẨM -->
    <div class="container mt-5 my_container">
        <div class="row my_row ms-5">
            <div class="col-md-5 my_container_carosel">
                <img src="../images_sanpham/album1/jean1.jpg" width="100%" alt="">
            </div>

            <div class="col-md-7 my_info_sanpham">
                <div style="margin-left: 130px;">
                    <div class="info_tieude mb-5">
                        <p class="btn btn-light mb-3" style="font-size: 22px; background-color: #ccc;">Thông tin chi tiết sản phẩm</p>
                        <p style="font-size: 50px;">Áo Thun</p>
                    </div>
                    <div class="info_danhgia mb-2" style="display: flex; ">
                        <i class="bi bi-star-fill me-3"></i>
                        <i class="bi bi-star-fill me-3"></i>
                        <i class="bi bi-star-fill me-3"></i>
                        <i class="bi bi-star-fill me-3"></i>
                        <i class="bi bi-star-half"></i>
                        <p style="margin-left: 12px;">132 lượt đánh giá</p>
                    </div>

                    <div class="info_mota mb-3">
                        <p style="color: #8E8E93;">Mô tả : Áo chống nhăn tốt, dễ giặt sạch, nhanh khô.Giặt tay hay giặt máy thoải mái không sợ ra màu, nhăn , mất form </p>
                    </div>

                    <div class="info_select mt-4" style="display: flex; margin-bottom: 20px;">
                        <div class="info_select_left">
                            <p style="font-weight: 500;">Chọn size :</p>
                            <div class="form-check form-check-inline" style="margin: 0;">
                                <button class="btn btn-outline-danger" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">XS</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin: 0;">
                                <button class="btn btn-outline-danger" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">S</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin: 0;">
                                <button class="btn btn-outline-danger" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">M</label>
                            </div>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>

                    <div class="info_buy mt-5" style="display: flex; margin-top: 16px;">
                        <div>
                            <p style="font-weight: 500; font-size: 24px; margin-bottom: 0px; margin-top: 8px; color: crimson; ">125.000đ</p>
                            <!-- <span class="" style="margin-right: 185px; font-weight: 600; ">1.750.000</span> <a href="#" class="btn btn-outline-danger">Mua ngay</a>  -->
                        </div>
                        <button style="margin-left: 24px; background-color: #EDA3B5; color: #fff;" type="button" class="btn ms-5 ">Mua ngay</button>
                        <button style="margin-left: 24px;" type="button" class="btn btn-outline-danger ms-5">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SẢN PHẨM -->

    <!-- START RATE -->
    <div class="container-fluid  mt-3" style="background-color: #fff;">
        <div style="display: flex; justify-content: space-around;">
            <div class="my_container_left mt-5">
                <p style="font-size: 28px; margin-left: 16px; font-weight: 500;">Đánh giá</p>
            </div>

            <div class="my_container_right mt-5">
                <div style="display: flex;" class="show_vote_start">
                    <p style="margin-right: 30px; font-size: 23px ; font-weight: 500;">130 Đánh giá </p> <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    <button type="button" style="background-color: #EDA3B5 ; border: #EDA3B5;" class="btn btn-danger">Viết bình luận của bạn</button>
                </div>


                <div class="user_comment mb-5" style="display: flex;">
                    <div class="user_comment_left">
                        <div style="margin-right: 40px ;">
                            <span style="font-weight: 500;">Nguyễn Văn Hiếu</span> <br>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <div class="user_comment_right">
                        <div>
                            <b>Chất lượng sản phẩm rất tốt</b>
                            <p>Sản phẩm đẹp và phù hợp với giá tiền </p>
                        </div>
                    </div>
                </div>
                <div class="user_comment" style="display: flex;">
                    <div class="user_comment_left">
                        <div style="margin-right: 40px ;">
                            <span style="font-weight: 500;">Nguyễn Xuân Đạt</span><br>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <div class="user_comment_right">
                        <div>
                            <b>Chất lượng sản phẩm rất tốt</b>
                            <p>Sản phẩm đẹp và rep tin nhắn nhanh </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-5 mb-5" style="display: flex; justify-content: space-around;">
            <p style="margin-left: 142px;"> <i class="bi bi-chevron-left"></i>Trước</p>
            <ul class="pagination" style="display: flex; justify-content: space-around;">

                <li class="page-item "><a class="page-link" href="#">1</a></li>

                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>

                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>

            </ul>
            <p style="margin-right: 140px;">Tiếp <i class="bi bi-chevron-right"></i></p>


        </div>
    </div>
    <!-- END RATE -->

    <!-- START FOOTER -->
    <div class="container mt-5">
        <div style="border-bottom: solid 1px #c4c4c4;">
            <img src="../Images_product/footer_thanhtoan.png" alt="" width="100%">

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