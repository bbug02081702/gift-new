<?php


$servename= "localhost";
$username="root";
$password= "";
$dbname="rainy0709";
//ckeck connect
$conn = mysqli_connect("$servename","$username","$password","$dbname");
if(!$conn){
    echo "connect error???" .mysqli_connect_error();

}else{
    echo "connect thanh cong";
    die();
}
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
      
//Lấy dữ liệu từ file dangky.php
$fullname   = addslashes($_POST['fullname']);
$date   = addslashes($_POST['date']);
$year      = addslashes($_POST['year']);
$majors   = addslashes($_POST['majors']);
$phone   = addslashes($_POST['phone']);

      
//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$fullname || !$date || !$year || !$majors || !$phone)
{
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
      
if (!eregi("^[+]?[0-9() -]*$", $phone))
{
    echo "Số điện thoại này không hợp lệ. Vui long nhập số của em khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

//Kiểm tra dạng nhập vào của ngày sinh
if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $date))
{
        echo "Ngày tháng năm sinh không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
      
//Lưu thông tin thành viên vào bảng
@$addrainyday0709 = mysql_query("
    INSERT INTO rainyday0709 (
        fullname,
        date,
        year,
        majors,
        phone
    )
    VALUE (
        '{$fullname}',
        '{$date}',
        '{$year}',
        '{$majors}',
        '{$phone}'
    )
");
                      
//Thông báo quá trình lưu
if ($addrainyday0709)
    echo "Quá trình đồng ý thành công. <a href='/'>Về trang chủ</a>";
else
    echo "Có lỗi xảy ra trong quá trình đồng ý. <a href='dangky.php'>Thử lại</a>";

?>