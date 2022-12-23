<?php
            session_start();
            if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
                unset($_SESSION['submit']);
                header('Location:index.php');
            }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script><!--link lấy icon -->
	<title>About Us</title>
  <link rel="shortcut icon" type="image/png" href="/Web/admin/product/uploads/avt3.png"/>
    <link rel="stylesheet" href="AboutUs.css" />
</head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
    <link rel="stylesheet" href="./login.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script><!--link lấy icon -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>About Us</title>
</head>
<!-----------------------HEARDER ----------------------------------------->
<header>
<a href="/Web/index.php"><img src="/Web/images/avt.png" class="logo" style="width:130px;"><!--LOGO --></a>
  <div id="menu" style="margin-top:10px;">
  <ul>
                        <li><a href="index.php">Trang chủ</a></li><!--Trang chủ -->
                        <li>
                            <a href="#">Áo</a><!--Top -->
                            <ul class="sub-menu">
                                <li><a href="thucdon.php?id_category=1">Áo khoác</a></li>
                                <li><a href="thucdon.php?id_category=2">Áo thun</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Quần</a><!--Bottom -->
                            <ul class="sub-menu">
                                <li><a href="thucdon.php?id_category=4">Quần dài</a></li>
                                <li><a href="thucdon.php?id_category=3">Quần ngắn</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Bộ sưu tập</a><!--Collection -->
                            <ul class="sub-menu">
                                <li><a href="thucdon_2.php?id_sanpham=1">One piece</a></li>
                                <li><a href="thucdon_2.php?id_sanpham=2">Spring of the Y</a></li>
                                <li><a href="thucdon_2.php?id_sanpham=3">Liliwyun</a></li>
                            </ul>
                        </li>
                        <li><a href="AboutUs/AboutUs.php">About us</a></li><!--About us -->
                    </ul>
                </div>
        
        <div class="other"><!--Other -->
            
            
            <div class="login"> 
                <?php
                
                if(isset($_SESSION['submit'])) {
                    $user_admin = $_SESSION['submit'];
                            if($user_admin == 'Admin_Chu') {
                                
                                echo '<a style="color:black;" href="">' . $_SESSION['submit'] . '</a>
                                <div class="logout">
                                <a href="/Web/admin/login.php"><i class="fas fa-user-edit"></i>Admin</a> <br>                            
                                <a href="/Web/index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                                                        }
                            else{
                                echo '<a style="color:black;" href="">' . $_SESSION['submit'] . '</a>
                                <div class="logout">
                                <a href="#"><i class="fas fa-exchange-alt"></i>Đổi mật khẩu</a> <br>                           
                                <a href="/Web/index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                                                        }
                } 
                else {
                             echo '<a href="/Web/login.php"">Đăng nhập</a>';
                                }
                ?>
                    
            </div>
            
            
            <li><a href="/Web/cart.php" style="text-decoration:none; " ><i class="fas fa-shopping-bag"></i></a> <?php
                        $cart = [];
                        if (isset($_COOKIE['cart'])) {
                            $json = $_COOKIE['cart'];
                            $cart = json_decode($json, true);
                        }
                        $count = 0;
                        foreach ($cart as $item) {
                            $count += $item['num']; // đếm tổng số item
                        }
                        ?>
                        <span><?= $count ?></span></li><!--icon GIỎ HÀNG -->
        </div>
        
        
</header>
<style>
    
    li{
        list-style: none;/* bỏ chấm tròn của Others*/
    }
    body{/* chỉnh màu background menu (màu ô chứa chữ ko thay đổi)*/
        background-color: white;
    }
    header{/* chỉnh menu*/
        display:flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 5%;
        margin-top:0px; 
        position:fixed; 
        top:0;
        left:0;
        right:0;
        background-color: #ffffff;
        z-index: 1;
        box-shadow: 2px 2px 2px rgba(241, 241, 241, 0.873);
        float: left;
    }



    /* ---------------chỉnh logo----------------*/
    header img{
        width:150px;
        cursor:pointer;
    }



    /* ---------------chỉnh other (search,shopping,user)----------------*/
    .other{
        display:flex;
    }
    .other >li{
        padding:0 12px;
    }
    .other >li:first-child{
        position:relative;
    }
    .other >li:first-child input{/* chỉnh ô tìm kiếm*/
        width:100%;/* chỉnh  độ dài ô tìm kiếm*/
        height:100%;/* chỉnh độ rộng ô tìm kiếm*/
        margin-top: -20px;
        margin-left: -20px;
        border:10;
    }
    .other >li:first-child i{
        position:absolute;
        right:10px;/* chỉnh vị trí  Icon search */
    }


    /* ---------------------------chỉnh Menu-------------------------------*/
    .login {
    padding: 0px;
    border: 1px solid rgb(196, 196, 196);
    border-radius: 3px;
    margin: 0 50px;
    position: relative;
    }
    .login:hover {
    box-shadow: 0px 0px 3px 0px grey;
    cursor: pointer;
    }
    .login a {
    padding: 15px;
    text-decoration: none;
    color: #676767;
    font-weight: 700;
    }
    .login:hover .logout{
    display: block;
    }
    .login .logout{
    display: none;
    position: absolute;
    top: 2.3rem;
    left: 0px;
    z-index: 10;
    width: 150%;
    border: 1px solid grey;
    border-radius: 5px;
    padding: 10px 0;
    }
    .login .logout a{
    color: black;
    font-weight: 500;
    border-radius: 5px;
    margin: 10px 0;
    }
    .login .logout a:hover{
    opacity: 0.8;
    }
    #menu {
        list-style:none;
        display: flex;
    }

    #menu ul{
        list-style-type: none;
        background:#ffffff;   /*  chỉnh màu ô chứa chữ */
        text-align: center;
    }
    #menu ul li{
        color:#0f0f0f;
        display:inline-table;
        width:120px;/* khoảng cách giữa các chữ trong menu */
        height:30px;/* khoảng cách giữa menu và banner*/
        line-height: 50px;/* khoảng cách giữa menu và thanh tìm kiếm*/
        position:relative;   /* chỉnh khung menu xuống thành 1 hàng dọc */
    
    }
    #menu ul li a{
        color:#060606;/* chỉnh màu chữ trên thanh menu */
        text-decoration: none;
        display:block;
        font-size:17px;/* chỉnh cỡ chữ trên thanh menu*/
    }
    #menu ul li a:hover{
        background:rgba(123, 123, 123, 0.262);/* chỉnh màu Ô lúc dê chuột vào */
        color:#333;/* chỉnh màu chữ trong Ô lúc dê chuột vào */
        
    }
    #menu ul li >.sub-menu{
        display: none;
        position: absolute;
        background-color:  #ffffff;/* chỉnh màu Ô đa cấp lúc dê chuột vào */
        z-index: 1;
        list-style: none;
    }

    #menu ul li:hover .sub-menu{
        display:block;
    }
