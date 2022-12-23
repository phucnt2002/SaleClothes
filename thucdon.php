<?php
            session_start();
            if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
                unset($_SESSION['submit']);
                header('Location:index.php');
            }
?>
<?php require_once('database/dbhelper.php')?>
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
  <link rel="shortcut icon" type="image/png" href="/Web/admin/product/uploads/avt3.png"/>
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script><!--link lấy icon -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Danh mục sản phẩm</title>
    
</head>
<!-----------------------HEARDER ----------------------------------------->
<header>
        <a href="/Web/index.php">
            <img src="/Web/images/avt.png" class="logo" style="width:130px;"><!--LOGO -->
        </a><!--LOGO -->
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
                                <a href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                                                        }
                            else{
                                echo '<a style="color:black;" href="">' . $_SESSION['submit'] . '</a>
                                <div class="logout">
                                <a href="#"><i class="fas fa-exchange-alt"></i>Đổi mật khẩu</a> <br>                           
                                <a href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                                                        }
                } 
                else {
                             echo '<a href="login.php"">Đăng nhập</a>';
                                }
                ?>
                    
            </div>
            
            
            <li><a href="cart.php" style="text-decoration:none; " ><i class="fas fa-shopping-bag"></i></a> <?php
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
<main>
    <div class="container">
        <div style="padding-top: 100px;" id="ant-layout">
        <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm đồ khác">
                </form>
            </section>
        </div>
        <!-- END LAYOUT  -->
        <section class="main">
            <?php
            
            //switch
            if (isset($_GET['id_category'])) {
                $id_category = trim(strip_tags($_GET['id_category']));
            } else {
                $id_category = 0;
            }
            ?>
            <section class="recently">
                <div class="title">
                    <?php
                    $sql = "select * from category where id=$id_category";
                    $name = executeResult($sql);
                    foreach ($name as $ten) {
                        echo '<h1>' . $ten['name'] . '</h1>';
                    }
                    ?>
                </div>
                <div class="product-recently">
                    <div class="row">
                        <?php
                        $sql = "select * from product where id_category=$id_category";
                        $productList = executeResult($sql);
                        foreach ($productList as $item) {
                            echo '
                                <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img class="thumbnail" src="admin/product/' . $item['thumbnail'] . '" alt="">
                                        <div class="title">
                                            <p>' . $item['title'] . '</p>
                                        </div>
                                        <div class="price">
                                            <span>' . number_format($item['price'], 0, ',', '.') . ' VNĐ</span>
                                        </div>
                                        <div class="more">
                                            <div class="star">
                                                <img src="images/icon/icon-star.svg" alt="">
                                                <span>4.9</span>
                                            </div>
                                            <div class="time">
                                                <img src="images/icon/icon-clock.svg" alt="">
                                                <span>99 comment</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                ';
                        }
                        ?>
                        <?php
                        if (isset($_GET['search'])) {
                            $search = $_GET['search'];
                            $sql = "SELECT * from product where title like '%$search%'";
                            $listSearch = executeResult($sql);
                            foreach ($listSearch as $item) {
                                echo '
                                <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img class="thumbnail" src="admin/product/' . $item['thumbnail'] . '" alt="">
                                        <div class="title">
                                            <p>' . $item['title'] . '</p>
                                        </div>
                                        <div class="price">
                                            <span>' . number_format($item['price'], 0, ',', '.') . ' VNĐ</span>
                                        </div>
                                        <div class="more">
                                            <div class="star">
                                                <img src="images/icon/icon-star.svg" alt="">
                                                <span>4.6</span>
                                            </div>
                                            <div class="time">
                                                <img src="images/icon/icon-clock.svg" alt="">
                                                <span>15 comment</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                ';
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <style>

        section.main section.recently .title h1 {
            border-bottom: 1px solid rgb(35, 54, 30);
        }
        body {
  margin: 0px;
  padding: 0px;
  font-family: SanomatGrabApp, -apple-system, BlinkMacSystemFont, Segoe UI,
    PingFang SC, Hiragino Sans GB, Microsoft YaHei, Helvetica Neue, Helvetica,
    Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
}
#wrapper {
  width: 100%;
  margin: 0 auto;
}
#wrapper header {
  width: 100%;
  margin: 0px auto;
  /* background-color: rgb(170, 255, 227); */
  padding: 10px 0;
}
.container{
    position: relative;
    
    width: 100%;
    margin: 80px auto 30px;
}
#wrapper header .container {
  width: 90%;
  margin: 0px auto;
  /* display: flex; */
  /* justify-content: space-between;
  align-items: center; */
  display: grid;
  grid-template-columns: 20% auto auto;
}
header section.logo {
  display: flex;
  align-items: center;
}
header section.logo a img {
  width: 60%;
}
#wrapper header .container nav {
  text-align: left;
}
#wrapper header .container nav ul {
  display: flex;
}
#wrapper header .container nav ul li {
  padding: 10px;
  list-style: none;
}
#wrapper header .container nav ul li a {
  text-decoration: none;
  color: rgb(43, 38, 38);
  padding: 10px;
  /* background-color: #f7f7f7; */
  text-transform: uppercase;
  font-weight: 700;
  font-family: Muli, Futura, Helvetica, Arial, sans-serif;
  position: relative;
}
#wrapper header .container nav ul li a::after {
  content: "";
  position: absolute;
  bottom: 10px;
  left: 0px;
  height: 3px;
  width: 100%;
  background-color: #00b14f;
  display: none;
}
#wrapper header .container nav ul li a:hover:after {
  display: block;
}

  /* MENU CON - CHA  */
