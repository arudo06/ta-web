
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="user.css">
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
                <li><a href="home.php">Dashboard</a></li>
                <li><a href="tambah.php">Tambah Produk</a></li>
                <li><a href="user.php">Manage User</a></li>
                <li><a href="merek_produk.php">Merek Produk</a></li>
                <li><a href="transaksi.php">Transaksi</a></li>
            </div>
        </ul>
    </div>

    <!-- kotak isiii -->
    <div class="kotak">
        <table >
                <tr >
                    <th>
                      id_user
                    </th>
                    <th >
                        username
                    </th>
                    <th >
                        level
                    </th>
                    <th>
                        hapus
                    </th>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="" onclick="return confirm('apakah anda yakin?')">Delete</a></td>
                </tr>
                </table>
    </div>
    </div>
</body>
</html>