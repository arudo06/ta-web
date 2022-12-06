
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="tambah.css">
    <title>Admin</title>
</head>
<body>
<nav>
        <div class="username">
            <div class="admin">Admin :</div>
            <div class="nickname"></div>
        </div>
        <div class="logout">
            <a href="../logout.php">Logout</a>
        </div>
    </nav>
    <div class="background">
    <div class="bar-left">
        <img src="property/logo.png" alt="">
        <ul style="margin-top:5px">
            <div class="item">
                <li><a href="home.php">Dasboard</a></li>
                <li><a href="tambah.php">Tambah Produk</a></li>
                <li><a href="user.php">Manage User</a></li>
                <li><a href="merek_produk.php">Merek Produk</a></li>
                <li><a href="transaksi.php">Transaksi</a></li>
                
            </div>
        </ul>
    </div>

    <!-- kotak isiii -->
    <div class="kotak">
    <h1>Tambah produk</h1>
        <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>gambar</td>
                <td>:</td>
                <td><input type="file" name="foto_anime" id="foto_anime"></td>
            </tr>
            <tr>
                <td>Nama produk</td>
                <td>:</td>
                <td><input type="text" name="nama_anime_ind"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><input type="text" name="nama_anime_jp"></td>
            </tr>
            <tr>
                <td>Merek</td>
                <td>:</td>
                <td><input type="text" name="peringkat"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="rating"></td>
            </tr>
        </table>
        <input type="submit" value="tambahkan" name="submit">
        </form>
    </div>
    </div>
    </div>
</body>
</html>