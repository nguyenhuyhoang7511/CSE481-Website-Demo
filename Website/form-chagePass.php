<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">
    <title>SignIn</title>
</head>

<body></body>
<div class="container my_container ">
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
                <form class="form_login" action="process-changepass.php" method="POST">
                    <h6 class="text-center">Thay đổi mật khẩu</h6>
                    <div class="mb-3">
                        <input name="txtUser" type="text" placeholder="Email hoặc số điện thoại*" class="form-control input_taikhoan" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group mb-3 input_taikhoan">
                        <input name="txtPass" type="password" value="" class=" form-control input_pass" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                        <!-- <div class="input-group-append "> -->
                        <span class="input-group-text btn_showpass" onclick="password_show_hide();">
                            <i class="fas fa-eye" id="show_eye"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                        <!-- </div> -->
                    </div>

                    <div class="input-group mb-3 input_taikhoan">
                        <input name="txtPasschange" type="password" value="" class=" form-control input_pass" id="new_password" placeholder="new password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                        <!-- <div class="input-group-append "> -->
                        <span class="input-group-text btn_showpass" onclick="password_show_hide();">
                            <i class="fas fa-eye" id="show_eye"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                        <!-- </div> -->
                    </div>

                    <?php
                    // Kiểm tra xem có tồn tại cái error hay không 
                    if (isset($_GET['error'])) {
                        echo "<p class = 'php_show_account' > {$_GET['error']} </p>";
                    }
                    ?>

                    <button name="btnchangepass" class="btn btn_dangnhap" style="color: #ffff;">
                        Đổi mật khẩu
                    </button>
                    <a class="link_quenMk" href="form-login.php">Quay lại đăng nhập</a>
                    <!-- Đoạn mã PHP này sẽ hiển thị nếu người dùng nhập sai thông tin tài khoản -->

                    <!-- <p class="link_dangki">Bạn chưa có tài khoản? <a href="Sign_up.php">Đăng ký tại đây!</a></p> -->
                </form>
            </div>
        </div>
    </div>


    <div class="row my_row_dangnhap">
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
<script src="js/show_passWord.js"></script>
</body>

</html>