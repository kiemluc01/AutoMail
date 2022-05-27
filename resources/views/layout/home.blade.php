<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto_mail</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <?php 
        if(isset($_REQUEST['login'])){
            echo '<script> alert("bắt được rồi nha e iu <3") </script>';
            ini_set("SMTP","ssl://smtp.gmail.com");
            ini_set("smtp_port","578");
            if(mail ('nvthuan1201@gmai.com','không có chi mô mà mở','đang demo auto mail trong laravel :D','From:kiemluc01@gmail.com \r\n')){
                echo '<script> alert("Gữi được gofy, tym tym tym, moa moa") </script>';
            }else{
                '<script> alert("mẹ lỗi tề") </script>';
            }
        }
    ?>
    <div class="header">
        @include('/includes.header')
    </div>
    <div id="content_container">
        <div class="loginform">
            <form action="#" class="login" method="get">
                <table class="main-login">
                    <tr class="title">
                        <td colspan="2" >Đăng nhập</td>
                    </tr>
                    <tr>
                        <th>Username: </th>
                        <td>
                            <input type="text" name="user" id="user">
                        </td>
                    </tr>
                    <tr>
                        <th>Password: </th>
                        <td>
                            <input type="text" name="pw" id="pw">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="login" value="Đăng nhập">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Bạn chưa có tài khoản? <a href="">Đăng kí</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>