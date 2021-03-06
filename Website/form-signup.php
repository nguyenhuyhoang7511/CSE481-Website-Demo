<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">
    <title>SignUp</title>
</head>

<body>
    <h3 class="text-center text-danger mt-5">
        <?php
        // Kiểm tra xem có tồn tại cái error hay không 
        if (isset($_GET['thongbao'])) {
            echo  $_GET['thongbao'];
        }
        ?>
    </h3>
    <div class="container my_container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <a href="#" style="text-decoration: none;"><img src="https://i.pinimg.com/originals/d5/9f/a6/d59fa6016093e9b57738fcbca1cd93d9.png" alt="" style="width: 90px; margin-right: 10px"><span style="font-size: 34px; color: #24a8d8;">2Hand Store</span></a>
                </div>
                <div class="row mt-4">
                    <h2 style="margin-bottom: 0;">
                        <b style="font-size: 1.5rem;">Bạn thích</b>
                    </h2>
                    <h1 style="margin-bottom: 16px;">
                        <b style="font-size: 3rem;">mua sắm?</b>
                    </h1>
                    <h2>
                        <b style="font-size: 1.5rem;">Bạn muốn tìm hiểu thông tin về đồ 2hand?</b>
                    </h2>
                    <h2 style="margin-top: 5px ;font-size: 1.25rem; line-height: 1.6">Chỉ với vài thao tác, hãy nhanh chóng đăng nhập để trải nghiệm và cảm nhận các tiện ích tuyệt vời của chúng tôi.</h2>
                </div>

            </div>

            <div class="col-md-6">
                <div class="container_right_form">
                    <form class="form_login form_signUp" action="process-register.php" method="POST">
                        <h6 class="text-center">Đăng Kí</h6>
                        <div class="mb-3">
                            <input name="name" type="text" placeholder="Họ và tên người dùng *" class="form-control" id="name" aria-describedby="emailHelp" required>
                        </div>

                        <div class="mb-3">
                            <input name="email" type="text" placeholder="Email người dùng*" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <input name="password" type="password" placeholder="Mật khẩu*" class="form-control" id="password" required="">
                        </div>

                        <div class="mb-3">
                            <input name="cpassword" type="password" placeholder="Xác nhận mật khẩu*" class="form-control" id="cpassword" required="">
                        </div>
                        <!-- <button type="submit" class="btn btn_dangnhap ">Đăng Kí</button> <br> -->
                        <!-- <a  id="js_btnDangKi" href="Sign_In.php" class="btn btn_dangnhap" style="color: #ffff;" onclick="alert('Đăng kí thành công')">
                            Đăng Kí
                        </a> -->
                        <!-- <input type="submit" name="btnRegister"  class="btn btn_dangnhap" style="color: #ffff;">Đăng Kí</input> -->
                        <!-- <input type="submit" name="btnRegister" class="btn btn-primary"> -->
                        <!-- <a class="link_quenMk" href="">Quên mật khẩu?</a> -->
                        <input type="submit" name="btnRegister" id="btnRegister" class="btn btn_dangnhap" style="color: #ffff;" value="Đăng kí">

                        <p class="dieukhoan_dịchvu">Bạn đồng ý với <span class="color_imp" style="cursor: pointer;">Điều khoản dịch vụ,Chính sách của chúng tôi</span></p>
                        <p class="link_dangki">Bạn đã có tài khoản? <a href="form-login.php" class="color_imp">Đăng nhập tại đây!</a></p>

                        <!-- Đoạn mã PHP này sẽ hiển thị nếu người dùng nhập sai thông tin tài khoản -->
                        <!-- <?php
                                // Kiểm tra xem có tồn tại cái error hay không 
                                if (isset($_GET['error'])) {
                                    echo "<h5 style = 'color:red'> {$_GET['error']} </h5>";
                                }
                                ?> -->
                    </form>
                </div>
            </div>

        </div>

        <div class="row my_row_2">
            <div class="col-md-6">
                <div class="container_left_btn">
                    <button type="submit" class="btn btn_store "><i class="fab fa-android"></i>Google Play</button> <br>
                    <button type="submit" class="btn btn_store "><i class="fab fa-apple"></i> App Store</button> <br> <br>
                </div>
                <p style="color: rgba(0, 0, 0, 0.54);">© 2022 2Hand Store. Đã đăng ký bản quyền.</p>

            </div>

            <div class="col-md-6">
                <div class="container_right_btn">
                    <a href="">Deutsch | English | <span>Tiếng Việt</span> | 中文 (简体)</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>