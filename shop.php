<?php
            session_start();
            if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
                unset($_SESSION['submit']);
                header('Location:index.php');
            }
?>

<?php
include('config.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="DICO">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DICO</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script><!--link lấy icon -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</head>
<!-----------------------HEARDER ----------------------------------------->
<header>
        <img src="/Web/images/avt.png" class="logo"><!--LOGO -->
        <div id="menu">
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
            <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search"></i></li><!--icon SEARCH -->
            <div class="login"> 
                <?php
                
                if(isset($_SESSION['submit'])) {
                    $user_admin = $_SESSION['submit'];
                            if($user_admin == 'Admin_Chu') {
                                
                                echo '<a style="color:black;" href="">' . $_SESSION['submit'] . '</a>
                                <div class="logout">
                                <a href="#"><i class="fas fa-user-edit"></i>Admin</a> <br>                            
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
            
            
            <li><i class="fas fa-shopping-bag"></i></li><!--icon GIỎ HÀNG -->
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
    padding: 7px;
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
<section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne" >Top</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="#">Áo thun</a></li>
                                                    <li><a href="#">Áo khoác</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne" >Bottom</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="#">Quần ngắn </a></li>
                                                    <li><a href="#">Quần dài</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Collection</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="#">One Piece</a></li>
                                                    <li><a href="#">Spring of the Y</a></li>
                                                    <li><a href="#">Liliwyun</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#">200.000-400.000</a></li>
                                                    <li><a href="#">400.000-600.000</a></li>
                                                    <li><a href="#">600.000-800.000</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                <label for="xs">M
                                                    <input type="radio" id="xs">
                                                </label>
                                                <label for="sm">L
                                                    <input type="radio" id="sm">
                                                </label>
                                                <label for="md">XL
                                                    <input type="radio" id="md">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">High To Low</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg" style="background-image: url('img/product/product-2.jpg');">
                                    

                                </div>
                                <div class="product__item__text">
                                    <h6>Piqué Biker Jacket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$67.24</h5>
                                    <div class="product__color__select">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg" style="background-image: url('img/product/product-3.jpg');">
                                  
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi-pocket Chest Bag</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$43.48</h5>
                                    <div class="product__color__select">
                                        <label for="pc-7">
                                            <input type="radio" id="pc-7">
                                        </label>
                                        <label class="active black" for="pc-8">
                                            <input type="radio" id="pc-8">
                                        </label>
                                        <label class="grey" for="pc-9">
                                            <input type="radio" id="pc-9">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg" style="background-image: url('img/product/product-4.jpg');">
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6>Diagonal Textured Cap</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$60.9</h5>
                                    <div class="product__color__select">
                                        <label for="pc-10">
                                            <input type="radio" id="pc-10">
                                        </label>
                                        <label class="active black" for="pc-11">
                                            <input type="radio" id="pc-11">
                                        </label>
                                        <label class="grey" for="pc-12">
                                            <input type="radio" id="pc-12">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg" style="background-image: url('img/product/product-6.jpg');">
                                    <span class="label">Sale</span>
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6>Ankle Boots</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$98.49</h5>
                                    <div class="product__color__select">
                                        <label for="pc-16">
                                            <input type="radio" id="pc-16">
                                        </label>
                                        <label class="active black" for="pc-17">
                                            <input type="radio" id="pc-17">
                                        </label>
                                        <label class="grey" for="pc-18">
                                            <input type="radio" id="pc-18">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg" style="background-image: url('img/product/product-7.jpg');">
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6>T-shirt Contrast Pocket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$49.66</h5>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg" style="background-image: url('img/product/product-8.jpg');">
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div cla
                                    
                                    
                                    ss="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$26.28</h5>
                                    <div class="product__color__select">
                                        <label for="pc-22">
                                            <input type="radio" id="pc-22">
                                        </label>
                                        <label class="active black" for="pc-23">
                                            <input type="radio" id="pc-23">
                                        </label>
                                        <label class="grey" for="pc-24">
                                            <input type="radio" id="pc-24">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                                 
                                </div>
                                <div class="product__item__text">
                                    <h6>Piqué Biker Jacket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$67.24</h5>
                                    <div class="product__color__select">
                                        <label for="pc-25">
                                            <input type="radio" id="pc-25">
                                        </label>
                                        <label class="active black" for="pc-26">
                                            <input type="radio" id="pc-26">
                                        </label>
                                        <label class="grey" for="pc-27">
                                            <input type="radio" id="pc-27">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">

                                   
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi-pocket Chest Bag</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$43.48</h5>
                                    <div class="product__color__select">
                                        <label for="pc-28">
                                            <input type="radio" id="pc-28">
                                        </label>
                                        <label class="active black" for="pc-29">
                                            <input type="radio" id="pc-29">
                                        </label>
                                        <label class="grey" for="pc-30">
                                            <input type="radio" id="pc-30">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-11.jpg">
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6>Diagonal Textured Cap</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$60.9</h5>
                                    <div class="product__color__select">
                                        <label for="pc-31">
                                            <input type="radio" id="pc-31">
                                        </label>
                                        <label class="active black" for="pc-32">
                                            <input type="radio" id="pc-32">
                                        </label>
                                        <label class="grey" for="pc-33">
                                            <input type="radio" id="pc-33">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-12.jpg">
                                    
                                   
                                </div>
                                <div class="product__item__text">
                                    <h6>Ankle Boots</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$98.49</h5>
                                    <div class="product__color__select">
                                        <label for="pc-34">
                                            <input type="radio" id="pc-34">
                                        </label>
                                        <label class="active black" for="pc-35">
                                            <input type="radio" id="pc-35">
                                        </label>
                                        <label class="grey" for="pc-36">
                                            <input type="radio" id="pc-36">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-13.jpg">
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6>T-shirt Contrast Pocket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$49.66</h5>
                                    <div class="product__color__select">
                                        <label for="pc-37">
                                            <input type="radio" id="pc-37">
                                        </label>
                                        <label class="active black" for="pc-38">
                                            <input type="radio" id="pc-38">
                                        </label>
                                        <label class="grey" for="pc-39">
                                            <input type="radio" id="pc-39">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-14.jpg">
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$26.28</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
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

</style>

<style>
    /******************************************************************
  Template Name: Male Fashion
  Description: Male Fashion - ecommerce teplate
  Author: Colorib
  Author URI: https://www.colorib.com/
  Version: 1.0
  Created: Colorib 
******************************************************************/

/*------------------------------------------------------------------
[Table of contents]

1.  Template default CSS
	1.1	Variables
	1.2	Mixins
	1.3	Flexbox
	1.4	Reset
2.  Helper Css
3.  Header Section
4.  Hero Section
5.  Banner Section
6.  Product Section
7.  Intagram Section
8.  Latest Section
9.  Contact
10.  Footer Style
-------------------------------------------------------------------*/

/*----------------------------------------*/
/* Template default CSS
/*----------------------------------------*/

html,
body {
	height: 100%;
	font-family: "Nunito Sans", sans-serif;
	-webkit-font-smoothing: antialiased;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 0;
	color: #111111;
	font-weight: 400;
	font-family: "Nunito Sans", sans-serif;
}

h1 {
	font-size: 70px;
}

h2 {
	font-size: 36px;
}

h3 {
	font-size: 30px;
}

h4 {
	font-size: 24px;
}

h5 {
	font-size: 18px;
}

h6 {
	font-size: 16px;
}

p {
	font-size: 15px;
	font-family: "Nunito Sans", sans-serif;
	color: #3d3d3d;
	font-weight: 400;
	line-height: 25px;
	margin: 0 0 15px 0;
}

img {
	max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
	outline: none;
}

a:hover,
a:focus {
	text-decoration: none;
	outline: none;
	color: #ffffff;
}

ul,
ol {
	padding: 0;
	margin: 0;
}

/*---------------------
  Helper CSS
-----------------------*/

.section-title {
	margin-bottom: 45px;
	text-align: center;
}

.section-title span {
	color: #e53637;
	font-size: 14px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-bottom: 15px;
	display: block;
}

.section-title h2 {
	color: #111111;
	font-weight: 700;
	line-height: 46px;
}

.set-bg {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: top center;
}

.spad {
	padding-top: 100px;
	padding-bottom: 100px;
}

.text-white h1,
.text-white h2,
.text-white h3,
.text-white h4,
.text-white h5,
.text-white h6,
.text-white p,
.text-white span,
.text-white li,
.text-white a {
	color: #fff;
}

/* buttons */

.primary-btn {
	display: inline-block;
	font-size: 13px;
	font-weight: 700;
	text-transform: uppercase;
	padding: 14px 30px;
	color: #ffffff;
	background: #000000;
	letter-spacing: 4px;
}

.site-btn {
	font-size: 14px;
	color: #ffffff;
	background: #111111;
	font-weight: 700;
	border: none;
	text-transform: uppercase;
	display: inline-block;
	padding: 14px 30px;
}

/* Preloder */

#preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #000;
}

.loader {
	width: 40px;
	height: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -13px;
	margin-left: -13px;
	border-radius: 60px;
	animation: loader 0.8s linear infinite;
	-webkit-animation: loader 0.8s linear infinite;
}

@keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

.spacial-controls {
	position: fixed;
	width: 111px;
	height: 91px;
	top: 0;
	right: 0;
	z-index: 999;
}

.spacial-controls .search-switch {
	display: block;
	height: 100%;
	padding-top: 30px;
	background: #323232;
	text-align: center;
	cursor: pointer;
}

.search-model {
	display: none;
	position: fixed;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #000;
	z-index: 99999;
}

.search-model-form {
	padding: 0 15px;
}

.search-model-form input {
	width: 500px;
	font-size: 40px;
	border: none;
	border-bottom: 2px solid #333;
	background: 0 0;
	color: #999;
}

.search-close-switch {
	position: absolute;
	width: 50px;
	height: 50px;
	background: #333;
	color: #fff;
	text-align: center;
	border-radius: 50%;
	font-size: 28px;
	line-height: 28px;
	top: 30px;
	cursor: pointer;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

/*---------------------
  Header
-----------------------*/

.header {
	background: #ffffff;
}

.header__top {
	background: #111111;
	padding: 10px 0;
}

.header__top__left p {
	color: #ffffff;
	margin-bottom: 0;
}

.header__top__right {
	text-align: right;
}

.header__top__links {
	display: inline-block;
	margin-right: 25px;
}

.header__top__links a {
	color: #ffffff;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-right: 28px;
	display: inline-block;
}

.header__top__links a:last-child {
	margin-right: 0;
}

.header__top__hover {
	display: inline-block;
	position: relative;
}

.header__top__hover:hover ul {
	top: 24px;
	opacity: 1;
	visibility: visible;
}

.header__top__hover span {
	color: #ffffff;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	display: inline-block;
	cursor: pointer;
}

.header__top__hover span i {
	font-size: 20px;
	position: relative;
	top: 3px;
	right: 2px;
}

.header__top__hover ul {
	background: #ffffff;
	display: inline-block;
	padding: 2px 0;
	position: absolute;
	left: 0;
	top: 44px;
	opacity: 0;
	visibility: hidden;
	z-index: 3;
	-webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.header__top__hover ul li {
	list-style: none;
	font-size: 13px;
	color: #111111;
	padding: 2px 15px;
	cursor: pointer;
}

.header__logo {
	padding: 30px 0;
}

.header__logo a {
	display: inline-block;
}

.header__menu {
	text-align: center;
	padding: 26px 0 25px;
}

.header__menu ul li {
	list-style: none;
	display: inline-block;
	margin-right: 45px;
	position: relative;
}

.header__menu ul li.active a:after {
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}

.header__menu ul li:hover a:after {
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}

.header__menu ul li:hover .dropdown {
	top: 32px;
	opacity: 1;
	visibility: visible;
}

.header__menu ul li:last-child {
	margin-right: 0;
}

.header__menu ul li .dropdown {
	position: absolute;
	left: 0;
	top: 56px;
	width: 150px;
	background: #111111;
	text-align: left;
	padding: 5px 0;
	z-index: 9;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.header__menu ul li .dropdown li {
	display: block;
	margin-right: 0;
}

.header__menu ul li .dropdown li a {
	font-size: 14px;
	color: #ffffff;
	font-weight: 400;
	padding: 5px 20px;
	text-transform: capitalize;
}

.header__menu ul li .dropdown li a:after {
	display: none;
}

.header__menu ul li a {
	font-size: 18px;
	color: #111111;
	display: block;
	font-weight: 600;
	position: relative;
	padding: 3px 0;
}

.header__menu ul li a:after {
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #e53637;
	content: "";
	-webkit-transition: all, 0.5s;
	-o-transition: all, 0.5s;
	transition: all, 0.5s;
	-webkit-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);
}

.header__nav__option {
	text-align: right;
	padding: 30px 0;
}

.header__nav__option a {
	display: inline-block;
	margin-right: 26px;
	position: relative;
}

.header__nav__option a span {
	color: #0d0d0d;
	font-size: 11px;
	position: absolute;
	left: 5px;
	top: 8px;
}

.header__nav__option a:last-child {
	margin-right: 0;
}

.header__nav__option .price {
	font-size: 15px;
	color: #111111;
	font-weight: 700;
	display: inline-block;
	margin-left: -20px;
	position: relative;
	top: 3px;
}

.offcanvas-menu-wrapper {
	display: none;
}

.canvas__open {
	display: none;
}

/*---------------------
  Hero
-----------------------*/

.hero__slider.owl-carousel .owl-item.active .hero__text h6 {
	top: 0;
	opacity: 1;
}

.hero__slider.owl-carousel .owl-item.active .hero__text h2 {
	top: 0;
	opacity: 1;
}

.hero__slider.owl-carousel .owl-item.active .hero__text p {
	top: 0;
	opacity: 1;
}

.hero__slider.owl-carousel .owl-item.active .hero__text .primary-btn {
	top: 0;
	opacity: 1;
}

.hero__slider.owl-carousel .owl-nav button {
	font-size: 36px;
	color: #333333;
	position: absolute;
	left: 75px;
	top: 50%;
	margin-top: -18px;
	line-height: 29px;
}

.hero__slider.owl-carousel .owl-nav button.owl-next {
	left: auto;
	right: 75px;
}

.hero__items {
	height: 800px;
	padding-top: 230px;
}

.hero__text h6 {
	color: #e53637;
	font-size: 14px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-bottom: 28px;
	position: relative;
	top: 100px;
	opacity: 0;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.hero__text h2 {
	color: #111111;
	font-size: 48px;
	font-weight: 700;
	line-height: 58px;
	margin-bottom: 30px;
	position: relative;
	top: 100px;
	opacity: 0;
	-webkit-transition: all, 0.6s;
	-o-transition: all, 0.6s;
	transition: all, 0.6s;
}

.hero__text p {
	font-size: 16px;
	line-height: 28px;
	margin-bottom: 35px;
	position: relative;
	top: 100px;
	opacity: 0;
	-webkit-transition: all, 0.9s;
	-o-transition: all, 0.9s;
	transition: all, 0.9s;
}

.hero__text .primary-btn {
	position: relative;
	top: 100px;
	opacity: 0;
	-webkit-transition: all, 1.1s;
	-o-transition: all, 1.1s;
	transition: all, 1.1s;
}

.hero__text .primary-btn span {
	font-size: 20px;
	position: relative;
	top: 4px;
	font-weight: 700;
}

.hero__social {
	margin-top: 190px;
}

.hero__social a {
	font-size: 16px;
	color: #3d3d3d;
	display: inline-block;
	margin-right: 32px;
}

.hero__social a:last-child {
	margin-right: 0;
}

/*---------------------
  Banner
-----------------------*/

.blog {
	padding-bottom: 55px;
}

.banner__item {
	position: relative;
	overflow: hidden;
}

.banner__item:hover .banner__item__text a:after {
	width: 40px;
	background: #e53637;
}

.banner__item.banner__item--middle {
	margin-top: -75px;
}

.banner__item.banner__item--middle .banner__item__pic {
	float: none;
}

.banner__item.banner__item--middle .banner__item__text {
	position: relative;
	top: 0;
	left: 0;
	max-width: 100%;
	padding-top: 22px;
}

.banner__item.banner__item--last {
	margin-top: 100px;
}

.banner__item__pic {
	float: right;
}

.banner__item__text {
	max-width: 300px;
	position: absolute;
	left: 0;
	top: 140px;
}

.banner__item__text h2 {
	color: #111111;
	font-weight: 700;
	line-height: 46px;
	margin-bottom: 10px;
}

.banner__item__text a {
	display: inline-block;
	color: #111111;
	font-size: 13px;
	font-weight: 700;
	letter-spacing: 4px;
	text-transform: uppercase;
	padding: 3px 0;
	position: relative;
}

.banner__item__text a:after {
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #111111;
	content: "";
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

/*---------------------
  Categories
-----------------------*/

.categories {
	background: #f3f2ee;
	overflow: hidden;
	padding-top: 150px;
	padding-bottom: 125px;
}

.categories__text {
	padding-top: 40px;
	position: relative;
	z-index: 1;
}

.categories__text:before {
	position: absolute;
	left: -485px;
	top: 0;
	height: 300px;
	width: 600px;
	background: #ffffff;
	z-index: -1;
	content: "";
}

.categories__text h2 {
	color: #b7b7b7;
	line-height: 72px;
	font-size: 34px;
}

.categories__text h2 span {
	font-weight: 700;
	color: #111111;
}

.categories__hot__deal {
	position: relative;
	z-index: 5;
}

.categories__hot__deal img {
	min-width: 100%;
}

.hot__deal__sticker {
	height: 100px;
	width: 100px;
	background: #111111;
	border-radius: 50%;
	padding-top: 22px;
	text-align: center;
	position: absolute;
	right: 0;
	top: -36px;
}

.hot__deal__sticker span {
	display: block;
	font-size: 15px;
	color: #ffffff;
	margin-bottom: 4px;
}

.hot__deal__sticker h5 {
	color: #ffffff;
	font-size: 20px;
	font-weight: 700;
}

.categories__deal__countdown span {
	color: #e53637;
	font-size: 14px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-bottom: 15px;
	display: block;
}

.categories__deal__countdown h2 {
	color: #111111;
	font-weight: 700;
	line-height: 46px;
	margin-bottom: 25px;
}

.categories__deal__countdown .categories__deal__countdown__timer {
	margin-bottom: 20px;
	overflow: hidden;
	margin-left: -30px;
}

.categories__deal__countdown .categories__deal__countdown__timer .cd-item {
	width: 25%;
	float: left;
	margin-bottom: 25px;
	text-align: center;
	position: relative;
}

.categories__deal__countdown .categories__deal__countdown__timer .cd-item:after {
	position: absolute;
	right: 0;
	top: 7px;
	content: ":";
	font-size: 24px;
	font-weight: 700;
	color: #3d3d3d;
}

.categories__deal__countdown .categories__deal__countdown__timer .cd-item:last-child:after {
	display: none;
}

.categories__deal__countdown .categories__deal__countdown__timer .cd-item span {
	color: #111111;
	font-weight: 700;
	display: block;
	font-size: 36px;
}

.categories__deal__countdown .categories__deal__countdown__timer .cd-item p {
	margin-bottom: 0;
}

/*---------------------
  Instagram
-----------------------*/

.instagram {
	padding-bottom: 0;
}

.instagram__pic__item {
	width: 33.33%;
	float: left;
	height: 261px;
	background-position: center center;
}

.instagram__text {
	padding-top: 130px;
}

.instagram__text h2 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 30px;
}

.instagram__text p {
	margin-bottom: 65px;
}

.instagram__text h3 {
	color: #e53637;
	font-weight: 700;
}

/*---------------------
  Product
-----------------------*/

.product {
	padding-top: 0;
	padding-bottom: 60px;
}

.filter__controls {
	text-align: center;
	margin-bottom: 45px;
}

.filter__controls li {
	color: #b7b7b7;
	font-size: 24px;
	font-weight: 700;
	list-style: none;
	display: inline-block;
	margin-right: 88px;
	cursor: pointer;
}

.filter__controls li:last-child {
	margin-right: 0;
}

.filter__controls li.active {
	color: #111111;
}

.product__item {
	overflow: hidden;
	margin-bottom: 40px;
}

.product__item.sale .product__item__pic .label {
	color: #ffffff;
	background: #111111;
}

.product__item.sale .product__item__text .rating i {
	color: #f7941d;
}

.product__item.sale .product__item__text .rating i:nth-last-child(1) {
	color: #b7b7b7;
}

.product__item:hover .product__item__pic .product__hover {
	right: 20px;
	opacity: 1;
}

.product__item:hover .product__item__text a {
	top: 22px;
	opacity: 1;
	visibility: visible;
}

.product__item:hover .product__item__text h6 {
	opacity: 0;
}

.product__item:hover .product__item__text .product__color__select {
	opacity: 1;
}

.product__item__pic {
	height: 260px;
	position: relative;
	background-position: center center;
}

.product__item__pic .label {
	color: #111111;
	font-size: 11px;
	font-weight: 700;
	letter-spacing: 2px;
	text-transform: uppercase;
	display: inline-block;
	padding: 4px 15px 2px;
	background: #ffffff;
	position: absolute;
	left: 0;
	top: 20px;
}

.product__item__pic .product__hover {
	position: absolute;
	right: -200px;
	top: 20px;
	-webkit-transition: all, 0.8s;
	-o-transition: all, 0.8s;
	transition: all, 0.8s;
}

.product__item__pic .product__hover li {
	list-style: none;
	margin-bottom: 10px;
	position: relative;
}

.product__item__pic .product__hover li:hover span {
	opacity: 1;
	visibility: visible;
}

.product__item__pic .product__hover li span {
	color: #ffffff;
	background: #111111;
	display: inline-block;
	padding: 4px 10px;
	font-size: 12px;
	position: absolute;
	left: -78px;
	top: 5px;
	z-index: 1;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.product__item__pic .product__hover li span:after {
	position: absolute;
	right: -2px;
	top: 5px;
	height: 15px;
	width: 15px;
	background: #111111;
	content: "";
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
	z-index: -1;
}

.product__item__pic .product__hover li img {
	background: #ffffff;
	padding: 10px;
	display: inline-block;
}

.product__item__text {
	padding-top: 25px;
	position: relative;
}

.product__item__text a {
	font-size: 15px;
	color: #e53637;
	font-weight: 700;
	position: absolute;
	left: 0;
	top: 0;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.product__item__text h6 {
	color: #111111;
	font-size: 15px;
	font-weight: 600;
	margin-bottom: 5px;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.product__item__text .rating {
	margin-bottom: 6px;
}

.product__item__text .rating i {
	font-size: 14px;
	color: #b7b7b7;
	margin-right: -5px;
}

.product__item__text h5 {
	color: #0d0d0d;
	font-weight: 700;
}

.product__item__text .product__color__select {
	position: absolute;
	right: 0;
	bottom: 0;
	opacity: 0;
	-webkit-transition: all, 0.5s;
	-o-transition: all, 0.5s;
	transition: all, 0.5s;
}

.product__item__text .product__color__select label {
	display: inline-block;
	height: 12px;
	width: 12px;
	background: #5e64d1;
	border-radius: 50%;
	margin-bottom: 0;
	margin-right: 5px;
	position: relative;
	cursor: pointer;
}

.product__item__text .product__color__select label.black {
	background: #404a47;
}

.product__item__text .product__color__select label.grey {
	background: #d5a667;
}

.product__item__text .product__color__select label.active:after {
	opacity: 1;
}

.product__item__text .product__color__select label:after {
	position: absolute;
	left: -3px;
	top: -3px;
	height: 18px;
	width: 18px;
	border: 1px solid #b9b9b9;
	content: "";
	border-radius: 50%;
	opacity: 0;
}

.product__item__text .product__color__select label input {
	position: absolute;
	visibility: hidden;
}

/*---------------------
  Shop
-----------------------*/

.shop__sidebar {
	padding-right: 20px;
}

.shop__sidebar__search {
	margin-bottom: 45px;
}

.shop__sidebar__search form {
	position: relative;
}

.shop__sidebar__search form input {
	width: 100%;
	font-size: 15px;
	color: #b7b7b7;
	padding-left: 20px;
	border: 1px solid #e5e5e5;
	height: 42px;
}

.shop__sidebar__search form input::-webkit-input-placeholder {
	color: #b7b7b7;
}

.shop__sidebar__search form input::-moz-placeholder {
	color: #b7b7b7;
}

.shop__sidebar__search form input:-ms-input-placeholder {
	color: #b7b7b7;
}

.shop__sidebar__search form input::-ms-input-placeholder {
	color: #b7b7b7;
}

.shop__sidebar__search form input::placeholder {
	color: #b7b7b7;
}

.shop__sidebar__search form button {
	color: #b7b7b7;
	font-size: 15px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	padding: 0 15px;
	top: 0;
	height: 100%;
}

.shop__sidebar__accordion .card {
	border: none;
	border-radius: 0;
	margin-bottom: 25px;
}

.shop__sidebar__accordion .card:last-child {
	margin-bottom: 0;
}

.shop__sidebar__accordion .card:last-child .card-body {
	padding-bottom: 0;
	border-bottom: none;
}

.shop__sidebar__accordion .card-body {
	padding: 0;
	padding-top: 10px;
	padding-bottom: 20px;
	border-bottom: 1px solid #e5e5e5;
}

.shop__sidebar__accordion .card-heading {
	cursor: pointer;
}

.shop__sidebar__accordion .card-heading a {
	color: #111111;
	font-size: 16px;
	font-weight: 700;
	text-transform: uppercase;
	display: block;
}




.shop__sidebar__categories ul li,
.shop__sidebar__price ul li,
.shop__sidebar__brand ul li {
	list-style: none;
}

.shop__sidebar__categories ul li a,
.shop__sidebar__price ul li a,
.shop__sidebar__brand ul li a {
	color: #b7b7b7;
	font-size: 15px;
	line-height: 32px;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.shop__sidebar__categories ul li a:hover,
.shop__sidebar__price ul li a:hover,
.shop__sidebar__brand ul li a:hover {
	color: #111111;
}

.shop__sidebar__brand ul {
	height: auto;
}

.shop__sidebar__price ul {
	height: auto;
}

.shop__sidebar__size {
	padding-top: 15px;
}

.shop__sidebar__size label {
	color: #111111;
	font-size: 15px;
	font-weight: 700;
	text-transform: uppercase;
	display: inline-block;
	border: 1px solid #e5e5e5;
	padding: 6px 25px;
	margin-bottom: 10px;
	margin-right: 5px;
	cursor: pointer;
}

.shop__sidebar__size label.active {
	background: #111111;
	color: #ffffff;
	border-color: #111111;
}

.shop__sidebar__size label input {
	position: absolute;
	visibility: hidden;
}

.shop__sidebar__color {
	padding-top: 15px;
}

.shop__sidebar__color label {
	height: 30px;
	width: 30px;
	border-radius: 50%;
	position: relative;
	margin-right: 10px;
	display: inline-block;
	margin-bottom: 10px;
	cursor: pointer;
}

.shop__sidebar__color label.c-1 {
	background: #0b090c;
}

.shop__sidebar__color label.c-2 {
	background: #20315f;
}

.shop__sidebar__color label.c-3 {
	background: #f1af4d;
}

.shop__sidebar__color label.c-4 {
	background: #636068;
}

.shop__sidebar__color label.c-5 {
	background: #57594d;
}

.shop__sidebar__color label.c-6 {
	background: #e8bac4;
}

.shop__sidebar__color label.c-7 {
	background: #d6c1d7;
}

.shop__sidebar__color label.c-8 {
	background: #ed1c24;
}

.shop__sidebar__color label.c-9 {
	background: #ffffff;
}

.shop__sidebar__color label:after {
	position: absolute;
	left: -3px;
	top: -3px;
	height: 36px;
	width: 36px;
	border: 1px solid #e5e5e5;
	content: "";
	border-radius: 50%;
}

.shop__sidebar__color label input {
	position: absolute;
	visibility: hidden;
}

.shop__sidebar__tags {
	padding-top: 15px;
}

.shop__sidebar__tags a {
	color: #404040;
	font-size: 13px;
	font-weight: 700;
	background: #f1f5f8;
	padding: 5px 18px;
	display: inline-block;
	text-transform: uppercase;
	margin-right: 6px;
	margin-bottom: 10px;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.shop__sidebar__tags a:hover {
	background: #111111;
	color: #ffffff;
}

.shop__sidebar__accordion .card-heading a:after,
.shop__sidebar__accordion .card-heading>a.active[aria-expanded=false]:after {
	content: "";
	font-family: "FontAwesome";
	font-size: 24px;
	font-weight: 700;
	color: #111111;
	position: absolute;
	right: 0;
	top: 2px;
	line-height: 20px;
}

.shop__sidebar__accordion .card-heading.active a:after {
	content: "";
	font-family: "FontAwesome";
	font-size: 24px;
	font-weight: 700;
	color: #111111;
	position: absolute;
	right: 0;
	top: 2px;
	line-height: 20px;
}

.shop__product__option {
	margin-bottom: 45px;
}

.shop__product__option p {
	color: #111111;
	margin-bottom: 0;
}

.shop__product__option__right {
	text-align: right;
}

.shop__product__option__right p {
	display: inline-block;
	margin-bottom: 0;
}

.shop__product__option__right .nice-select {
	float: none;
	display: inline-block;
	padding: 0;
	line-height: 26px;
	height: auto;
	border: none;
	padding-right: 28px;
}

.shop__product__option__right .nice-select:after {
	border-bottom: 1.5px solid #111111;
	border-right: 1.5px solid #111111;
	height: 8px;
	right: 12px;
	width: 8px;
}

.shop__product__option__right .nice-select span {
	color: #111111;
	font-size: 15px;
	font-weight: 700;
}

.shop__product__option__right .nice-select .list {
	border-radius: 0;
}

.product__pagination {
	padding-top: 25px;
	text-align: center;
}

.product__pagination a {
	display: inline-block;
	font-size: 16px;
	font-weight: 700;
	color: #111111;
	height: 30px;
	width: 30px;
	border: 1px solid transparent;
	border-radius: 50%;
	line-height: 30px;
	text-align: center;
}

.product__pagination a.active {
	border-color: #111111;
}

.product__pagination a:hover {
	border-color: #111111;
}

.product__pagination span {
	display: inline-block;
	font-size: 16px;
	font-weight: 700;
	color: #111111;
	padding-left: 10px;
	padding-right: 15px;
}

/*---------------------
  Shop
-----------------------*/

.product__details__pic {
	text-align: center;
	background: #f3f2ee;
	padding: 40px 0 60px;
	margin-bottom: 100px;
}

.product__details__pic .nav-tabs {
	border-bottom: none;
	width: 105px;
}

.product__details__pic .nav-tabs .nav-item {
	margin-bottom: 10px;
}

.product__details__pic .nav-tabs .nav-item:last-child {
	margin-bottom: 0;
}

.product__details__pic .nav-tabs .nav-item .nav-link {
	padding: 0;
	display: block;
}

.product__details__pic .nav-tabs .nav-item .nav-link .product__thumb__pic {
	height: 120px;
	width: 95px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.product__details__pic .nav-tabs .nav-item .nav-link .product__thumb__pic i {
	height: 56px;
	width: 56px;
	border: 4px solid #ffffff;
	border-radius: 50%;
	font-size: 20px;
	color: #ffffff;
	line-height: 48px;
	display: inline-block;
	text-align: center;
}

.product__details__pic .nav-tabs .nav-item.show .nav-link,
.product__details__pic .nav-tabs .nav-link.active {
	background-color: transparent;
	border-color: transparent;
}

.product__details__breadcrumb {
	margin-bottom: 30px;
}

.product__details__breadcrumb a {
	font-size: 15px;
	color: #111111;
	margin-right: 18px;
	display: inline-block;
	position: relative;
}

.product__details__breadcrumb a:after {
	position: absolute;
	right: -14px;
	top: 0;
	content: "";
	font-family: "FontAwesome";
}

.product__details__breadcrumb span {
	font-size: 15px;
	color: #b7b7b7;
	display: inline-block;
}

.product__details__pic__item {
	position: relative;
}

.product__details__pic__item a {
	height: 56px;
	width: 56px;
	border: 4px solid #ffffff;
	border-radius: 50%;
	font-size: 20px;
	color: #ffffff;
	line-height: 48px;
	text-align: center;
	display: inline-block;
	position: absolute;
	left: 50%;
	top: 50%;
	margin-top: -28px;
	margin-left: -28px;
}

.product__details__text {
	text-align: center;
}

.product__details__text h4 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 10px;
}

.product__details__text .rating {
	margin-bottom: 20px;
}

.product__details__text .rating i {
	font-size: 15px;
	color: #f7941d;
	display: inline-block;
	margin-right: -5px;
}

.product__details__text .rating span {
	display: inline-block;
	color: #3d3d3d;
	margin-left: 5px;
}

.product__details__text h3 {
	color: #0d0d0d;
	font-weight: 700;
	margin-bottom: 16px;
}

.product__details__text h3 span {
	color: #b7b7b7;
	font-size: 20px;
	font-weight: 400;
	margin-left: 10px;
	text-decoration: line-through;
}

.product__details__text p {
	margin-bottom: 35px;
}

.product__details__option {
	margin-bottom: 30px;
}

.product__details__option__size {
	display: inline-block;
	margin-right: 50px;
}

.product__details__option__size span {
	color: #111111;
	display: inline-block;
	margin-right: 10px;
}

.product__details__option__size label {
	color: #111111;
	font-size: 15px;
	font-weight: 700;
	text-transform: uppercase;
	display: inline-block;
	border: 1px solid #e5e5e5;
	padding: 6px 15px;
	margin-bottom: 0;
	margin-right: 5px;
	cursor: pointer;
}

.product__details__option__size label.active {
	background: #111111;
	color: #ffffff;
	border-color: #111111;
}

.product__details__option__size label input {
	position: absolute;
	visibility: hidden;
}

.product__details__option__color {
	display: inline-block;
	position: relative;
	top: 10px;
}

.product__details__option__color span {
	color: #111111;
	display: inline-block;
	margin-right: 10px;
	position: relative;
	top: -9px;
}

.product__details__option__color label {
	height: 30px;
	width: 30px;
	border-radius: 50%;
	position: relative;
	margin-right: 10px;
	margin-bottom: 0;
	display: inline-block;
	cursor: pointer;
}

.product__details__option__color label.c-1 {
	background: #0b090c;
}

.product__details__option__color label.c-2 {
	background: #20315f;
}

.product__details__option__color label.c-3 {
	background: #f1af4d;
}

.product__details__option__color label.c-4 {
	background: #ed1c24;
}

.product__details__option__color label.c-9 {
	background: #ffffff;
}

.product__details__option__color label:after {
	position: absolute;
	left: -3px;
	top: -3px;
	height: 36px;
	width: 36px;
	border: 1px solid #e5e5e5;
	content: "";
	border-radius: 50%;
}

.product__details__option__color label input {
	position: absolute;
	visibility: hidden;
}

.product__details__cart__option {
	margin-bottom: 25px;
}

.product__details__cart__option .quantity {
	display: inline-block;
	margin-right: 20px;
}

.product__details__cart__option .quantity .pro-qty {
	width: 100px;
	height: 40px;
	border: 1px solid #e5e5e5;
	position: relative;
}

.product__details__cart__option .quantity .pro-qty input {
	color: #0d0d0d;
	font-size: 15px;
	font-weight: 700;
	width: 70px;
	height: 100%;
	text-align: center;
	border: none;
}

.product__details__cart__option .quantity .pro-qty .qtybtn {
	font-size: 18px;
	color: #0d0d0d;
	position: absolute;
	right: 15px;
	top: 3px;
	height: 10px;
	width: 10px;
	cursor: pointer;
	font-weight: 600;
}

.product__details__cart__option .quantity .pro-qty .qtybtn.inc {
	top: 16px;
}

.product__details__btns__option {
	margin-bottom: 40px;
}

.product__details__btns__option a {
	display: inline-block;
	font-size: 13px;
	color: #3d3d3d;
	letter-spacing: 2px;
	text-transform: uppercase;
	font-weight: 700;
	margin-right: 20px;
}

.product__details__btns__option a:last-child {
	margin-right: 0;
}

.product__details__last__option h5 {
	color: #111111;
	font-weight: 700;
	font-size: 20px;
	position: relative;
	margin-bottom: 26px;
}

.product__details__last__option h5 span {
	background: #ffffff;
	padding: 0 30px;
}

.product__details__last__option h5:before {
	position: absolute;
	left: 0;
	right: 0;
	top: 10px;
	height: 1px;
	width: 460px;
	background: #e5e5e5;
	content: "";
	z-index: -1;
	margin: 0 auto;
}

.product__details__last__option ul {
	padding-top: 40px;
}

.product__details__last__option ul li {
	list-style: none;
	font-size: 15px;
	color: #111111;
	font-weight: 700;
	line-height: 30px;
}

.product__details__last__option ul li span {
	font-weight: 400;
	color: #b7b7b7;
}

.product__details__tab {
	padding-top: 60px;
}

.product__details__tab .nav-tabs {
	border-bottom: 1px solid #e5e5e5;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.product__details__tab .nav-tabs .nav-item {
	margin-right: 50px;
}

.product__details__tab .nav-tabs .nav-item:last-child {
	margin-right: 0;
}

.product__details__tab .nav-tabs .nav-item .nav-link {
	font-size: 20px;
	color: #b7b7b7;
	padding: 0;
	border: none;
	font-weight: 700;
	padding-bottom: 10px;
	border-bottom: 2px solid transparent;
}

.product__details__tab .nav-tabs .nav-item .nav-link.active {
	border-bottom: 2px solid #e53637;
}

.product__details__tab__content {
	padding-top: 35px;
}

.note {
	color: #111111;
	font-size: 18px;
	font-weight: 700;
	line-height: 28px;
	margin-bottom: 25px;
}

.product__details__tab__content__item {
	margin-bottom: 30px;
}

.product__details__tab__content__item:last-child {
	margin-bottom: 0;
}

.product__details__tab__content__item h5 {
	color: #111111;
	font-size: 20px;
	font-weight: 700;
	margin-bottom: 12px;
}

.product__details__tab__content__item p {
	margin-bottom: 0;
}

/*---------------------
  Related
-----------------------*/

.related {
	padding-bottom: 55px;
}

.related-title {
	color: #111111;
	font-weight: 700;
	margin-bottom: 45px;
	text-align: center;
}

/*---------------------
  Footer
-----------------------*/

.footer {
	background: #111111;
	padding-top: 70px;
}

.footer__about {
	margin-bottom: 30px;
}

.footer__about .footer__logo {
	margin-bottom: 30px;
}

.footer__about .footer__logo a {
	display: inline-block;
}

.footer__about p {
	color: #b7b7b7;
	margin-bottom: 30px;
}

.footer__widget {
	margin-bottom: 30px;
}

.footer__widget h6 {
	color: #ffffff;
	font-size: 15px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-bottom: 20px;
}

.footer__widget ul li {
	line-height: 36px;
	list-style: none;
}

.footer__widget ul li a {
	color: #b7b7b7;
	font-size: 15px;
}

.footer__widget .footer__newslatter p {
	color: #b7b7b7;
}

.footer__widget .footer__newslatter form {
	position: relative;
}

.footer__widget .footer__newslatter form input {
	width: 100%;
	font-size: 15px;
	color: #3d3d3d;
	background: transparent;
	border: none;
	padding: 15px 0;
	border-bottom: 2px solid #ffffff;
}

.footer__widget .footer__newslatter form input::-webkit-input-placeholder {
	color: #3d3d3d;
}

.footer__widget .footer__newslatter form input::-moz-placeholder {
	color: #3d3d3d;
}

.footer__widget .footer__newslatter form input:-ms-input-placeholder {
	color: #3d3d3d;
}

.footer__widget .footer__newslatter form input::-ms-input-placeholder {
	color: #3d3d3d;
}

.footer__widget .footer__newslatter form input::placeholder {
	color: #3d3d3d;
}

.footer__widget .footer__newslatter form button {
	color: #b7b7b7;
	font-size: 16px;
	position: absolute;
	right: 5px;
	top: 0;
	height: 100%;
	background: transparent;
	border: none;
}

.footer__copyright__text {
	border-top: 1px solid rgba(255, 255, 255, 0.1);
	padding: 20px 0;
	margin-top: 40px;
}

.footer__copyright__text p {
	color: #b7b7b7;
	margin-bottom: 0;
}

.footer__copyright__text p i {
	color: #e53637;
}

.footer__copyright__text p a {
	color: #e53637;
}

/*---------------------
  Breadcrumb
-----------------------*/

.breadcrumb-option {
	background: #f3f2ee;
	padding: 40px 0;
}

.breadcrumb__text h4 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 8px;
}

.breadcrumb__links a {
	font-size: 15px;
	color: #111111;
	margin-right: 18px;
	display: inline-block;
	position: relative;
}

.breadcrumb__links a:after {
	position: absolute;
	right: -14px;
	top: 0;
	content: "";
	font-family: "FontAwesome";
}

.breadcrumb__links span {
	font-size: 15px;
	color: #b7b7b7;
	display: inline-block;
}

/*---------------------
  Breadcrumb Blog
-----------------------*/

.breadcrumb-blog {
	text-align: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	height: 350px;
}

.breadcrumb-blog h2 {
	color: #ffffff;
	font-size: 60px;
	font-weight: 700;
}

/*---------------------
  About
-----------------------*/

.about {
	padding-bottom: 70px;
}

.about__pic {
	margin-bottom: 35px;
}

.about__pic img {
	min-width: 100%;
}

.about__item {
	margin-bottom: 30px;
}

.about__item h4 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 10px;
}

.about__item p {
	margin-bottom: 0;
}

/*---------------------
  Testimonial
-----------------------*/

.testimonial {
	background: #f3f2ee;
}

.testimonial__text {
	text-align: center;
	padding: 130px 150px 175px;
}

.testimonial__text span {
	color: #e53637;
	font-size: 72px;
}

.testimonial__text p {
	color: #111111;
	font-size: 20px;
	font-style: italic;
	line-height: 30px;
	padding-top: 12px;
	margin-bottom: 25px;
}

.testimonial__author {
	display: inline-block;
}

.testimonial__author__pic {
	float: left;
	margin-right: 20px;
}

.testimonial__author__pic img {
	height: 60px;
	width: 60px;
	border-radius: 50%;
}

.testimonial__author__text {
	overflow: hidden;
	padding-top: 3px;
}

.testimonial__author__text h5 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 5px;
}

.testimonial__author__text p {
	color: #b7b7b7;
	margin-bottom: 0 !important;
	padding-top: 0;
}

.testimonial__pic {
	height: 600px;
}

/*---------------------
  Counter
-----------------------*/

.counter {
	padding-bottom: 0;
}

.counter .container {
	border-bottom: 1px solid #e5e5e5;
	padding-bottom: 70px;
}

.counter__item {
	margin-bottom: 30px;
	overflow: hidden;
}

.counter__item .counter__item__number {
	float: left;
	margin-right: 15px;
}

.counter__item .counter__item__number h2 {
	color: #111111;
	font-weight: 700;
	font-size: 60px;
	line-height: 50px;
	display: inline-block;
}

.counter__item .counter__item__number strong {
	color: #111111;
	font-weight: 700;
	font-size: 60px;
	line-height: 50px;
	display: inline-block;
}

.counter__item span {
	display: block;
	color: #3d3d3d;
	font-size: 18px;
	font-weight: 700;
	line-height: 25px;
	overflow: hidden;
}

/*---------------------
  Testimonial
-----------------------*/

.team {
	padding-bottom: 70px;
}

.team__item {
	margin-bottom: 30px;
}

.team__item img {
	min-width: 100%;
	margin-bottom: 25px;
}

.team__item h4 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 8px;
}

.team__item span {
	font-size: 15px;
	display: block;
	color: #b7b7b7;
}

/*---------------------
  Clients
-----------------------*/

.clients {
	padding-top: 0;
	padding-bottom: 25px;
}

.client__item {
	display: block;
	margin-bottom: 75px;
	text-align: center;
}

/*---------------------
  Shopping Cart
-----------------------*/

.shopping__cart__table {
	margin-bottom: 30px;
}

.shopping__cart__table table {
	width: 100%;
}

.shopping__cart__table table thead {
	border-bottom: 1px solid #f2f2f2;
}

.shopping__cart__table table thead tr th {
	color: #111111;
	font-size: 16px;
	font-weight: 700;
	text-transform: uppercase;
	padding-bottom: 25px;
}

.shopping__cart__table table tbody tr {
	border-bottom: 1px solid #f2f2f2;
}

.shopping__cart__table table tbody tr td {
	padding-bottom: 30px;
	padding-top: 30px;
}

.shopping__cart__table table tbody tr td.product__cart__item {
	width: 400px;
}

.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__pic {
	float: left;
	margin-right: 30px;
}

.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__text {
	overflow: hidden;
	padding-top: 21px;
}

.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__text h6 {
	color: #111111;
	font-size: 15px;
	font-weight: 600;
	margin-bottom: 10px;
}

.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__text h5 {
	color: #0d0d0d;
	font-weight: 700;
}

.shopping__cart__table table tbody tr td.quantity__item {
	width: 175px;
}

.shopping__cart__table table tbody tr td.quantity__item .quantity .pro-qty-2 {
	width: 80px;
}

.shopping__cart__table table tbody tr td.quantity__item .quantity .pro-qty-2 input {
	width: 50px;
	border: none;
	text-align: center;
	color: #111111;
	font-size: 16px;
}

.shopping__cart__table table tbody tr td.quantity__item .quantity .pro-qty-2 .qtybtn {
	font-size: 16px;
	color: #888888;
	width: 10px;
	cursor: pointer;
}

.shopping__cart__table table tbody tr td.cart__price {
	color: #111111;
	font-size: 18px;
	font-weight: 700;
	width: 140px;
}

.shopping__cart__table table tbody tr td.cart__close i {
	font-size: 18px;
	color: #111111;
	height: 40px;
	width: 40px;
	background: #f3f2ee;
	border-radius: 50%;
	line-height: 40px;
	text-align: center;
}

.continue__btn.update__btn {
	text-align: right;
}

.continue__btn.update__btn a {
	color: #ffffff;
	background: #111111;
	border-color: #111111;
}

.continue__btn.update__btn a i {
	margin-right: 5px;
}

.continue__btn a {
	color: #111111;
	font-size: 14px;
	font-weight: 700;
	letter-spacing: 2px;
	text-transform: uppercase;
	border: 1px solid #e1e1e1;
	padding: 14px 35px;
	display: inline-block;
}

.cart__discount {
	margin-bottom: 60px;
}

.cart__discount h6 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.cart__discount form {
	position: relative;
}

.cart__discount form input {
	font-size: 14px;
	color: #b7b7b7;
	height: 50px;
	width: 100%;
	border: 1px solid #e1e1e1;
	padding-left: 20px;
}

.cart__discount form input::-webkit-input-placeholder {
	color: #b7b7b7;
}

.cart__discount form input::-moz-placeholder {
	color: #b7b7b7;
}

.cart__discount form input:-ms-input-placeholder {
	color: #b7b7b7;
}

.cart__discount form input::-ms-input-placeholder {
	color: #b7b7b7;
}

.cart__discount form input::placeholder {
	color: #b7b7b7;
}

.cart__discount form button {
	font-size: 14px;
	color: #ffffff;
	font-weight: 700;
	letter-spacing: 2px;
	text-transform: uppercase;
	background: #111111;
	padding: 0 30px;
	border: none;
	position: absolute;
	right: 0;
	top: 0;
	height: 100%;
}

.cart__total {
	background: #f3f2ee;
	padding: 35px 40px 40px;
}

.cart__total h6 {
	color: #111111;
	text-transform: uppercase;
	margin-bottom: 12px;
}

.cart__total ul {
	margin-bottom: 25px;
}

.cart__total ul li {
	list-style: none;
	font-size: 16px;
	color: #444444;
	line-height: 40px;
	overflow: hidden;
}

.cart__total ul li span {
	font-weight: 700;
	color: #e53637;
	float: right;
}

.cart__total .primary-btn {
	display: block;
	padding: 12px 10px;
	text-align: center;
	letter-spacing: 2px;
}

/*---------------------
  Checkout
-----------------------*/

.coupon__code {
	color: #0d0d0d;
	font-size: 14px;
	border-top: 2px solid #77b527;
	background: #f5f5f5;
	padding: 23px 30px 18px;
	margin-bottom: 50px;
}

.coupon__code span {
	margin-right: 15px;
}

.coupon__code a {
	color: #0d0d0d;
}

.checkout__title {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	border-bottom: 1px solid #e1e1e1;
	padding-bottom: 25px;
	margin-bottom: 30px;
}

.checkout__input {
	margin-bottom: 6px;
}

.checkout__input p {
	color: #111111;
	margin-bottom: 12px;
}

.checkout__input p span {
	color: #e53637;
}

.checkout__input input {
	height: 50px;
	width: 100%;
	border: 1px solid #e1e1e1;
	font-size: 14px;
	color: #b7b7b7;
	padding-left: 20px;
	margin-bottom: 20px;
}

.checkout__input input::-webkit-input-placeholder {
	color: #b7b7b7;
}

.checkout__input input::-moz-placeholder {
	color: #b7b7b7;
}

.checkout__input input:-ms-input-placeholder {
	color: #b7b7b7;
}

.checkout__input input::-ms-input-placeholder {
	color: #b7b7b7;
}

.checkout__input input::placeholder {
	color: #b7b7b7;
}

.checkout__input__checkbox label {
	font-size: 15px;
	color: #0d0d0d;
	position: relative;
	padding-left: 30px;
	cursor: pointer;
	margin-bottom: 16px;
	display: block;
}

.checkout__input__checkbox label input {
	position: absolute;
	visibility: hidden;
}

.checkout__input__checkbox label input:checked~.checkmark {
	border-color: #e53637;
}

.checkout__input__checkbox label input:checked~.checkmark:after {
	opacity: 1;
}

.checkout__input__checkbox label .checkmark {
	position: absolute;
	left: 0;
	top: 3px;
	height: 14px;
	width: 14px;
	border: 1.5px solid #d7d7d7;
	content: "";
	border-radius: 2px;
}

.checkout__input__checkbox label .checkmark:after {
	position: absolute;
	left: 1px;
	top: -3px;
	width: 14px;
	height: 7px;
	border: solid #e53637;
	border-width: 1.5px 1.5px 0px 0px;
	-webkit-transform: rotate(127deg);
	-ms-transform: rotate(127deg);
	transform: rotate(127deg);
	content: "";
	opacity: 0;
}

.checkout__input__checkbox p {
	color: #0d0d0d;
	font-size: 14px;
	line-height: 24px;
	margin-bottom: 22px;
}

.checkout__order {
	background: #f3f2ee;
	padding: 30px;
}

.checkout__order .order__title {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	border-bottom: 1px solid #d7d7d7;
	padding-bottom: 25px;
	margin-bottom: 30px;
}

.checkout__order p {
	color: #444444;
	font-size: 16px;
	line-height: 28px;
}

.checkout__order .site-btn {
	width: 100%;
	margin-top: 8px;
}

.checkout__order__products {
	font-size: 16px;
	color: #111111;
	overflow: hidden;
	margin-bottom: 18px;
}

.checkout__order__products span {
	float: right;
}

.checkout__total__products {
	margin-bottom: 20px;
}

.checkout__total__products li {
	font-size: 16px;
	color: #444444;
	list-style: none;
	line-height: 26px;
	overflow: hidden;
	margin-bottom: 15px;
}

.checkout__total__products li:last-child {
	margin-bottom: 0;
}

.checkout__total__products li span {
	color: #111111;
	float: right;
}

.checkout__total__all {
	border-top: 1px solid #d7d7d7;
	border-bottom: 1px solid #d7d7d7;
	padding: 15px 0;
	margin-bottom: 26px;
}

.checkout__total__all li {
	list-style: none;
	font-size: 16px;
	color: #111111;
	line-height: 40px;
	overflow: hidden;
}

.checkout__total__all li span {
	color: #e53637;
	font-weight: 700;
	float: right;
}

/*---------------------
    Blog
-----------------------*/

.blog {
	padding-bottom: 55px;
}

.latest {
	padding-bottom: 55px;
}

.blog__item {
	margin-bottom: 45px;
}

.blog__item:hover a::after {
	width: 40px;
	background: #e53637;
}

.blog__item:hover .blog__item__text {
	-webkit-box-shadow: 0px 15px 60px rgba(67, 69, 70, 0.05);
	box-shadow: 0px 15px 60px rgba(67, 69, 70, 0.05);
}

.blog__item__pic {
	height: 270px;
}

.blog__item__text {
	padding: 30px 30px 25px;
	margin: 0 30px;
	margin-top: -35px;
	background: #ffffff;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.blog__item__text span {
	color: #3d3d3d;
	font-size: 13px;
	display: block;
	margin-bottom: 10px;
}

.blog__item__text span img {
	margin-right: 6px;
}

.blog__item__text h5 {
	color: #0d0d0d;
	font-weight: 700;
	line-height: 28px;
	margin-bottom: 10px;
}

.blog__item__text a {
	display: inline-block;
	color: #111111;
	font-size: 13px;
	font-weight: 700;
	letter-spacing: 4px;
	text-transform: uppercase;
	padding: 3px 0;
	position: relative;
}

.blog__item__text a:after {
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #111111;
	content: "";
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

/*---------------------
  Blog Sidebar
-----------------------*/

.blog__sidebar__item {
	text-align: center;
	margin-bottom: 65px;
}

.blog__sidebar__item:last-child {
	margin-bottom: 0;
}

.blog__sidebar__item form input {
	height: 50px;
	font-size: 15px;
	color: #444444;
	padding-left: 20px;
	border: 1px solid #e1e1e1;
	width: 100%;
	margin-bottom: 20px;
}

.blog__sidebar__item form input::-webkit-input-placeholder {
	color: #444444;
}

.blog__sidebar__item form input::-moz-placeholder {
	color: #444444;
}

.blog__sidebar__item form input:-ms-input-placeholder {
	color: #444444;
}

.blog__sidebar__item form input::-ms-input-placeholder {
	color: #444444;
}

.blog__sidebar__item form input::placeholder {
	color: #444444;
}

.blog__sidebar__title {
	text-align: center;
	margin-bottom: 35px;
}

.blog__sidebar__title h4 {
	color: #111111;
	font-weight: 700;
	position: relative;
	padding-bottom: 20px;
}

.blog__sidebar__title h4::before {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	height: 5px;
	width: 70px;
	background: #e1e1e1;
	content: "";
	margin: 0 auto;
}

.blog__sidebar__social a {
	display: inline-block;
	font-size: 18px;
	color: #111111;
	width: 50px;
	height: 50px;
	background: #f2f2f2;
	border-radius: 50%;
	line-height: 50px;
	text-align: center;
	margin-right: 6px;
}

.blog__sidebar__social a:last-child {
	margin-right: 6px;
}

.recent__item {
	display: block;
	overflow: hidden;
	margin-bottom: 25px;
	text-align: left;
}

.recent__item__pic {
	float: left;
	margin-right: 25px;
}

.recent__item__text {
	overflow: hidden;
}

.recent__item__text h6 {
	color: #111111;
	line-height: 21px;
	font-weight: 700;
}

.recent__item__text span {
	font-size: 13px;
	color: #888888;
}

/*---------------------
  Blog Hero
-----------------------*/

.blog-hero {
	background: #f3f2ee;
	padding-top: 125px;
	padding-bottom: 190px;
}

.blog__hero__text h2 {
	color: #111111;
	font-size: 42px;
	font-weight: 700;
	line-height: 50px;
	margin-bottom: 18px;
}

.blog__hero__text ul li {
	list-style: none;
	font-size: 15px;
	color: #3d3d3d;
	display: inline-block;
	margin-right: 40px;
	position: relative;
}

.blog__hero__text ul li:after {
	position: absolute;
	right: -25px;
	top: 0;
	content: "|";
}

.blog__hero__text ul li:last-child {
	margin-right: 0;
}

.blog__hero__text ul li:last-child:after {
	display: none;
}

/*---------------------
  Blog Details
-----------------------*/

.blog-details {
	margin-top: -115px;
	padding-top: 0;
}

.blog__details__content {
	position: relative;
}

.blog__details__pic {
	margin-bottom: 60px;
}

.blog__details__pic img {
	min-width: 100%;
	border-radius: 5px;
}

.blog__details__share {
	text-align: center;
	position: absolute;
	left: -120px;
	top: 0;
}

.blog__details__share span {
	color: #111111;
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 700;
	display: block;
	margin-bottom: 30px;
}

.blog__details__share ul li {
	list-style: none;
	margin-bottom: 15px;
}

.blog__details__share ul li a {
	color: #ffffff;
	font-size: 18px;
	height: 46px;
	display: inline-block;
	width: 46px;
	border-radius: 50%;
	line-height: 46px;
	text-align: center;
	background: #4267b2;
}

.blog__details__share ul li a.twitter {
	background: #1da1f2;
}

.blog__details__share ul li a.youtube {
	background: #fe0003;
}

.blog__details__share ul li a.linkedin {
	background: #0173b2;
}

.blog__details__text {
	margin-bottom: 50px;
}

.blog__details__text p {
	font-size: 18px;
	line-height: 34px;
}

.blog__details__text p:last-child {
	margin-bottom: 0;
}

.blog__details__quote {
	background: #f3f2ee;
	padding: 50px 40px 35px;
	border-radius: 5px;
	position: relative;
	margin-bottom: 45px;
}

.blog__details__quote i {
	font-size: 16px;
	color: #ffffff;
	height: 50px;
	width: 50px;
	background: #e53637;
	border-radius: 50%;
	line-height: 50px;
	text-align: center;
	position: absolute;
	left: 40px;
	top: -25px;
}

.blog__details__quote p {
	color: #111111;
	font-size: 18px;
	font-weight: 600;
	font-style: italic;
	margin-bottom: 20px;
}

.blog__details__quote h6 {
	color: #e53637;
	font-size: 15px;
	font-weight: 700;
	text-transform: uppercase;
}

.blog__details__option {
	border-top: 1px solid #e5e5e5;
	padding-top: 15px;
	margin-bottom: 70px;
}

.blog__details__author__pic {
	display: inline-block;
	margin-right: 15px;
}

.blog__details__author__pic img {
	height: 46px;
	width: 46px;
	border-radius: 50%;
}

.blog__details__author__text {
	display: inline-block;
}

.blog__details__author__text h5 {
	color: #111111;
	font-weight: 700;
}

.blog__details__tags {
	text-align: right;
}

.blog__details__tags a {
	display: inline-block;
	color: #111111;
	font-weight: 700;
	margin-right: 10px;
}

.blog__details__tags a:last-child {
	margin-right: 0;
}

.blog__details__btns {
	margin-bottom: 40px;
}

.blog__details__btns__item {
	display: block;
	border: 1px solid #ebebeb;
	padding: 25px 30px 30px;
	margin-bottom: 30px;
}

.blog__details__btns__item.blog__details__btns__item--next {
	text-align: right;
}

.blog__details__btns__item.blog__details__btns__item--next p span {
	margin-right: 0;
	margin-left: 5px;
}

.blog__details__btns__item p {
	color: #b7b7b7;
	margin-bottom: 10px;
}

.blog__details__btns__item p span {
	font-size: 20px;
	position: relative;
	top: 4px;
	margin-right: 5px;
}

.blog__details__btns__item h5 {
	color: #111111;
	font-size: 20px;
	line-height: 30px;
	font-weight: 700;
}

.blog__details__comment h4 {
	color: #333333;
	font-weight: 700;
	margin-bottom: 35px;
	text-align: center;
}

.blog__details__comment form input {
	height: 50px;
	width: 100%;
	border: 1px solid #e1e1e1;
	padding-left: 20px;
	font-size: 15px;
	color: #b7b7b7;
	margin-bottom: 30px;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.blog__details__comment form input::-webkit-input-placeholder {
	color: #b7b7b7;
}

.blog__details__comment form input::-moz-placeholder {
	color: #b7b7b7;
}

.blog__details__comment form input:-ms-input-placeholder {
	color: #b7b7b7;
}

.blog__details__comment form input::-ms-input-placeholder {
	color: #b7b7b7;
}

.blog__details__comment form input::placeholder {
	color: #b7b7b7;
}

.blog__details__comment form input:focus {
	border-color: #000000;
}

.blog__details__comment form textarea {
	height: 120px;
	width: 100%;
	border: 1px solid #e1e1e1;
	padding-left: 20px;
	padding-top: 12px;
	font-size: 15px;
	color: #b7b7b7;
	margin-bottom: 24px;
	resize: none;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.blog__details__comment form textarea::-webkit-input-placeholder {
	color: #b7b7b7;
}

.blog__details__comment form textarea::-moz-placeholder {
	color: #b7b7b7;
}

.blog__details__comment form textarea:-ms-input-placeholder {
	color: #b7b7b7;
}

.blog__details__comment form textarea::-ms-input-placeholder {
	color: #b7b7b7;
}

.blog__details__comment form textarea::placeholder {
	color: #b7b7b7;
}

.blog__details__comment form textarea:focus {
	border-color: #000000;
}

.blog__details__comment form button {
	letter-spacing: 4px;
	padding: 14px 35px;
}

/*---------------------
  Map
-----------------------*/

.map {
	height: 500px;
}

.map iframe {
	width: 100%;
}

/*---------------------
  Contact
-----------------------*/

.contact__text .section-title {
	text-align: left;
	margin-bottom: 40px;
}

.contact__text .section-title h2 {
	font-size: 48px;
	margin-bottom: 18px;
}

.contact__text .section-title p {
	color: #707070;
	line-height: 26px;
	margin-bottom: 0;
}

.contact__text ul li {
	list-style: none;
	margin-bottom: 26px;
}

.contact__text ul li:last-child {
	margin-bottom: 0;
}

.contact__text ul li h4 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 8px;
}

.contact__text ul li p {
	line-height: 27px;
	margin-bottom: 0;
}

.contact__form input {
	height: 50px;
	width: 100%;
	border: 1px solid #e1e1e1;
	padding-left: 20px;
	font-size: 15px;
	color: #b7b7b7;
	margin-bottom: 30px;
}

.contact__form input::-webkit-input-placeholder {
	color: #b7b7b7;
}

.contact__form input::-moz-placeholder {
	color: #b7b7b7;
}

.contact__form input:-ms-input-placeholder {
	color: #b7b7b7;
}

.contact__form input::-ms-input-placeholder {
	color: #b7b7b7;
}

.contact__form input::placeholder {
	color: #b7b7b7;
}

.contact__form textarea {
	height: 150px;
	width: 100%;
	border: 1px solid #e1e1e1;
	padding-left: 20px;
	padding-top: 12px;
	font-size: 15px;
	color: #b7b7b7;
	margin-bottom: 24px;
	resize: none;
}

.contact__form textarea::-webkit-input-placeholder {
	color: #b7b7b7;
}

.contact__form textarea::-moz-placeholder {
	color: #b7b7b7;
}

.contact__form textarea:-ms-input-placeholder {
	color: #b7b7b7;
}

.contact__form textarea::-ms-input-placeholder {
	color: #b7b7b7;
}

.contact__form textarea::placeholder {
	color: #b7b7b7;
}

.contact__form button {
	letter-spacing: 4px;
	padding: 14px 35px;
}

/*--------------------------------- Responsive Media Quaries -----------------------------*/

@media only screen and (min-width: 1200px) {
	.container {
		max-width: 1170px;
	}
}

/* Medium Device = 1200px */

@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.categories__text h2 {
		font-size: 26px;
	}
	.header__menu ul li {
		margin-right: 38px;
	}
	.hero__slider.owl-carousel .owl-nav button {
		left: 2px;
	}
	.hero__slider.owl-carousel .owl-nav button.owl-next {
		right: 2px;
	}
	.testimonial__text {
		padding: 130px 45px 175px;
	}
}

/* Tablet Device = 768px */

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.header__menu ul li {
		margin-right: 10px;
	}
	.header__nav__option a {
		margin-right: 10px;
	}
	.header__nav__option .price {
		margin-left: 0;
	}
	.hero__slider.owl-carousel .owl-nav button {
		left: 2px;
	}
	.hero__slider.owl-carousel .owl-nav button.owl-next {
		right: 2px;
	}
	.banner__item.banner__item--middle {
		margin-top: 0;
	}
	.banner__item.banner__item--last {
		margin-top: 0;
	}
	.banner__item {
		margin-bottom: 40px;
	}
	.banner {
		padding-bottom: 60px;
	}
	.categories__text {
		margin-bottom: 40px;
	}
	.categories__hot__deal {
		margin-bottom: 40px;
	}
	.instagram__text {
		padding-top: 70px;
	}
	.shop__sidebar {
		padding-right: 0;
		padding-top: 40px;
	}
	.cart__discount {
		margin-top: 40px;
	}
	.testimonial__text {
		padding: 100px 105px 100px;
	}
	.blog__details__share {
		position: relative;
		left: 0;
		margin-bottom: 18px;
	}
	.blog__details__share span {
		margin-bottom: 14px;
		margin-right: 0;
	}
	.blog__details__share ul li {
		margin-bottom: 15px;
		display: inline-block;
		margin-right: 10px;
	}
	.blog__details__share ul li:last-child {
		margin-right: 0;
	}
}

/* Wide Mobile = 480px */

@media only screen and (max-width: 767px) {
	.canvas__open {
		display: block;
		font-size: 22px;
		color: #111111;
		height: 35px;
		width: 35px;
		line-height: 35px;
		text-align: center;
		border: 1px solid #111111;
		border-radius: 2px;
		cursor: pointer;
		position: absolute;
		right: 15px;
		top: 25px;
	}
	.offcanvas-menu-overlay {
		position: fixed;
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
		background: rgba(0, 0, 0, 0.7);
		content: "";
		z-index: 98;
		-webkit-transition: all, 0.5s;
		-o-transition: all, 0.5s;
		transition: all, 0.5s;
		visibility: hidden;
	}
	.offcanvas-menu-overlay.active {
		visibility: visible;
	}
	.offcanvas-menu-wrapper {
		position: fixed;
		left: -300px;
		width: 300px;
		height: 100%;
		background: #ffffff;
		padding: 50px 20px 30px 30px;
		display: block;
		z-index: 99;
		overflow-y: auto;
		-webkit-transition: all, 0.5s;
		-o-transition: all, 0.5s;
		transition: all, 0.5s;
		opacity: 0;
	}
	.offcanvas-menu-wrapper.active {
		opacity: 1;
		left: 0;
	}
	.offcanvas__menu {
		display: none;
	}
	.slicknav_btn {
		display: none;
	}
	.slicknav_menu {
		background: transparent;
		padding: 0;
		margin-bottom: 20px;
	}
	.slicknav_nav ul {
		margin: 0;
	}
	.slicknav_nav .slicknav_row,
	.slicknav_nav a {
		padding: 7px 0;
		margin: 0;
		color: #111111;
		font-weight: 600;
	}
	.slicknav_nav .slicknav_arrow {
		color: #111111;
	}
	.slicknav_nav .slicknav_row:hover {
		border-radius: 0;
		background: transparent;
		color: #111111;
	}
	.slicknav_nav a:hover {
		border-radius: 0;
		background: transparent;
		color: #111111;
	}
	.slicknav_nav {
		display: block !important;
	}
	.offcanvas__option {
		text-align: center;
		margin-bottom: 30px;
	}
	.offcanvas__links {
		display: inline-block;
		margin-right: 25px;
	}
	.offcanvas__links a {
		color: #111111;
		font-size: 13px;
		text-transform: uppercas;
		letter-spacing: 2px;
		margin-right: 16px;
		display: inline-block;
		font-weight: 600;
	}
	.offcanvas__links a:last-child {
		margin-right: 0;
	}
	.offcanvas__top__hover {
		display: inline-block;
		position: relative;
	}
	.offcanvas__top__hover:hover ul {
		top: 24px;
		opacity: 1;
		visibility: visible;
	}
	.offcanvas__top__hover span {
		color: #111111;
		font-size: 13px;
		text-transform: uppercase;
		letter-spacing: 2px;
		display: inline-block;
		cursor: pointer;
		font-weight: 600;
	}
	.offcanvas__top__hover span i {
		font-size: 20px;
		position: relative;
		top: 3px;
		right: 2px;
	}
	.offcanvas__top__hover ul {
		background: #111111;
		display: inline-block;
		padding: 2px 0;
		position: absolute;
		left: 0;
		top: 44px;
		opacity: 0;
		visibility: hidden;
		z-index: 3;
		-webkit-transition: all, 0.3s;
		-o-transition: all, 0.3s;
		transition: all, 0.3s;
	}
	.offcanvas__top__hover ul li {
		list-style: none;
		font-size: 13px;
		color: #ffffff;
		padding: 2px 15px;
		cursor: pointer;
	}
	.offcanvas__nav__option {
		text-align: center;
		margin-bottom: 25px;
	}
	.offcanvas__nav__option a {
		display: inline-block;
		margin-right: 26px;
		position: relative;
	}
	.offcanvas__nav__option a span {
		color: #0d0d0d;
		font-size: 11px;
		position: absolute;
		left: 5px;
		top: 8px;
	}
	.offcanvas__nav__option a:last-child {
		margin-right: 0;
	}
	.offcanvas__nav__option .price {
		font-size: 15px;
		color: #111111;
		font-weight: 700;
		display: inline-block;
		margin-left: -20px;
		position: relative;
		top: 3px;
	}
	.offcanvas__text p {
		color: #111111;
		margin-bottom: 0;
	}
	.header__top {
		display: none;
	}
	.header .container {
		position: relative;
	}
	.header__menu {
		display: none;
	}
	.header__nav__option {
		display: none;
	}
	.search-model-form input {
		width: 100%;
		font-size: 24px;
	}
	.hero__slider.owl-carousel .owl-nav button {
		left: 15px;
		top: 80%;
	}
	.hero__slider.owl-carousel .owl-nav button.owl-next {
		left: 75px;
		right: 0;
	}
	.banner__item.banner__item--middle {
		margin-top: 0;
	}
	.banner__item.banner__item--last {
		margin-top: 0;
	}
	.banner__item {
		margin-bottom: 40px;
	}
	.banner {
		padding-bottom: 60px;
	}
	.banner__item__pic {
		float: none;
	}
	.banner__item__pic img {
		min-width: 100%;
	}
	.banner__item__text {
		max-width: 100%;
		position: relative;
		top: 0;
		padding-top: 22px;
	}
	.filter__controls li {
		margin-right: 15px;
	}
	.categories__text {
		margin-bottom: 40px;
	}
	.categories__hot__deal {
		margin-bottom: 40px;
	}
	.instagram__text {
		padding-top: 70px;
	}
	.instagram__pic__item {
		width: 50%;
	}
	.shop__product__option__right {
		text-align: left;
		padding-top: 20px;
	}
	.shop__sidebar {
		padding-right: 0;
		margin-bottom: 40px;
	}
	.testimonial__text {
		padding: 100px 40px 100px;
	}
	.product__details__breadcrumb {
		text-align: left;
	}
	.product__details__pic .nav-tabs {
		width: auto;
		margin-bottom: 40px;
	}
	.product__details__pic .nav-tabs .nav-item {
		margin-bottom: 0;
		margin-right: 10px;
	}
	.product__details__option__size {
		display: block;
		margin-right: 0;
		margin-bottom: 25px;
	}
	.product__details__last__option h5:before {
		width: 440px;
	}
	.product__details__tab .nav-tabs .nav-item {
		margin-bottom: 15px;
	}
	.shopping__cart__table {
		overflow-y: auto;
	}
	.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__pic {
		float: none;
		margin-right: 0;
	}
	.continue__btn {
		text-align: center;
	}
	.continue__btn.update__btn {
		text-align: center;
		margin-top: 20px;
	}
	.cart__discount {
		margin-top: 40px;
	}
	.checkout__order {
		margin-top: 20px;
	}
	.blog__details__share {
		position: relative;
		left: 0;
		margin-bottom: 18px;
	}
	.blog__details__share span {
		margin-bottom: 14px;
		margin-right: 0;
	}
	.blog__details__share ul li {
		margin-bottom: 15px;
		display: inline-block;
		margin-right: 10px;
	}
	.blog__details__share ul li:last-child {
		margin-right: 0;
	}
	.blog__details__author {
		text-align: center;
		margin-bottom: 20px;
	}
	.blog__details__tags {
		text-align: center;
	}
	.contact__text {
		margin-bottom: 40px;
	}
	.hero__social {
		margin-top: 180px;
	}
}

/* Small Device = 320px */

@media only screen and (max-width: 479px) {
	.cart__total {
		padding: 35px 30px 40px;
	}
	.hero__items {
		height: auto;
		padding-top: 130px;
		padding-bottom: 40px;
	}
	.hero__text h2 {
		font-size: 36px;
		line-height: 48px;
	}
	.hero__social {
		margin-top: 145px;
	}
	.categories__deal__countdown .categories__deal__countdown__timer {
		margin-left: 0;
	}
	.instagram__pic__item {
		width: 100%;
	}
	.testimonial__text {
		padding: 60px 40px 60px;
	}
	.product__details__pic .nav-tabs .nav-item .nav-link .product__thumb__pic {
		width: 100%;
	}
	.product__details__pic .nav-tabs .nav-item {
		margin-bottom: 10px;
		width: calc(33.33% - 10px);
	}
	.product__details__last__option h5:before {
		width: 280px;
	}
	.product__details__cart__option .quantity {
		margin-right: 0;
		margin-bottom: 15px;
	}
	.product__details__last__option h5 span {
		font-size: 16px;
	}
	.blog__hero__text h2 {
		font-size: 36px;
	}
	.categories__text h2 {
		font-size: 30px;
		line-height: 55px;
	}
	.categories__text:before {
		height: 250px;
	}
}
</style>