#wrapper header .container nav ul li.nav-cha{
  position: relative;
  transition: all 0.4s;

}
#wrapper header .container nav ul li ul{
  position: absolute;
  display: flex;
  flex-flow: column;
  left: 0;
  top: 35px;
  width: 150%;
  background-color: rgb(255, 255, 255);
  box-shadow: 0px 0px 5px 0px rgb(212, 212, 212);
  z-index: 100;
  padding: 0;
  border-radius: 5px;
}
#wrapper header .container nav ul li ul li{
  text-align: center;
  padding: 10px 0px;
  display: none;
  transition: all 0.4s;

}
#wrapper header .container nav ul li ul li a{
  text-decoration: none;
  margin: 10px 0;
  color: black;
  font-weight: bold;
}
#wrapper header .container nav ul li.nav-cha:hover ul li{
  display: block;
}
  /* MENU CON - CHA  */

#wrapper header .container section.menu-right {
  display: flex;
  align-items: center;
}
#wrapper header .container section.menu-right .cart {
  padding: 5px;
  border: 1px solid rgb(196, 196, 196);
  border-radius: 3px;
  margin: 0 10px;
  position: relative;
}
#wrapper header .container section.menu-right .cart span {
  position: absolute;
  top: 0px;
  right: 0;
  font-weight: 500;
  color: rgb(122, 115, 115);
}
#wrapper header .container section.menu-right .cart:hover {
  box-shadow: 0px 0px 3px 0px grey;
  cursor: pointer;
}
#wrapper header .container section.menu-right .cart:hover .history {
  opacity: 1;
}
#wrapper header .container section.menu-right .cart a {
  padding: 5px;
  text-decoration: none;
}
#wrapper header .container section.menu-right .cart .history {
  transition: all 0.5s;
  opacity: 0;
  margin-top: 0.7rem;
  display: flex;
  text-align: center;
  flex-flow: column;
  padding: 5px 0;
  border-radius: 10%;
  width: 100px;
  position: absolute;
  left: -75%;
  top: 1.3rem;
  z-index: 10;
}
#wrapper header .container section.menu-right .cart .history a {
  font-weight: 600;
  color: black;
}
#wrapper header .container section.menu-right .cart .history a:hover {
  color: rgb(41, 39, 39);
}
#wrapper header .container section.menu-right .login {
  padding: 7px;
  border: 1px solid rgb(196, 196, 196);
  border-radius: 3px;
  margin: 0 10px;
  position: relative;
}
#wrapper header .container section.menu-right .login:hover {
  box-shadow: 0px 0px 3px 0px grey;
  cursor: pointer;
}
#wrapper header .container section.menu-right .login a {
  padding: 5px;
  text-decoration: none;
  color: #676767;
  font-weight: 500;
}
#wrapper header .container section.menu-right .login:hover .logout{
  display: block;
}
#wrapper header .container section.menu-right .login .logout{
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
#wrapper header .container section.menu-right .login .logout a{
  color: black;
  font-weight: 500;
  border-radius: 5px;
  margin: 10px 0;
}
#wrapper header .container section.menu-right .login .logout a:hover{
opacity: 0.8;
}
/* END HEADER  */
main .container {
  width: 90%;
  margin: 0px auto;
}
main section.search-quan {
  width: 100%;
  margin: 0px auto;
  position: relative;
  display: flex;
  justify-content: center;
}
main section.search-quan i {
  position: absolute;
  left: 2%;
  top: 50%;
  transform: translateY(-50%);
  color: #676767;
}
main section.search-quan form{
  width: 100%;
}
main section.search-quan input {
  width: 90%;
  padding: 15px 50px;
  border-radius: 10px;
  outline: 0;
  border: 0;
  background-color: #f7f7f7;
}
/* END MAIN TOP  */
main #ant-layout section.main-layout {
  padding: 2rem 0;
  margin: 0px auto;
  width: 100%;
}
main #ant-layout section.main-layout .row {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto;
  grid-column-gap: 10px;
}
main #ant-layout section.main-layout .row .box a {
  text-decoration: none;
}
main #ant-layout section.main-layout .row .box:hover {
  filter: drop-shadow(8px 5px 10px gray);
}
main #ant-layout section.main-layout .row .box {
  position: relative;
}
main #ant-layout section.main-layout .row .box p {
  position: absolute;
  z-index: 2;
  left: 50%;
  top: 25%;
  transform: translateX(-50%);
  color: white;
  font-weight: bold;
  font-size: 18px;
}
main #ant-layout section.main-layout .row .box .bg {
  background-color: rgba(0, 0, 0, 0.4);
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  z-index: 1;
  display: block;
  border-radius: 5px;
}
main #ant-layout section.main-layout .row img {
  width: 100%;
  height: 100%;
  border-radius: 5px;
  /* filter:drop-shadow(8px 5px 10px gray); */
}
.bg-grey {
  background-color: #f7f7f7;
  height: 10px;
  border-radius: 3px;
}
/* <!-- END LAYOUT  --> */

