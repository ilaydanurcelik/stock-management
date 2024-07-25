<?php include 'veritabanı.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Stok Yönetim</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Stok Yönetim</h1>
    <form action="ekle.php" method="POST">
        <input type="text" name="urun_adi" placeholder="Ürün Adı" required>
        <input type="number" name="miktar" placeholder="Miktar" required>
        <input type="text" name="fiyat" placeholder="Fiyat" required>
        <button type="submit">Ekle</button>
    </form>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Ürün Adı</th>
            <th>Miktar</th>
            <th>Fiyat</th>
            <th>Eklenme Tarihi</th>
            <th>İşlemler</th>
        </tr>
        <?php
        $sql = "SELECT * FROM urunler";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["urun_adi"] . "</td>
                    <td>" . $row["miktar"] . "</td>
                    <td>" . $row["fiyat"] . "</td>
                    <td>" . $row["eklenme_tarihi"] . "</td>
                    <td>
                        <a href='guncelle.php?id=" . $row["id"] . "'>Güncelle</a>
                        <a href='sil.php?id=" . $row["id"] . "'>Sil</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Kayıt yok</td></tr>";
        }
        ?>
    </table>
</body>
</html>