</style>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./img/favicon (2).ico"
      type="image/x-icon"
    />
    <link rel="icon" href="../public/img/favicon (2).ico" type="image/x-icon" />
    <title>Degrey</title>
    <link rel="stylesheet" href="../libary/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="../public/css/intro.css" />
  </head>
  <body>

    <section class="banner">
      <div class="container">
        <div class="banner-image">
          <img src="../public/img/intro-banner.png" alt="" />
        </div>
      </div>
    </section>
    
<section class="address">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="intro-content " style="
    text-align: justify;
">
          <h1 style="
    text-align: center;
">Giới thiệu</h1>
          <p>Cái tên Degrey được tạo ra rất ngẫu hứng, xuất phát từ “Chuỗi ngày u buồn về sự nghiệp, tương lai trong quá khứ của chính mình” – theo lời chia sẻ của Degrey’s founder. Là một local brand mang khuynh hướng Á Đông, kết hợp giữa hai yếu tố truyền thống và hiện đại, Degrey luôn cố gắng mang đến những thông điệp văn hoá ý nghĩa qua từng đường nét thiết kế. Tiếp theo đó sự sang trọng, thanh lịch cũng là những yếu tố tạo nên một Degrey đầy sức hút, sự lựa chọn hoàn hảo dành cho các bạn trẻ yêu thích phong cách hoài cổ nhưng vẫn muốn thoát xác trong những bộ cánh mới mẻ hơn.</p>
          <p>Thành lập từ năm 2016 và được nhiều bạn trẻ biết đến qua những mẫu áo truyền thông, Degrey hiện đang từng bước khẳng định vị trí của mình trong bản đồ streetwear Việt Nam</p>
          <p>Hiện nay, Degrey vẫn đang tiếp tục hoàn thiện và phát triển về sản phẩm cũng như mở rộng nhiều phong cách thời trang.</p>
          <p>Degrey xin gửi lời cảm ơn đến tất cả những khách hàng đã, đang và sẽ ủng hộ Degrey cũng như Xoài thời gian qua và sắp tới. Cảm ơn rất nhiều !</p>
          <p>Sơ lược lịch sử DEGREY do DOSIIN - kênh media về thời trang và life-style, khai thác mảng văn hóa đường phố tại Việt</p>
         <div class="history">
          <iframe src="https://youtube.com/embed/H7vcKCjX-IE" allowfullscreen width="60%" & height="300px"></iframe>
         </div>
          <p><b>Một số dự án Degrey tham gia</b></p>
          <p>Degrey – Không chỉ là quần áo (Degrey x Koo) </p>
          <iframe src="https://youtube.com/embed/wnZWXRpGcZ4" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Không cần phải chạy theo xu hướng thị trường, thị hiếu của số đông. Cứ sáng tạo và tự do theo cách của mình muốn. Đó cũng chính là thông điệp của Koo và Degrey muốn gửi gắm cho các bạn thông qua sự kết hợp này.....</p>
          <p><b>Degrey - Sinh nhật vui vẻ Đạt G (Degrey x Đạt G)</b></p>
          <iframe src="https://youtube.com/embed/rO92dxA-Ftc" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Đánh dấu sinh nhật Đạt G, Degrey muốn tạo ra bst để dành cho các fan thân thương yêu mến Đạt G trong dịp đặc biệt này. Cũng là lời cảm ơn đặc biệt mà Degrey muốn gửi đến Đạt G và các bạn. Các bạn đã ủng hộ và chung vui cùng Đạt G....</p>
          <p><b>Degrey – Hơi thở Việt (Degrey x Biti’s Hunter)</b></p>
          <iframe src="https://youtube.com/embed/O6yvqvjuIgU" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Sản phẩm hợp tác hình ảnh giữa Degrey và Biti’s Hunter làm tăng hơi thở Việt. Sự kết hợp độc đáo giữa Degrey và Biti’s Hunter, hai thương hiệu Việt cùng chung tay góp phần xây dựng hình ảnh mang định hướng thời trang Việt Nam đến gần với các bạn trẻ ......</p>
          <p><b>Degrey – Mang thời trang đến gần underground (Degrey x Blacka)</b></p>
          <iframe src="https://youtube.com/embed/FXxF19jJwMk" allowfullscreen width="100%" & height="450px"></iframe>
          <iframe src="https://youtube.com/embed/gEJKVTKAhvE" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Với hầu hết ý tưởng từ chàng rapper Việt - Blacka - chiếc áo Tee DEGREY x BLACKA với hai phiên bản màu đen truyền thống và xanh neon. Được thiết kế bắt nguồn từ cuộc đời và sự nghiệp hiphop của chính anh, chiếc áo như một dấu ấn khẳng định con đường rapper 10 năm của Blacka gửi đến mọi người cũng như đứa con tinh thần “Anh đã từng yêu” mà anh vừa cho ra mắt gửi đến các fan đã dõi theo Blacka từ lúc “chập chững” cho đến tận bây giờ....</p>
          <p><b>Degrey – Foudation wind Jacket (Degrey x Dossin) </b></p>
          <iframe src="https://youtube.com/embed/jlLd9unvGss" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Sản phẩm được lấy cảm hứng từ album "Foundation Vol. 4" của rapper tài năng Basick, quán quân cuộc thi “Show Me The Money" mùa 4."Chúng ta luôn phải tuân theo quy luật của cuộc sống.Nhưng với thời trang thì KHÔNG.Chúng tôi thoải mái làm những điều khác biệt.VÌ VẬY CHÚNG TÔI TÌM ĐẾN NHAU".......</p>
          <p><b>Degrey – Make love Not war (Degrey x Dirty Coins)</b></p>
          <iframe src="https://youtube.com/embed/hZLzbjN3yYE" allowfullscreen width="100%" & height="450px"></iframe>
          <p>Degrey với các dự án đồng hành cùng Dirty coins không còn gì xa lạ đối với các bạn. Thông qua bst lần này, tụi mình muốn nhắn nhủ thông điệp thế giới cần tình yêu, hãy tạo yêu thương đừng gây chiến tranh.....</p>
          <h3>Hướng dẫn mua hàng và thanh toán tại Degrey</h3>
          <ul class="payment-methods">
            <li>Mua hàng offline - Phương thức giao hàng - Trả tiền mặt
              <ul>
                <li>Phương thức Giao hàng – Trả tiền mặt chỉ áp dụng đối với những khu vực DEGREY hỗ trợ giao nhận hoặc trả tiền mua hàng trực tiếp tại cửa hàng DEGREY
                </li>
                <li>Với phương thức thanh toán trực tiếp Quý khách có thể đặt hàng trên Website DEGREY.VN .
                </li>
                <li>Nhân viên chúng tôi sẽ tiến hành gọi xác nhận đơn hàng, xuất hàng cho Quý khách và xác nhận ngày giờ giao hàng với Quý khách sau khi xuất hàng.
                </li>
                <li>Quý khách có trách nhiệm thanh toán đầy đủ toàn bộ giá trị đơn hàng cho Nhân viên giao nhận hoặc Nhân viên bán hàng và chăm sóc khách hàng của DEGREY ngay khi hoàn tất kiểm tra hàng hóa và nhận Phiếu giao hàng kiêm phiếu xuất kho.Hoặc có thể thanh toán quẹt thẻ ATM, VISA, ví MOMO trực tiếp tại cửa hàng DEGREY. Quý khách thanh toán đúng số tiền trên Phiếu đã ghi, nếu có bất cứ thắc mắc nào Quý khách gọi lại cho DEGREY để được thông tin cụ thể hơn.</li>
              </ul>
            </li>
            <li>Mua hàng online - Phương thức thanh toán trước
              <ul>
                <li>Gọi điện để được tư vấn và đặt hàng online trực tiếp với bộ phận chăm sóc khách hàng của DEGREY qua số 0336311117
                </li>
                <li>
                  Khách hàng truy cập website: DEGREY.VN để mua hàng và hoàn thành thông tin đơn hàng.
                </li>
                <li>Chuyển tiền, chuyển khoản, thanh toán trực tiếp bằng tiền mặt hoặc qua thẻ tại các hệ thống ngân hàng hoặc trung tâm giao dịch của DEGREY</li>
              </ul>
            </li>
            <li>Mua hàng online - Phương thức (COD) nhận hàng thanh toán
              <ul>
                <li>Đối với  tất cả các đơn hàng được đặt hàng thành công với hình thức COD (nhận hàng thanh toán tại nhà), khách hàng sẽ được nhân viên của DEGREY liên hệ tư vấn xác nhận đơn hàng và tuỳ vào trường hợp để hướng dẫn khách hàng ĐẶT CỌC TRƯỚC từ 100.000đ – 500.000đ với đơn hàng > 02 triệu được nhân viên DEGREY thông báo cụ thể khi liên hệ. Giá trị đặt cọc sẽ được trừ trực tiếp vào giá trị sản phẩm,  khi nhận hàng bạn chỉ cần thanh toán số tiền còn lại.
                </li>
                <li>Hình thức đặt cọc linh hoạt, bạn có thể chuyển khoản qua các tài khoản của DEGREY cuối trang này, cũng có thể chuyển tiền qua các ví điện tử hoặc có thể gửi mã card điện thoại giá trị tương ứng tới Hotline của DEGREY.
                </li>
                <li>Ngay sau khi DEGREY xác nhận đã nhận được đặt cọc của quý khách hàng thành công, nhân viên DEGREY sẽ lên đơn hàng, test sản phẩm đóng gói cẩn thận và chuyển tới đơn vị vận chuyển như Giao hàng tiết kiệm, Grab, …chuyển tới quý khách hàng.</li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>

    </div>
     
    </div>
  </div>
