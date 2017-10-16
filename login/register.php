<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang đăng lý</title>
    </head>
    <body>
        <h1>Trang đăng ký thành viên</h1>
        <form action="process.php" method="POST">
            <p>Tên đăng nhập : <input type="text" name="txtUsername" size="50" /></p>
            <p>Mật khẩu : <input type="password" name="txtPassword" size="50" /></p>
            <p>Email : <input type="text" name="txtEmail" size="50" /></p>
            <p>Họ và tên : <input type="text" name="txtFullname" size="50" /></p>
            <p>Ngày sinh :<input type="text" name="txtBirthday" size="50" /></p>
            <p>Giới tính :
            <select name="txtSex">
                <option value=""></option>
                <option value="Nam">Nam</option>
                <option value="Nu">Nữ</option>
            </select></p>
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
    </body>
</html>