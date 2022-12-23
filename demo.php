<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="css/Quần dài 1.css">
  <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script><!--link lấy icon -->
</head>

<body>
  <section>
    <div class="container flex">
      <div class="left">
        <div class="main_image">
          <img src="image/p43.png" class="slide">
        </div>
        <div class="option flex">
          <img src="image/p43.png" onclick="img('image/p43.png')">
          <img src="image/p44.png" onclick="img('image/p44.png')">
          <img src="image/p45.png" onclick="img('image/p45.png')">
          <img src="image/p46.png" onclick="img('image/p46.png')">
          <img src="image/p47.png" onclick="img('image/p47.png')">
          <img src="image/p48.png" onclick="img('image/p48.png')">
        </div>
      </div>
      <div class="right">
        <h3>Cargo Pants - Black</h3>
        <h2 > 620.000<small> ₫</small> </h2>
        <h1> Chất liệu vải sợi tổng hợp. Hình mặt trước quần và logo DirtyCoins áp dụng kĩ thuật in lụa, lưng thun, có túi hai bên. Túi quần sau có nắp kèm nút bấm. Logo DirtyCoins thêu trên túi. </h1>

          <h6>Size</h6>
          <div id="myDIV">
            <button class="btn">S</button>
            <button class="btn active">M</button>
            <button class="btn">L</button>
          
          </div>
          
          <script>
          // Add active class to the current button (highlight it)
          var header = document.getElementById("myDIV");
          var btns = header.getElementsByClassName("btn");
          for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
            });
          }
          </script>
        <button class="button2">Add to Bag</button>
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.home');
      line.style.background = change;
    }
  </script>
<h4 class="sanpham">You Might Also Like</h4>
<ul id="list-products">
  <div class="item">
      <img src="image/p7.png" width="300" alt="">
      <div class="name">DC x OP Brook Hoodie - Blue</div>
      <div class="price">699.000₫</div>
  </div>
  <div class="item">
    <img src="image/p1.png" width="300" alt="">
    <div class="name">DC x OP Luffy Raglan Hoodie - Multicolor</div>
    <div class="price">720.000₫</div>
</div>
<div class="item">
  <img src="image/p13.png" width="300" alt="">
  <div class="name">DC x OP Luffy Attack T-shirt - White</div>
  <div class="price">420.000₫</div>
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
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  
  body {/*Chỉnh background sau ảnh*/
    font-family: sans-serif;
    background: #ffffff;
  }
  
  .container {/*Chỉnh border trên background*/
    max-width: 75%;
    margin: auto;
    height: 86vh;
    margin-top: 5%;
    background: #ffffff;
   
  }
  
  .left, .right {
    width: 50%;
    padding: 30px;
  }
  
  .flex {/*Chỉnh cho chữ ngang hàng với hình*/
    display: flex;
    justify-content: space-between;
  }
  
  .flex1 {/*Chỉnh color*/
    display: flex;
  }
  
  .main_image {
    width: auto;
    height: auto;
  }
  
  .option img {/*Chỉnh hình nhỏ bên dưới ảnh lớn*/
    width: 75px;
    height: 75px;
    padding: 10px;
    border: 1px solid #a8a6a7;
  }
  
  .right {/*Chỉnh cho chữ so với bên phaỉ lề*/
    padding: 50px 100px 50px 50px;
  }
  
  h3 {/*Chỉnh tên sản phẩm*/
    color: #000000;
    margin: 20px 0 20px 0;
    font-size: 25px;
  }
  
  h5,/*Chỉnh màu chữ*/
  h1,
  small {
    color: #020202;
  }
  
  h2 {/*Chỉnh màu giá tiền*/
    color: rgb(1, 1, 1);
    margin-bottom:10px;
    font-size:20px;
    font-weight:530
  }
  
  h1 {/*Chỉnh khoảng cách chữ phần mô tả sản phẩm*/
    margin: 20px 0 50px 0;
    line-height: 25px;
    font-size:14.5px;
    font-weight:300;
  }
  
  
  h5 {/*Chỉnh màu chữ Color*/
    font-size: 15px;
  }
  
  
  
  
  /*------------------Size-------------------------*/  
  
  h6{
    font-size: 16px;
    font-weight:300;
    margin-bottom:-80px
  }
  
  .btn {
    border: none;
    outline: none;
    background-color: #fffefe;
    border: 2px solid #c2c2c2;
    color:black;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    width:70px
  }
  
  /* Style the active class, and buttons on mouse-over */
  .active, .btn:hover {
    border: 2px solid #000000;
  }
  
  
  /*------------------Add to Bag-----------------*/
  
  button {/*Chỉnh nút Add to Bag*/
    width: 100%;
    padding: 10px;
    border: none;
    outline: none;
    background: #000000;
    color: white;
    margin-top: 25%;
    border-radius: 30px;
    font-size: 14px;
  }
  .button2:hover{
    background:orange;
  }
  
  @media only screen and (max-width:768px) {
    .container {
      max-width: 90%;
      margin: auto;
      height: auto;
    }
  
    .left, .right {
      width: 100%;
    }
  
    .container {
      flex-direction: column;
    }
  }
  
  @media only screen and (max-width:511px) {/*Chỉnh kich cỡ cả khung*/
    .container {
      max-width: 100%;
      height: auto;
      padding: 10px;
    }
  
    .left, .right {
      padding: 0;
    }
  
    img {
      width: 100%;
      height: 100%;
    }
  
    .option {
      display: flex;
      flex-wrap: wrap;
    }
  }
  /*--------------------You Might Also Like--------------*/
  .sanpham{/*Chỉnh chữ*/
    margin-top:110px;
    margin-bottom:40px;
    margin-left: 180px;
    font-size:22px;
    text-align: left;
  
  }
  .name{/*Chỉnh tên sản phẩm*/
    font-size: 17px;
  }
  .price{/*Chỉnh giá sản phẩm*/
    font-size: 14px;
    margin-bottom:100px;
  }
  #list-products {/* chỉnh hình ảnh*/
    display: flex;
    list-style: none;
    justify-content: space-around;
    align-items: center;
    margin-left:130px;
    margin-right:130px;
    
    
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
    list-style: none;
    
   
  }
  
  
  
</style>