</section>

</html>

<!--------------------FOOTER--------------------------- -->
<footer class="section-p1"><!--mục footer -->
    <div class="col">
        <h4>HỆ THỐNG CỬA HÀNG</h4><!--Hệ thông cửa hàng -->
        <p>Quận 10 - 561 Sư Vạn Hạnh, Phường 13.</p>
        <p>Quận Tân Bình - 136 Nguyễn Hồng Đào, Phường 14.</p>
        <p>Quận Gò Vấp - 41 Quang Trung, Phường 3.</p>
        <p>Đống Đa - 49-51 Hồ Đắc Di, Phường Nam Đồng.</p>
    </div> 
    <div class="col">
        <h4>THÔNG TIN LIÊN HỆ</h4><!--Thông tin liên hệ -->
        <p>Tuyển dụng:<a href ="liên kết "> link Website </a> </p>
        <p>Website:<a href ="liên kết "> link Website </a></p>
        <p>Liên hệ CSKH: support@<a href ="liên kết "> link Website </a></p>
        <p>For business: contact@<a href ="liên kết "> link Website </a></p>
    </div>
    <div class="col">
        <h4>FOLLOW US ON SOCIAL MEDIA</h4><!--Follow us on social media-->
        <li><i class="fa fa-facebook"></i></li>
        <li><i class="fa fa-instagram"></i></li>
        <li><i class="fa fa-youtube"></i></li>        
    </div>    
