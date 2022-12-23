<?php /*
    session_start();
	if(!isset($_SESSION['submit'])){
		header('Location: login.php');
	}
 */ ?>

<?php require_once('database/config.php');
require_once('database/dbhelper.php');?>
<?php 
include("Layout/header.php"); 
?>

<!--------------------BANNER ONE PIECE--------------------------- -->
<div id="banner1" style="background-repeat:no-repeat;">
        <div class="box-left" >
            <a href="thucdon_2.php?id_sanpham=1"><button>Mua ngay </button><!--nút mua hàng --></a>
        </div>
 </div>
<!--------------------NEW ARRIVALS--------------------------- -->
   <section class="main">
            <section class="recently" style="padding-bottom: 50px;">
                <div class="title">
                    <h1 >NEW ARRIVALS</h1>
                </div>
                <div class="product-recently">
                    <div class="row">
                        <?php
                        $sql = 'SELECT * from product, order_details where order_details.product_id=product.id order by order_details.num DESC limit 4';
                        $productList = executeResult($sql);
                        $index = 1;
                        foreach ($productList as $item) {
                            echo '
                                <div class="col">
                                    <a href="details.php?id=' . $item['product_id'] . '">
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
                                                <span>5.0</span>
                                            </div>
                                            <div class="time">
                                                <img src="images/icon/icon-clock.svg" alt="">
                                                <span>100 comment</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                ';
                        }
                        ?>
                    </div>
                </div>
            </section>   
<!--------------------BANNER SPRING OF THE Y--------------------------- -->
    <div id="banner2"><!--banner2 baneer rồng -->
        <div class="box-left" >
            <h2>
                <span>SPRING OF THE ¥ </span>
            </h2>
            <a href="thucdon_2.php?id_sanpham=2"><button>Mua ngay </button><!--nút mua hàng --></a>
        </div>
    </div>



<!--------------------BANNER LILIWYUN--------------------------- -->
    <div id="banner3"><!--banner3 banner liliwyun  -->
        <div class="box-left" >
            <a href="thucdon_2.php?id_sanpham=3"><button>Mua ngay </button><!--nút mua hàng --></a>
        </div>
    </div>



<!--------------------WHAT'S HOT--------------------------- -->
    <div id="new">
        <h2>WHAT'S HOT</h2>
        <ul id="list-new">
            <div class="item"><!--sản phẩm 1 -->
                <img src="/Web/images/new1.jpg"width="340" height="340"  alt="">                   
                <div class="name">DIRTYCOINS X LIL' WUYN: CÚ BẮT TAY </div>
                <div class="name">ĐẬM CHẤT VĂN HÓA ĐƯỜNG PHỐ</div>
            </div>
            <div class="box-left" >
                <a href="AboutUs/Dirtycoins/Dirtycoins.php"><button>Xem thêm </button><!--nút mua hàng --></a>
            </div>
            <div class="item"><!--sản phẩm 2 -->
                <img src="/Web/images/new2.jpg"width="340" height="340"  alt="">                   
                <div class="name" >7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET </div>
                <div class="name" >THU HÚT MỌI ÁNH</div>
            </div>  
            <div class="box-left" >
                <a href="AboutUs/7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET/7 TIPS PHỐI ĐỒ VỚI VARSITY JACKET.php"><button>Xem thêm </button><!--nút mua hàng --></a>
            </div>   
            <div class="item"><!--sản phẩm 1 -->
                <img src="/Web/images/new3.jpg"width="340" height="340"  alt="">                   
                <div class="name">THÔNG TIN CHƯƠNG TRÌNH </div>
                <div class="name">THẺ THÀNH VIÊN DIRTYCOINS</div>
            </div>
            <div class="box-left" >
                <a href="AboutUs/THÔNG TIN CHƯƠNG TRÌNH/THÔNG TIN CHƯƠNG TRÌNH.php"><button>Xem thêm </button><!--nút mua hàng --></a>
            </div>       
        </ul>
    </div>