section.main {
  padding: 2rem 0;
  width: 100%;
  margin: 0px auto;
}
section.main a {
  text-decoration: none;
}
section.main section.recently {
  padding-bottom: 1rem;
}
section.main section.recently .link a {
  text-decoration: none;
  color: black;
  font-size: 20px;
}
section.main section.recently .title h1 {
  font-size: 35px;
  margin: 0px;
  padding: 0px;
  color: black;
}
section.main section.recently .product-recently {
  padding-top: 2rem;
}
section.main section.recently .product-recently .row {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-column-gap: 30px;
  grid-row-gap: 30px;
}

section.main section.recently .product-recently .row .col img {
  width: 100%;
  border-radius: 10px;
}
section.main section.recently .product-recently .row .col img.thumbnail {
  border: 1px solid rgb(76, 78, 85);
  transition: 0.1s;
}
section.main section.recently .product-recently .row .col img.thumbnail:hover {
  box-shadow: 0px 0px 5px 0px grey;
}
section.main section.recently .product-recently .row .col .title p {
  font-size: 20px;
  font-weight: 600;
  padding: 0px;
  margin: 5px 0;
  color: black;
  font-family: "Encode Sans SC", sans-serif;
}
section.main section.recently .product-recently .row .col .price span {
  padding: 10px 0;
  color: #676767;
  font-size: 20px;
  font-weight: 600;
  color: rgba(207, 16, 16, 0.815);
  font-family: "Bebas Neue", cursive;
}
section.main section.recently .product-recently .row .col .dish span {
  padding: 10px 0;
  color: #676767;
}

section.main section.recently .product-recently .row .col .more {
  display: flex;
  color: #676767;
  padding: 5px 0;
  font-size: 18px;
}
section.main section.recently .product-recently .row .col .more .star {
  display: flex;
  align-items: center;
  justify-content: center;
}

section.main section.recently .product-recently .row .col .more .star img {
  width: 25px;
  height: 25px;
}
section.main section.recently .product-recently .row .col .more .time {
  display: flex;
  padding: 0 10px;
}
section.main section.recently .product-recently .row .col .more .time img {
  width: 24px;
  height: 24px;
}
/* end mon ngon gần bạn  */

section.main section.restaurants {
  padding: 3rem 0;
}

