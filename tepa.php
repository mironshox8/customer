<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Aqlli tarozi </title>

  <link rel="stylesheet" href="./dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="./dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="./dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="./dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./dist/css/demo.css">
  <link rel="stylesheet" href="./dist/css/style.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="Qidiruv..." placeholder="Qidiruv..." aria-label="Qidiruv...">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Xabar</a>
                </div>
              </div>
              
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Salom, Jaxongir</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="logout.php" class="dropdown-item has-icon">
             <button class="logout"> <i class="ion ion-log-out"></i> Chiqish</button></a>
             
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard.php">Aqlli Tarozi</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../dist/img/avatar/avatar-1.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">Jaxongir</div>
              <div class="user-role">
                Xaridor
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Sozlamalar</li>
            <li class="active">
              <a href="dashboard.php"><i class="fa fa-home"></i><span>Bosh sahifa</span></a>
            </li>

            <li class="menu-header">Hisobotlar</li>
            
            <li>
              <a href="xaridlarim.php"><i class="fa fa-shopping-cart"></i> Xaridlarim<div class="badge badge-primary">    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total FROM sale";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "" . $row["total"];
} else {
    echo "";
}

?></div></a>
            </li>
            
            <li class="menu-header">More</li>
            
            <li>
              <a href="qrcode.php"><i class="fa fa-plus-square"></i> Yangi QRcode yaratish</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-gift"></i> Bonuslar</a>
            </li>          </ul>
          <div class="p-3 mt-4 mb-4">
            <a href="https://t.me/PTMA_QORAKUL_IMI_UZ" class="btn btn-info btn-shadow btn-round has-icon has-icon-nofloat btn-block">
              <i class="ion-paper-airplane"></i> <div>Telegram sahifamiz</div>
            </a>
          </div>
        </aside>
      </div>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Shaxsiy kabinet</div>
          </h1>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-success">
                  <i class="ion-social-usd"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jami xaridlarim</h4>
                  </div>
                  <div class="card-body">
                                  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanish muvaffaqiyatsiz: " . $conn->connect_error);
}

// Ma'lumotlarni olish


$sql = "SELECT sale.id,sale.mahsulot,sale.massa,sale.sana,mahsulotlar.unical_id,mahsulotlar.mahsulot_nomi,narx.mahsulot_id,narx.narx FROM `sale`,`mahsulotlar`,`narx` WHERE sale.mahsulot = mahsulotlar.unical_id AND mahsulotlar.unical_id  = narx.mahsulot_id";
$result = $conn->query($sql);
?><?php 
if ($result->num_rows > 0) {
    $n = 1;
    while ($row = $result->fetch_assoc()) {
        $s = round($row["massa"], 2);
        $bosh = ucfirst(strtolower($row["mahsulot_nomi"]));
        $image_path = "images/" . strtolower(str_replace(' ', '_', $row["mahsulot_nomi"])) . ".jpg";
        $s = $row['massa'] * $row['narx']/1000;
                    $tosh = $row['massa']/1000;
                    $total_sum += $s;}}?>
                    <?php echo round($total_sum); ?> so‘m                 </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-info">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Kunlik sotuv summasi</h4>
                  </div>
                  <div class="card-body">
                  
                    <?php echo round($total_sum); ?> so‘m
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-warning">
                 <i class="fa fa-balance-scale"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Xarid mahsulotlari massasi</h4>
                  </div>
                  <div class="card-body">
                                                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanish muvaffaqiyatsiz: " . $conn->connect_error);
}

// Ma'lumotlarni olish


$sql = "SELECT sale.id,sale.mahsulot,sale.massa,sale.sana,mahsulotlar.unical_id,mahsulotlar.mahsulot_nomi,narx.mahsulot_id,narx.narx FROM `sale`,`mahsulotlar`,`narx` WHERE sale.mahsulot = mahsulotlar.unical_id AND mahsulotlar.unical_id  = narx.mahsulot_id";
$result = $conn->query($sql);
?><?php 
if ($result->num_rows > 0) {
    $n = 1;
    while ($row = $result->fetch_assoc()) {
        $sw = round($row["massa"], 2);
    
        $sw = $row['massa']/1000;
                  
                    $total_sum1 += $sw;}}?>
                    <?php echo ($total_sum1); ?>   kg



                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-primary">
                  <i class="fa fa-gift"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Bonus</h4>
                  </div>
                  <div class="card-body">
                   <?php echo round($total_sum)/20; ?>  so'm