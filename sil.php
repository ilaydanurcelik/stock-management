<?php
include 'veritabanı.php';

$id = $_GET['id'];

$sql = "DELETE FROM urunler WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt silindi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');
?>

