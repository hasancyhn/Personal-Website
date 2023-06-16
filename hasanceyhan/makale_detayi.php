<?php
session_start();
require("connection.php");
$id = $_GET["id"];
$sorgu = $db->prepare("SELECT * FROM MAKALE WHERE MAKALE_ID=:id");
$sorgu->bindParam(":id", $id);
$sorgu->execute();
$makale = $sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu = $db->prepare("SELECT * FROM YORUM WHERE MAKALE_ID=:makale_id");
$sorgu->bindParam(":makale_id", $id);
$sorgu->execute();
$yorumlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Makale Detay</title>
</head>

<body class="bg-dark">
    <?php require("menu.php"); ?>
    <div class="container text-light border p-3">
        <h1>
            <?php echo $makale["MAKALE_AD"]; ?>
        </h1>
        <hr>
        <p>
            <?php echo $makale["MAKALE_ICERIK"]; ?>
        </p>
        <hr>
        <div class="d-flex justify-content-between">
            <div>
                Yazar: <?php echo $makale["MAKALE_YAZAR"]; ?>
            </div>
            <div>
                Konu: <?php echo $makale["MAKALE_KONU"]; ?>
            </div>
            <div>
                <span class="fw-semibold">Makale Tarihi:</span>
                <?php echo $makale["MAKALE_TARIH"]; ?>
            </div>

        </div>
        <hr>
        <div>
            <h5>Yorum Yap</h5>
            <form action="yorum_ekle.php" method="POST">
                <div class="input-group my-2">
                    <div class="input-group-text">
                        Ad Soyad:
                    </div>
                    <input type="text" class="form-control" name="yorum_ad">
                </div>
                <div class="ipnut-group my-2">
                    <textarea class="form-control" name="yorum" id="" cols="30" rows="3" placeholder="Yorum"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <div>
                        <button type="submit" name="makale_id" value="<?php echo $id ?>" class="btn btn-primary">Yorum Ekle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container border text-light mt-5 p-2">
        <h3>Yorumlar</h3>
        <?php foreach ($yorumlar as $yorum) : ?>
            <div class="card bg-dark border-light p-2 my-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3>
                            <?php echo $yorum["YORUM_AD"]; ?>
                        </h3>
                        <p><?php echo $yorum["YORUM"]; ?></p>
                    </div>
                    <div>
                        <span><?php echo $yorum["YORUM_TARIH"] ?></span>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>