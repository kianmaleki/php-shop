<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'kiako';
$connect = mysqli_connect($server, $user, $pass, $db);
$sql = 'select * from mahsolat';
$result = mysqli_query($connect, $sql);



$username = $_POST['username'];
$password = $_POST['password'];

$admin = 'kiako';
$admin_pass = 'kianmaleki';

if ($username === $admin && $password === $admin_pass) {
    echo 'you are login';
} else {
    echo 'you are not login';
}
?>

<!DOCTYPE html>
<html lang="fr" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css" />

    <title>خانه</title>
</head>

<body class="body">
    <nav class="nav hide">
        <div class="nav-section hide">
            <ul>
                <li><a href="index.php" class="here-page">صفحه اصلی</a></li>
                <li><a href="about-me.html">درباره من</a></li>
                <li><a href="call-me.html">ارتباط با من</a></li>
                <li><a href="mahsolates.php">فروشگاه</a></li>
                <li><a href="login.html">ثبت نام</a></li>
            </ul>
        </div>
        <div class="nav-section">
            <img src="images/png/withe.png" alt="kiako-logo" class="logo" />
        </div>
    </nav>

    <div class="nav-section dropdown">
        <button onclick="toggleDropdown()" class="dropbtn">&#9776;</button>
        <div id="myDropdown" class="dropdown-content">
            <ul>
                <li class="mini-menu">منو</li>
                <li><a href="index.php">صفحه اصلی</a></li>
                <li><a href="about-me.html">درباره من</a></li>
                <li><a href="call-me.html">ارتباط با من</a></li>
                <li><a href="mahsolates.php">فروشگاه</a></li>
                <li><a href="login.html">ثبت نام</a></li>
            </ul>
        </div>
    </div>

    <section class="container-xxl">
        <h2 class="m-4 text-center">محصولات</h2>
        <table class="table  table-dark table-bordered border-light  overflow-scroll text-center ">
            <thead class=" table-active">
                <th>نام محصولات</th>
                <th>قیمت محصولات</th>
                <th>تخفیف محصولات</th>
                <th>توضیح محصولات</th>
                <th>عکس محصولات</th>
                <th>دسته بندی محصولات</th>
                <td>ویرایش محصولات</td>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                <tr>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['price'] . '</td>
                    <td>' . $row['off'] . '</td>
                    <td>' . $row['tozih'] . '</td>
                    <td>' . $row['pic'] . '</td>
                    <td>' . $row['category_id'] . '</td>
                    <td><a class="link-light" href="edit-admin.php?id= ' . $row['id'] . '">ویرایش</a></td>
                </tr>
                ';
                }
                ?>
            </tbody>
        </table>
    </section>

    <script src="main.js"></script>
</body>

</html>