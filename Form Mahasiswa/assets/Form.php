<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
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

        img {
            border-radius: 50%;
        }
    </style>
</head>

<body onload=display_ct();>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h4 id='ct'></h4>
                    <h1 align="center">Create New Account</h1>
                </div>
                <form action="Hasil2.php" method="POST">

                    <div class="form-group">
                        <label for="nis" class="control-label col-sm-2">NIS</label>
                        <div class="col-sm-7">
                            <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama depan" class="control-label col-sm-2">Nama Depan</label>
                        <div class="col-sm-7">
                            <input type="text" name="nama_depan" class="form-control" placeholder="Masukkan Nama Depan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama belakang" class="control-label col-sm-2">Nama Belakang</label>
                        <div class="col-sm-7">
                            <input type="text" name="nama_belakang" class="form-control" placeholder="Masukkan Nama Belakang" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tempat lahir" class="control-label col-sm-2">Tempat Lahir</label>
                        <div class="col-sm-7">
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tanggal lahir" class="control-label col-sm-2">Tanggal Lahir</label>
                        <div class="col-sm-7">
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="agama" class="control-label col-sm-2">Agama</label>
                        <div class="col-sm-7">
                            <input type="text" name="agama" class="form-control" placeholder="Masukkan Agama" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kelamin" class="control-label col-sm-2">Jenis Kelamin</label>
                        <div class="col-sm-2">
                            <select type="text" name="kelamin" id="kelamin" class="form-control" required>
                                <option value="">Pilih Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label col-sm-2">Email</label>
                        <div class="col-sm-7">
                            <input type="text" name="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telepon" class="control-label col-sm-2">Telepon</label>
                        <div class="col-sm-7">
                            <input type="text" name="telepon" class="form-control" placeholder="Masukkan Telepon" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="instagram" class="control-label col-sm-2">Instagram</label>
                        <div class="col-sm-7">
                            <input type="text" name="instagram" class="form-control" placeholder="Masukkan Instagram" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="facebook" class="control-label col-sm-2">Facebook</label>
                        <div class="col-sm-7">
                            <input type="text" name="facebook" class="form-control" placeholder="Masukkan Facebook" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="website" class="control-label col-sm-2">Website</label>
                        <div class="col-sm-7">
                            <input type="text" name="website" class="form-control" placeholder="Masukkan Website" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="control-label col-sm-2">Alamat</label>
                        <div class="col-sm-7">
                            <textarea type="text" name="alamat" class="form-control" rows="6" placeholder="Masukkan Alamat" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan" class="control-label col-sm-2">Jurusan</label>
                        <div class="col-sm-2">
                            <select type="text" name="jurusan" class="form-control" required>
                                <option value="">Pilih Kelas</option>
                                <option value="A">Rekayasa Perangkat Lunak (RPL) </option>
                                <option value="body">Teknik Komunikasi Jaringan (TKJ) </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kelas" class="control-label col-sm-2">Kelas</label>
                        <div class="col-sm-2">
                            <select type="text" name="kelas" class="form-control" required>
                                <option value="">Pilih Kelas</option>
                                <option value="A">Kelas 10</option>
                                <option value="A">Kelas 11</option>
                                <option value="body">Kelas 12</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="control-label col-sm-2">Username</label>
                        <div class="col-sm-7">
                            <input type="text" name="username2" class="form-control" placeholder="Masukkan Username" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label col-sm-2">Password</label>
                        <div class="col-sm-7">
                            <input type="text" name="password2" class="form-control" placeholder="Masukkan Password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pesan" class="control-label col-sm-2">Pesan</label>
                        <div class="col-sm-7">
                            <textarea type="text" name="pesan" rows="6" class="form-control"></textarea>
                        </div>
                    </div>


                    <div class="col-sm-7">
                        <button type="submit" name="btnSimpan" class="btn btn-danger">Simpan</button>
                    </div>
                    <br>
            </div>
        </div>
</body>

</html>