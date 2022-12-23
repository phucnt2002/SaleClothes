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
	<title>DIRTYCOINS X LIL' WUYN CÚ BẮT TAY ĐẬM CHẤT VĂN HÓA ĐƯỜNG PHỐ</title>
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
    <title>DIRTYCOINS X LIL' WUYN CÚ BẮT TAY ĐẬM CHẤT VĂN HÓA ĐƯỜNG PHỐ</title>
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
<body>
    
 
</html>

</style>
<h2><i class="fas fa-star"></i> DIRTYCOINS X LIL' WUYN CÚ BẮT TAY ĐẬM CHẤT VĂN HÓA ĐƯỜNG PHỐ</h2>
<h5>Đây không chỉ là một dự án mang tính đột phá mà còn là bước ngoặt của DirtyCoins đối với các thiết kế mang tính ứng dụng cao. Sự hợp tác này mang đến nhiều điều thú vị cho các bạn trẻ yêu thích brand và chất âm nhạc máu lửa của Lil’Wuyn cũng như các tín đồ của dòng thời trang đường phố.</h5></br>
<div class="image">
    <img src="ảnh1.1.png" />
</div>
<h5>Trong bộ sưu tập lần này, DirtyCoins tôn vinh nguồn năng lượng máu lửa với các họa tiết in mới mang hơi thở hiện đại và đậm chất đường phố, được tôn lên bằng bảng màu sắc sống động khắc họa một cộng đồng Hip hop cháy hết mình với nghệ thuật. Ngoài ra, ‘lần bắt tay’ này có đa dạng từ loạt phụ kiện, quần shorts, áo vest, t-shirt cho đến hoodie - những items vốn là thế mạnh của DirtyCoins suốt những năm vừa qua.</h5></br>
<div class="image">
    <img src="ảnh2.2.png" />
</div>
<h5>Mang đến tính hiện đại, đậm chất văn hóa đường phố, toàn bộ sản phẩm trong bộ sưu tập đều được làm mới với những công nghệ, kỹ thuật độc quyền và mới nhất. Trong đó phải kể đến sản phẩm nổi bật Camo Hoodie lấy cảm hứng từ phong cách hiện đại pha lẫn old school của rapper Lil' Wuyn. Họa tiết camo được cách điệu từ logo chữ Y DirtyCoins với phối màu cơ bản được biến tấu, mô phỏng lại từ tinh thần Camo Woodland Jungle cùng chất máu lửa của nam rapper, được 'tô điểm' bởi những chi tiết đặc trưng của DirtyCoins. Hình in trên áo được áp dụng công nghệ in lụa thủ công. </h5></br>
<div class="image">
    <img src="ảnh3.3.png" />
</div>
<h5>Bên cạnh đó, một thiết kế gây chú ý là Monogram Vest, được lấy cảm hứng từ tinh thần máu lửa trong âm nhạc của rapper Lil' Wuyn cùng form dáng rộng, đường may tỉ mỉ. Áo được áp dụng kĩ thuật in tràn nguyên tấm. Túi hộp có nắp được may bằng chất liệu cotton twill (khaki) đứng form, ngoài ra được trang bị nhiều túi zip có nắp dán chắc chắn.</h5></br>
<div class="image">
    <img src="ảnh4.4.png" />
</div>
<h5>Thiết kế DirtyCoins x LilWuyn Dico Tonic Short lấy cảm hứng từ năng lượng tích cực đặc trưng trong âm nhạc của LW. Chất liệu chính bằng sợi tổng hợp (synthetic), đảm bảo được độ dày vừa phải nhưng vẫn đủ mềm để không gây khó chịu khi mặc. Hình in mặt trước quần được áp dụng công nghệ in lụa, trong đó có chi tiết in phồng tạo điểm nhấn cho sản phẩm.</h5></br>
<div class="image">
    <img src="ảnh5.5.png" />
</div>
<h5>Đối với DirtyCoins và Lil' Wuyn, đường phố không chỉ là nơi nuôi dưỡng những cảm hứng nghệ thuật; mà đó còn là nơi bắt đầu của nhiều câu chuyện. Những câu chuyện về nỗ lực, về sự cố gắng không ngừng nghỉ, về khát khao vượt lên chính mình. Và đây là một bộ sưu tập mà chúng tôi đem những câu chuyện đó để truyền lửa cho cả thế giới.</h5></br>
<h6>Khám phá bộ sưu tập <a href="#">tại đây</a></h6>
<div class="image">
    <img src="ảnh6.6.png" />
</div>   </body>
<!--------------------------------BÀI VIẾT LIÊN QUAN---------------------- -->
<hr  width="34%" align="center" /><!--đường kẻ ngăn cách giữa bài viết liên quan với ảnh trên -->
<h1>BÀI VIẾT LIÊN QUAN</h1>

<ul id="list-new">
    <div class="item"><!--sản phẩm 2 -->
        <img src="new2.jpg"width="345" height="345"  alt="">                   
        <div class="name" >7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET </div>
        <div class="name" >THU HÚT MỌI ÁNH</div>
    </div>  
    <div class="box-left" >
        <a href="/Web/AboutUs/7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET/7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET.php"><button>Xem thêm </button><!--nút mua hàng --></a>
    </div>   
    <div class="item"><!--sản phẩm 1 -->
        <img src="new3.jpg"width="345" height="345"  alt="">                   
        <div class="name">THÔNG TIN CHƯƠNG TRÌNH </div>
        <div class="name">THẺ THÀNH VIÊN DIRTYCOINS</div>
    </div>
    <div class="box-left" >
        <a href="/Web/AboutUs/THÔNG TIN CHƯƠNG TRÌNH/THÔNG TIN CHƯƠNG TRÌNH.php"><button>Xem thêm </button><!--nút mua hàng --></a>
    </div>       
</ul>
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

</style>

<style>

</style>