section.main section.restaurants .link a {
  text-decoration: none;
  color: black;
  font-size: 20px;
}
section.main section.restaurants .title h1 {
  font-size: 35px;
  margin: 0px;
  padding: 0px;
  color: black;
}
section.main section.restaurants .title h1 span {
  color: green;
}
section.main section.restaurants .product-restaurants {
  padding-top: 2rem;
}
section.main section.restaurants .product-restaurants .row {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-column-gap: 30px;
  grid-row-gap: 30px;
}
section.main section.restaurants .product-restaurants .row .col img {
  width: 100%;
  border-radius: 10px;
}
section.main section.restaurants .product-restaurants .row .col img.thumbnail {
  border: 1px solid rgb(76, 78, 85);
  transition: 0.1s;
}
section.main
  section.restaurants
  .product-restaurants
  .row
  .col
  img.thumbnail:hover {
  box-shadow: 0px 0px 5px 0px grey;
}

section.main section.restaurants .product-restaurants .row .col .title p {
  font-size: 20px;
  font-weight: 600;
  padding: 0px;
  margin: 5px 0;
  color: rgb(43, 31, 31);
  font-family: "Encode Sans SC", sans-serif;
}
@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@500;600;700&display=swap");

section.main section.restaurants .product-restaurants .row .col .price span {
  padding: 10px 0;
  color: #676767;
  font-size: 20px;
  font-weight: 600;
  color: rgba(207, 16, 16, 0.815);
  font-family: "Bebas Neue", cursive;
}

section.main section.restaurants .product-restaurants .row .col .more {
  display: flex;
  color: #676767;
  padding: 5px 0;
  font-size: 18px;
}
section.main section.restaurants .product-restaurants .row .col .more .star {
  display: flex;
  align-items: center;
  justify-content: center;
}

section.main
  section.restaurants
  .product-restaurants
  .row
  .col
  .more
  .star
  img {
  width: 25px;
  height: 25px;
}
section.main section.restaurants .product-restaurants .row .col .more .time {
  display: flex;
  padding: 0 10px;
}
section.main
  section.restaurants
  .product-restaurants
  .row
  .col
  .more
  .time
  img {
  width: 24px;
  height: 24px;
}
.pagination{
  margin: 0px auto;
  padding-top: 2rem;
}
.pagination ul{
  display: flex;
  list-style: none;
  /* justify-content: center; */
}
.pagination ul li{
  background-color: rgb(0, 124, 29);
  margin: 0px 5px;
  border-radius: 2px;
  padding: 5px;
}
.pagination ul li a{
  padding: 20px 10px;
  color: white;
  font-weight: 500;
}
/* end main  */
footer {
  background-color: #00B14C;
  width: 100%;
  margin: 0px auto;
  margin-top: 1rem;
}
footer .container {
  width: 90%;
  margin: 0px auto;
  display: flex;
  flex-flow: column;
}
footer .container .logo {
  padding: 20px 0;
  border-bottom: 1px solid white;
} 
footer .container .link {
  display: grid;
  grid-template-columns: auto auto auto auto;
  padding: 30px 0;
  border-bottom: 1px solid white;
}
footer .container .link .col a:hover{
  cursor: pointer;
  color: rgb(224, 247, 222);
}
footer .container .link .col a{
  color: white;
  font-weight: bold;
  text-decoration: none;
  padding: 10px 0;
  font-family: "Encode Sans SC", sans-serif;
}
footer .container .link .icon a{
  padding: 10px 10px;
  color: white;
  font-weight: bold;
  text-decoration: none;
}
footer .container .link .icon a i{
  font-size: 40px;
}
footer .container .link .col {
  display: flex;
  flex-flow: column;
}
footer .container .link .icon {
  display: flex;
}
footer .container .bottom{
  padding: 20px 0;
}





*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    
}
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
    height:150%;/* chỉnh độ rộng ô tìm kiếm*/
    margin-top: -20px;
    margin-left: -20px;
    border:10;
}
.other >li:first-child i{
    position:absolute;
    right:10px;/* chỉnh vị trí  Icon search */
}


/* ---------------------------chỉnh Menu-------------------------------*/
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



/* ------------------------Banner one piece------------------------------*/
#banner1 {
    width: 100%;
    
    background-image :url("banner onepiece.png");
    background-size:cover;
    height: 680px;/*chỉnh size banner*/
    margin-top:70px;
    display: flex;
    padding:0px 133px;
    position:relative;
}
#banner1 .box-left ,#banner .box-right {
    width: 50%;
}


