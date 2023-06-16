<?php
    require("connection.php");
    session_start();
    $sorgu = $db->prepare("SELECT * FROM DERS");
    $sorgu->execute();
    $dersler = $sorgu->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Dersler</title>
</head>

<body class="bg-dark">
    <?php require("menu.php"); ?>
    <div class="container">
        <h1 class="display-1 text-light">Dersler</h1>
        <?php if (isset($_SESSION["ADMIN"])) : ?>
            <div class="d-flex justify-content-end mb-3">
                <a href="ders_ekle.php" class="btn btn-primary">Yeni Ders Ekle</a>
            </div>
        <?php endif; ?>
        <table class="table table-dark table-hover text-center table-bordered">
            <thead>
                <tr>
                    <th>Ders Adı</th>
                    <th>Ders Günü</th>
                    <th>Ders Saati</th>
                    <th>Ders Öğretmeni</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($dersler as $ders): ?>
                <tr>
                    <td><?php echo $ders["DERS_AD"] ?></td>
                    <td><?php echo $ders["DERS_GUNU"] ?></td>
                    <td><?php echo substr($ders["DERS_SAAT"],0,5); ?></td>
                    <td><?php echo $ders["DERS_OGRETMEN"] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>


</body>

</html>