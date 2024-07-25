<?php
include 'veritabanı.php';

$urun_adi = $_POST['urun_adi'];
$miktar = $_POST['miktar'];
$fiyat = $_POST['fiyat'];

if (!empty($urun_adi) && !empty($miktar) && !empty($fiyat)) {
    $sql = "INSERT INTO urunler (urun_adi, miktar, fiyat) VALUES ('$urun_adi', '$miktar', '$fiyat')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Yeni kayıt başarılı";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Lütfen tüm alanları doldurun.";
}

$conn->close();
header('Location: index.php');
?>