#banner1 .box-left button {/*nút buttom mua ngay*/
    font-size:20px;/*chỉnh size chữ*/
    width: 170px;/*chỉnh size dài bóng đen*/
    height: 45px;/*chỉnh size rộng bóng đen*/
    margin-top:320px;/*chỉnh vị trí buttom lên xuống*/
    margin-left:-60px;/*chỉnh vị trí buttom trái phải*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;/*chỉnh tốc độ chuyển màu*/
}
#banner1 .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}



/* ------------------------NEW ARRIVALS------------------------------*/
#wp-products {/*căn nguyên lish new arrival và sản phẩm */
    padding-top:130px;/*cách banner trên*/
    padding-bottom: 78px;
    padding-left:0px;
    padding-right:0px;/*căn phải với web*/
}

#wp-products h2 {
    text-align: center;
    margin-bottom: 76px;/*căn trên so với chữ new arrival*/
    font-size:5x;/*size chữ New Arrival*/
    color:black;
    margin-left:40px;
}


#list-products {
    font-size:17px;/*size chữ sản phẩm*/
    display: flex;
    list-style: none;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}

#list-products .item {
    width: 100%px;/*căn trái phải của hình ảnh so với lề*/
    height: 0px;/*chỉnh khung border sau ảnh*/
    background:#fafafa;
    border-radius: 0px;
    margin-bottom: 460px;/*chỉnh khoảng cách sản phẩm trên so với sản phẩm dưới*/
}


#list-products .item .name {
    text-align: center;
    color:rgb(10, 10, 10);
    font-weight: bold;
    margin-top:0px;/*chỉnh khoảng cách từ tên so với sản phẩm*/
}

#list-products .item .price {
    text-align: center;
    color:#090909;
    font-weight: bold;
    margin-top:0px;/*chỉnh khoảng cách từ giá tiền so với tên sản phẩm*/
}


.list-page {
    width: 50%;
    margin:0px auto;
}

.list-page {
    display: flex;
    list-style: none;
    justify-content: center;
    align-items: center;
}


/* ------------------------Banner SPRING OF THE Y------------------------------*/
#banner2 {/* banner rồng*/
    width: 100%;
    background-image :url("banner rồng2.jpg");
    background-size:cover;
    height: 710px;/*chỉnh size banner*/
    margin-top:-40px;
    display: flex;
    padding:0px 133px;
    position:relative;
}
#banner2 .box-left ,#banner .box-right {
    width: 50%;
}

#banner2  .box-left h2 {/* chỉnh chữ spring of the Y*/
    
    font-size:50px;
    margin-top:55px;
    margin-left:409px;
    width: 100%;
    padding:0px 30px;   
    font-family:Tahoma ;
    color:#AE611D
}

#banner2 .box-left button {/*nút buttom mua ngay*/
    font-size:20px;/*chỉnh size chữ*/
    width: 170px;/*chỉnh size dài bóng đen*/
    height: 45px;/*chỉnh size rộng bóng đen*/
    margin-top:460px;/*chỉnh vị trí buttom lên xuống*/
    margin-left:565px;/*chỉnh vị trí buttom trái phải*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;/*chỉnh tốc độ chuyển màu*/
}
#banner2 .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}


/* ------------------------Banner LILIWUYN------------------------------*/
#banner3 {/* banner lilywuyn*/
    width: 100%;
    background-image :url("banner liliwuyn2.jpg");
    background-size:cover;
    height: 700px;/*chỉnh size banner*/
    margin-top:-40px;
    display: flex;
    padding:0px 133px;
    position:relative;
}
#banner3 .box-left ,#banner .box-right {
    width: 50%;
}

#banner3 .box-left button {/*nút buttom mua ngay*/
    font-size:20px;/*chỉnh size chữ*/
    width: 170px;/*chỉnh size dài bóng đen*/
    height: 45px;/*chỉnh size rộng bóng đen*/
    margin-top:435px;/*chỉnh vị trí buttom lên xuống*/
    margin-left:565px;/*chỉnh vị trí buttom trái phải*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;/*chỉnh tốc độ chuyển màu*/
}
#banner3 .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}



/* ------------------------WHAT'S HOT------------------------------*/


#new {/*căn nguyên lish new arrival và sản phẩm */
    padding-top:50px;/*cách banner trên*/
    padding-bottom: 78px;
    padding-left:0px;
    padding-right:160px;/*căn phải với web*/
     
}

#new h2 {
    padding-left:175px;
    text-align: center;
    margin-bottom: 50px;/*căn trên so với chữ WHAT'S HOT*/
    font-size:5x;/*size chữ WHAT'S HOT*/
    color:black;
    
}


