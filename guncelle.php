<?php
include 'veritabanı.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $urun_adi = $_POST['urun_adi'];
    $miktar = $_POST['miktar'];
    $fiyat = $_POST['fiyat'];

    if (!empty($urun_adi) && !empty($miktar) && !empty($fiyat)) {
        $sql = "UPDATE urunler SET urun_adi='$urun_adi', miktar='$miktar', fiyat='$fiyat' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Kayıt güncellendi";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Lütfen tüm alanları doldurun.";
    }

    $conn->close();
    header('Location: index.php');
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM urunler WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Stok Güncelle</title>
    </head>
    <body>
        <h1>Stok Güncelle</h1>
        <form action="guncelle.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="urun_adi" value="<?php echo $row['urun_adi']; ?>" required>
            <input type="number" name="miktar" value="<?php echo $row['miktar']; ?>" required>
            <input type="text" name="fiyat" value="<?php echo $row['fiyat']; ?>" required>
            <button type="submit">Güncelle</button>
        </form>
    </body>
    </html>
    <?php
}
?>
