
<?php

require_once('../database/dbhelper.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScrseipt -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Quản lý sản phẩm</title>
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="../index.php">Thống kê</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="../category/">Quản lý Danh Mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="../customer/">Quản lý khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../product/">Quản lý sản phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../dashboard.php">Quản lý giỏ hàng</a>
        </li>
    </ul>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Quản lý Khách Hàng</h2>
            </div>
            <div class="panel-body"></div>
            
            <table class="table table-bordered table-hover">
                <thead>
                    <tr style="font-weight: 500;">
                        <td width="70px">STT</td>
                        <td>Họ tên khách hàng</td>
                        <td>Tên tài khoản</td>
                        <td>Mật khẩu</td>
                        <td>Số điện thoại</td>
                        <td>Email</td>
                        <td width="50px"></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Lấy danh sách Sản Phẩm
                    if (!isset($_GET['page'])) {
                        $pg = 1;
                        echo 'Bạn đang ở trang: 1';
                    } else {
                        $pg = $_GET['page'];
                        echo 'Bạn đang ở trang: ' . $pg;
                    }

                    try {

                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $limit = 5;
                        $start = ($page - 1) * $limit;
                        $sql = "SELECT * FROM tbl_dangky limit $start,$limit";
                        executeResult($sql);
                        // $sql = 'select * from product limit $star,$limit';
                        $productList = executeResult($sql);

                        $index = 1;
                        foreach ($productList as $item) {
                            echo '  <tr>
                    <td>' . ($index++) . '</td>
                    <td>' . $item['tenkhachhang'] . '</td>
                    <td>' . $item['tendangnhap'] .'</td>
                    <td>' . $item['email'] . '</td>
                    <td>' . $item['diachi'] . '</td>
                    <td>' . $item['dienthoai'] . '</td>
                    <td>            
                    <button class="btn btn-danger" onclick="deleteCustomer(' . $item['id_dangky'] . ')">Xoá</button>
                    </td>
                </tr>';
                        }
                    } catch (Exception $e) {
                        die("Lỗi thực thi sql: " . $e->getMessage());
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <ul class="pagination">
            <?php
            $sql = "SELECT * FROM `user`";
            $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
            $result = mysqli_query($conn, $sql);
            $current_page = 0;
            if (mysqli_num_rows($result)) {
                $numrow = mysqli_num_rows($result);
                $current_page = ceil($numrow / 5);
                // echo $current_page;
            }
            for ($i = 1; $i <= $current_page; $i++) {
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page) {
                    echo '
            <li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                } else {
                    echo '
            <li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>
                    ';
                }
            }
            ?>
        </ul>
    </div>

    </div>
    <script type="text/javascript">
        function deleteCustomer(id) {
            var option = confirm('Bạn có chắc chắn muốn xoá người dùng này không?')
            if (!option) {
                return;
            }

            console.log(id)
            //ajax - lenh post
            $.post('ajax.php', {
                'id_dangky': id,
                'action': 'delete'
            }, function(data) {
                location.reload()
            })
        }
    </script>
</body>

</html>