#list-new {
    font-size:13px;/*size chữ sản phẩm*/
    display: flex;
    list-style: none;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}

#list-new .item {
    width: 100%px;/*căn trái phải của hình ảnh so với lề*/
    height: 0px;/*chỉnh khung border sau ảnh*/
    background:#fafafa;
    border-radius: 0px;
    margin-bottom: 460px;/*chỉnh khoảng cách sản phẩm trên so với sản phẩm dưới*/
}


#list-new .item .name {
    text-align: center;
    color:rgb(10, 10, 10);
    font-weight: bold;
    margin-top:20px;/*chỉnh khoảng cách từ tên so với sản phẩm*/
}


.list-page {
    width: 50%;
    margin:0px auto;
}

.list-page {
    display: flex;
    list-style: none;
    justify-content: center;
    align-items: center;
}
#list-new .box-left{
    text-align: center;
    margin-top:450px;/*chỉnh lên xuống nút xem thêm */
    margin-left:-451px;/*chỉnh trái phải nút xem thêm*/
    
}
#list-new .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}
#list-new .box-left button {/*nút buttom mua ngay*/
    font-size:13px;/*chỉnh size chữ*/
    width: 90px;/*chỉnh size dài bóng đen*/
    height: 35px;/*chỉnh size rộng bóng đen*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;/*chỉnh tốc độ chuyển màu*/
}



/* ------------------------Banner 4------------------------------*/
#banner4 {/* banner sale off*/
    width: 100%;
    background-image :url("banner\ saleoff2.jpg");
    background-size:cover;
    height: 113px;/*chỉnh size banner*/
    margin-top:-20px;
    margin-left:0px;
    display: flex;
    padding:0px 133px;
    position:relative;
}
#banner4 .box-left ,#banner .box-right {
    width: 50%;
}

#banner4 .box-left button {/*nút buttom mua ngay*/
    font-size:15px;/*chỉnh size chữ*/
    width: 190px;/*chỉnh size dài bóng đen*/
    height: 55px;/*chỉnh size rộng bóng đen*/
    margin-top:27px;/*chỉnh vị trí buttom lên xuống*/
    margin-left:670px;/*chỉnh vị trí buttom trái phải*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.4s;
}
#banner4 .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}


/*----------------FOOTER--------------------*/

footer{
    background:rgb(0, 0, 0);
    display:flex;
    margin-top:0px;
    justify-content: space-around;
    margin-bottom:0px;
    padding-bottom: 20px;   /*chỉnh size background đen */
    
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


/*------------------------Cartegory----------------------------------------*/

/* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container{
    position: relative;
    
    width: 100%;
    margin: 80px auto 30px;
}
.select-btn{
    display: flex;
    height: 50px;
    align-items: center;
    justify-content: space-between;
    padding: 0 16px;
    border-radius: 8px;
    cursor: pointer;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.select-btn .btn-text{
    font-size: 17px;
    font-weight: 400;
    color: #333;
}
.select-btn .arrow-dwn{
    display: flex;
    height: 21px;
    width: 21px;
    color: #fff;
    font-size: 14px;
    border-radius: 50%;
    background: #6e93f7;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}
.select-btn.open .arrow-dwn{
    transform: rotate(-180deg);
}
.list-items{
    position: relative;
    margin-top: 15px;
    border-radius: 8px;
    padding: 16px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    display: none;
}
.select-btn.open ~ .list-items{
    display: block;
}
.list-items .item{
    display: flex;
    align-items: center;
    list-style: none;
    height: 50px;
    cursor: pointer;
    transition: 0.3s;
    padding: 0 15px;
    border-radius: 8px;
}
.list-items .item:hover{
    background-color: #e7edfe;
}
.item .item-text{
    font-size: 16px;
    font-weight: 400;
    color: #333;
}
.item .checkbox{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 16px;
    width: 16px;
    border-radius: 4px;
    margin-right: 12px;
    border: 1.5px solid #c0c0c0;
    transition: all 0.3s ease-in-out;
}
.item.checked .checkbox{
    background-color: #4070f4;
    border-color: #4070f4;
}
.checkbox .check-icon{
    color: #fff;
    font-size: 11px;
    transform: scale(0);
    transition: all 0.2s ease-in-out;
}
.item.checked .check-icon{
    transform: scale(1);
}

    </style>
<?php include("Layout/footer.php") ?>