</footer>
<style>
    *{
    margin: 0;
    padding: 0;
}
i{/*  chỉnh icon ngôi sao */
    font-size:16px;
    text-align: center;
    padding-right: 10px;
}

h2{/*  chỉnh ô chứa chữ H2 */
text-align: center;
font-size:23px; 
padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
padding-right:343px;
padding-bottom:70px;
padding-top:100px;
}

h5{/*  chỉnh ô chứa chữ H5 */
    text-align: left;
    font-size:16px; 
    font-weight: 50;
    padding-left:340px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-top:10px;
    padding-bottom:18px;


    }

h6{/*  chỉnh ô chứa chữ H6 */
    text-align: left;
    font-size:17.5px; 
    font-weight: 600;
    text-decoration: underline;
    padding-left:355px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:10px;
    margin-top:-10px;/*  chỉnh khoảng cách so với chữ bên trên */
}
.image{/*  chỉnh ảnh trong mục body */
    align-items: center;
    text-align: center;
}



/*-----------------BÀI VIẾT LIÊN QUAN--------------------------*/


hr{/*  chỉnh thanh kẻ giữa bài viết liên quan với ảnh trên */
    margin-top:70px;/*  chỉnh khoảng cách so với chữ bên trên */padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    margin-left:313px;
}
h1{/*  chỉnh ô chứa chữ H1 */
    text-align: left;
    font-size:16px; 
    font-weight: 550;
    padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:18px;
    margin-top:15px;/*  chỉnh khoảng cách so với chữ bên trên */
}
#list-new {/*  chỉnh ảnh bài viết liên quan */
    font-size:10px;/*size chữ sản phẩm*/
    display: flex;
    list-style: none;
    justify-content: space-around;
    padding-left:190px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:317px;
    margin-top:40px;

}