<!-- Slider -->

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../libary/bootstrap/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="./public/css/style.css" />
</head>
<body>
<section class="suggest">
    <div class="container">
    <h2>Set đồ gợi ý</h2>
    <div class="suggest-content d-flex justify-content-between">
        <div class="suggest-item">
        <div class="suggest-image" data-bs-toggle="tooltip" data-bs-placement="top" title="" >
            <img src="./public/img/suggest1.png" alt="" data-toggle="tooltip" data-placement="top-0" title="Tooltip on left"/>
        </div>
        </div>
        <div class="suggest-item">
        <div class="suggest-image">
            <img src="./public/img/suggest2.png" alt="" />
        </div>
        </div>
        <div class="suggest-item">
        <div class="suggest-image">
            <img src="./public/img/suggest3.png" alt="" />
        </div>
        </div>
        <div class="suggest-item">
        <div class="suggest-image" data-bs-toggle="tooltip" data-bs-placement="top" title="" >
            <img src="./public/img/suggest4.png" alt="" data-toggle="tooltip" data-placement="top-0" title="Tooltip on left"/>
        </div>
        </div>
        <div class="suggest-item">
        <div class="suggest-image">
            <img src="./public/img/suggest5.png" alt="" />
        </div>
        </div>
        <div class="suggest-item">
        <div class="suggest-image">
            <img src="./public/img/suggest6.png" alt="" />
        </div>
        </div>
        <div class="suggest-item">
        <div class="suggest-image" data-bs-toggle="tooltip" data-bs-placement="top" title="" >
            <img src="./public/img/suggest7.png" alt="" data-toggle="tooltip" data-placement="top-0" title="Tooltip on left"/>
        </div>
        </div>
        <div class="suggest-item">
        <div class="suggest-image">
            <img src="./public/img/suggest8.png" alt="" />
        </div>
        </div>
        <div class="suggest-item">
        <div class="suggest-image">
            <img src="./public/img/suggest9.png" alt="" />
        </div>
        </div>
        <!-- <div class="suggest-item">
        <div class="suggest-image">
            <img src="./public/img/suggest4.png" alt="" />
        </div>
        </div> -->
    </div>
    </div>
</section>
<script
    type="text/javascript"
    src="https://code.jquery.com/jquery-1.11.0.min.js"
></script>
<script
    type="text/javascript"
    src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>
<script>$(".suggest-content").slick({
  dots: true,
  infinite: true,
	arrows:true,
  speed: 300,
  arrows: false,
  autoplay: true,
  slidesToShow: 3,
  centerMode: true,
  autoplaySpeed: 1000,
  prevArrow: `<button type='button' class='slick-prev pull-left slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>`,
  nextArrow: `<button type='button' class='slick-next pull-right slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>`,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        centerPadding: "40px",
      },
    },
    {
      breakpoint: 568,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        centerPadding: "40px",
      },
    },
  ],
});</script>
</body>

<!--------------------BANNER SALE--------------------------- -->
    <div id="banner4"><!--banner4 banner sale off  -->
        <div class="box-left" >
            <a href="dangky.php"><button>SIGN UP FOR FREE →</button><!--nút đăng ký --></a>
        </div>
    </div>
<style>     /* ------------------------Banner one piece------------------------------*/
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    
}
#banner1 {
    width: 100%;
    
    background-image :url("/Web/images/banner onepiece.png");
    
    height: 880px;/*chỉnh size banner*/
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
    margin-top:420px;/*chỉnh vị trí buttom lên xuống*/
    margin-left:-18px;/*chỉnh vị trí buttom trái phải*/
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
  section.main {
  padding: 0 0;
  width: 100%;
  margin: 0px auto;
}
section.main a {
  text-decoration: none;
}
section.main section.recently {
  padding-bottom: 3rem;
  padding-left: 3rem;
  padding-right: 3rem;
}
section.main section.recently .link a {
  text-decoration: none;
  color: black;
  font-size: 20px;
}
section.main section.recently .title h1 {
  font-size: 35px;
  margin: 0px;
  padding: 30px;
  color: black;
  text-align:center;
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
    background-image :url("/Web/images/Thum_MB_02.jpg");
    background-size:cover;
    height: 710px;/*chỉnh size banner*/
    margin-top:40px;
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
    background-image :url("/Web/images/thumbmoban.jpg");
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
    margin-top:470px;/*chỉnh lên xuống nút xem thêm */
    margin-left:-458px;/*chỉnh trái phải nút xem thêm*/
    
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
    margin-top: 50px;
    width: 100%;
    background-image :url("/Web/images/banner saleoff2.jpg");
    background-size:cover;
    height: 113px;/*chỉnh size banner*/
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
  @media screen and  (max-width: 870px)  and (min-width:300px){
    body {
   width: 1600px;
    }

}
</style>


<?php require_once('Layout/footer.php'); ?>
