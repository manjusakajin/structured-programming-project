<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('connect.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file register.php
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
    $email      = $_POST['txtEmail'];
    $fullname   = $_POST['txtFullname'];
    $birthday   = $_POST['txtBirthday'];
    $sex        = $_POST['txtSex'];
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    $result = mysqli_query($db_conn,"SELECT UserName FROM user WHERE UserName='$username'");
    if (mysqli_num_rows($result) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    // //Kiểm tra email có đúng định dạng hay không
    // if (!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    // {
    //     echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     exit;
    // }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($db_conn,"SELECT Email FROM user WHERE Email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    // //Kiểm tra dạng nhập vào của ngày sinh
    // if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday))
    // {
    //         echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //         exit;
    //     }
          
    //Lưu thông tin thành viên vào bảng
        $line = "
        INSERT INTO user (
            UserName,
            Password,
            Email,
            FullName,
            Birthday,
            Sexual
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}',
            '{$birthday}',
            '{$sex}'
        )
    ";
    $addmember = mysqli_query($db_conn,$line);
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
?>