#list-new .item .name {/*  chỉnh chữ bài viết liên quan */
    text-align: center;
    color:rgb(10, 10, 10);
    font-weight: bold;
    margin-top:20px;/*chỉnh khoảng cách từ tên so với sản phẩm*/
}


#list-new .box-left{
    text-align: center;
    margin-top:435px;/*chỉnh lên xuống nút xem thêm */
    margin-left:-490px;/*chỉnh trái phải nút xem thêm*/
    
}
#list-new .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}
#list-new .box-left button {/*nút buttom mua ngay*/
    font-size:12px;/*chỉnh size chữ*/
    width: 80px;/*chỉnh size dài bóng đen*/
    height: 30px;/*chỉnh size rộng bóng đen*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;/*chỉnh tốc độ chuyển màu*/
}


/*----------------FOOTER--------------------*/

footer{
    background:rgb(0, 0, 0);
    display:flex;
    margin-top:70px;
    justify-content: space-around;
    margin-bottom:0px;
    padding-bottom: 20px;   /*chỉnh size background đen */
    padding-left:150px;
    
}
footer.col{
    
    display:flex;
    flex-direction:column;
    align-items: flex-start;
    margin-top: 100p;
}
footer h4{   /*chỉnh size chữ H4*/
    color:rgb(255, 255, 255);
    font-size: 16px;
    padding-bottom:30px;
    margin-top:40px;
    font-weight: bold;
}
footer p{  /*chỉnh size chữ P*/
    color:rgb(255, 255, 255);
    font-size: 13px;
    text-decoration:none;
    margin-bottom:15px;

 
}
footer li{ /*chỉnh icon fb,instagram,youtube*/
    color:#fff;
    margin-top: 3px;
    font-weight: bold;
    
   
}
@media screen and  (max-width: 870px)  and (min-width:300px){
    body {
   width: 1500px;
    }
}
</style>

<style>

</style>