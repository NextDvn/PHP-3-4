<html>

<head>
    <title>Landing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function display_c() {
            var refresh = 1000; // Refresh rate in milli seconds
            mytime = setTimeout('display_ct()', refresh)
        }

        function display_ct() {
            var x = new Date()
            var x1 = x.getMonth() + 1 + "/" + x.getDate() + "/" + x.getYear();
            x1 = x1 + " - " + x.getHours() + ":" + x.getMinutes() + ":" + x.getSeconds();
            document.getElementById('ct').innerHTML = x1;
            display_c();
        }
    </script>

    <style type="text/css">
        body {
            color: #fff;
            background: linear-gradient(to top left, #33ccff 0%, #ff99cc 100%);
        }

        .form-control {
            min-height: 41px;
            background: #fff;
            box-shadow: none !important;
            border-color: #e3e3e3;
        }

        .form-control:focus {
            border-color: #70c5c0;
        }

        .form-control,
        .btn {
            border-radius: 5px;
        }

        .login-form {
            width: 400px;
            margin: 0 auto;
            padding: 100px 0 30px;
        }

        .login-form form {
            color: #7a7a7a;
            border-radius: 2px;
            margin-bottom: 15px;
            font-size: 13px;
            background: #ececec;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
            padding: 30px;
            position: relative;
        }

        .login-form h2 {
            font-size: 22px;
            margin: 35px 0 25px;
        }

        .login-form .avatar {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -50px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            background: #70c5c0;
            padding: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
        }

        .login-form .avatar img {
            width: 100%;
        }

        .login-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #70c5c0;
            border: none;
            margin-bottom: 20px;
        }

        .login-form .btn:hover,
        .login-form .btn:focus {
            background: #50b8b3;
            outline: none !important;
        }

        .login-form a {
            color: #fff;
            text-decoration: underline;
        }

        .login-form a:hover {
            text-decoration: none;
        }

        .login-form form a {
            color: #7a7a7a;
            text-decoration: none;
        }

        .login-form form a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body onload=display_ct();>
    <h4 id='ct'></h4>
    <div class="login-form">
        <form action="Log In.php" method="post">
            <div class="form-group">
                <?php
                $username = $_POST["username"];
                $password = $_POST["password"];
                $u = "slametajinotoputri@gmail.com";
                $p = "slamet1029";
                if ($username == "$u" && $password == "$p") {
                    echo "<h5>Login Berhasil</h5>";
                } else {
                    echo "<h4>Gagal Log In, Silahkan Log Out<h4></h5>";
                }
                ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger" action="Log In.php">Log Out</button>
            </div>
        </form>
    </div>
</body>

</html>