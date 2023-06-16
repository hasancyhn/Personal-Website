<?php
session_start();
require("connection.php");
$sorgu = $db->prepare("SELECT * FROM MAKALE");
$sorgu->execute();
$makaleler = $sorgu->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Makaleler</title>
</head>

<body class="bg-dark">
    <?php require("menu.php"); ?>
    <div class="container">
        <h1 class="display-1 text-light">Makaleler</h1>
        <?php if (isset($_SESSION["ADMIN"])) : ?>
            <div class="d-flex justify-content-end mb-3">
                <a href="makale_ekle.php" class="btn btn-primary">
                    Yeni Makale Ekle
                </a>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php foreach ($makaleler as $makale) : ?>
                <div class="card bg-light text-dark p-3 my-1">
                    <!-- <h2>
                        <?php echo $makale["MAKALE_AD"]; ?>
                    </h2> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1>
                                <?php echo $makale["MAKALE_AD"]; ?>
                            </h1>
                            <div class="fw-semibold">Yazar : <?php echo $makale["MAKALE_YAZAR"]; ?></div>

                        </div>
                        <div>
                            <a href="makale_detayi.php?id=<?php echo $makale["MAKALE_ID"] ?>" class="btn btn-dark">Detaylı Oku</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>

</html>