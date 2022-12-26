<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Mailer{

    public function dathangmail($fullname, $email, $phone_number, $address, $cartList, $cart){
        $mail = new PHPMailer(true);   
        $mail->CharSet= 'UTF-8';
        $text_email = "<p>
            Xin chào ".$fullname.", Cảm ơn bạn đã mua hàng tại Degrey.vn
        </p>".
        "<p>Đơn hàng của bạn bao gồm: \n</p>";
        $text_email.='<table><thead>
        <tr style="font-weight: 500;text-align: center;">
            <td width="50px">STT</td>
            <td>Tên Sản Phẩm</td>
            <td>Số lượng</td>
            <td>Tổng tiền</td>
        </tr>
    </thead>';
        $count = 0;
        $total = 0;
        foreach ($cartList as $item) {
            $num = 0;
            foreach ($cart as $value) {
                if ($value['id'] == $item['id']) {
                    $num = $value['num'];
                    break;
                }
            }
            $total += $num * $item['price'];
            $text_email.= '
            <tr style="text-align: center;">
                <td width="50px">' . (++$count) . '</td>
                <td style="text-align:center; display:flex">
                    <img src="admin/product/' . $item['thumbnail'] . '" alt="" style="width: 50px;margin:0 1rem 0 1rem;"> <span>' . $item['title'] . '</span>
                </td>
                <td width="100px">' . $num . '</td>
                <td class="b-500 red">' . number_format($num * $item['price'], 0, ',', '.') . '<span> VNĐ</span></td>
            </tr>
            ';
        }
        $text_email.='</table>';

        $text_email.= '<div><p style="text-align: center; color: red;">Tổng tiền: '.number_format($total, 0, ',', '.').'<span> VNĐ</span></p>';
        $text_email.= '<p>Địa chỉ: ' .$address.'</p>';
        $text_email.= '<p>Điện thoại: ' .$phone_number.'</p></div>';
        $text_email.= '<footer class="section-p1"><!--mục footer -->
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
    </footer>';

    //     $text_email.= '<tr style="text-align: center;">
    //     <td width="50px">' . '<p style="text-align: center; color: red;">Tổng tiền: ' .number_format($total, 0, ',', '.').'</p><span> VNĐ</span>' . '</td>
    //     <td style="text-align:center; display:flex">
    //         <p style="text-align: center; color: red;">Địa chỉ: ' .$address.'</p>;
    //     </td>
    //     <td style="text-align:center; display:flex">
    //     <p style="text-align: center; color: red;">Điện thoại: ' .$phone_number.'</p>;
    // </td>
    // </tr>';
        try {
            //Server settings
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'nguyenphuc2002ok@gmail.com';                 // SMTP username
            $mail->Password = 'igjserlifxauuysv';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
         
            //Recipients
            $mail->setFrom('nguyenphuc2002ok@gmail.com', 'Degrey');
            $mail->addAddress($email, $fullname); 
                // Add a recipient
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
         
            // //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
         
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'HÓA ĐƠN DEGREY SHOP';
            $mail->Body    = $text_email;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}

?>