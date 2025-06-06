<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db"; // Ma'lumotlar bazasi nomi

// MySQL bilan bog'lanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Bog'lanishni tekshirish
if ($conn->connect_error) {
    die("Bog'lanishda xatolik: " . $conn->connect_error);
}

// SQL so'rovi: Ombor va sotuv jadvalini birlashtirish
$sql = "SELECT o.mahsulot, sum(o.massa AS ombordagi_miqdor, s.massa AS sotilgan_miqdor
        FROM omborxona o
        LEFT JOIN sotuv s ON GROUP BY mahsulot";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Ombor va Sotuv Jadvali</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Ombor va Sotuv Jadvali</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Mahsulot Nomi</th>
            <th>Ombordagi Miqdor</th>
            <th>Sotilgan Miqdor</th>
        </tr>
        <?php if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["mahsulot"]; ?></td>
                    <td><?php echo $row["ombordagi_miqdor"]; ?></td>
                    <td><?php echo $row["sotilgan_miqdor"] ? $row["sotilgan_miqdor"] : 0; ?></td>
                </tr>
        <?php } } else { ?>
            <tr><td colspan="4">Ma'lumot topilmadi</td></tr>
        <?php } ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>
