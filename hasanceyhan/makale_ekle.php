<?php
session_start();
require("connection.php");
$sorgu = $db->prepare("SELECT * FROM KONU");
$sorgu->execute();
$konular = $sorgu->fetchAll(PDO::FETCH_ASSOC);

if (!isset($_SESSION["ADMIN"])) {
    header("Location:makaleler.php");
}

if (isset($_POST["submitted"])) {
    $makale_ad = $_POST["MAKALE_AD"];
    $makale_icerik = $_POST["MAKALE_ICERIK"];
    $makale_yazar = $_SESSION["AD_SOYAD"];
    $makale_konu = $_POST["MAKALE_KONU"];
    $sorgu = $db->prepare("INSERT INTO `makale`( `MAKALE_AD`, `MAKALE_ICERIK`, `MAKALE_YAZAR`,`MAKALE_KONU`) VALUES (:makale_ad,:makale_icerik,:yazar,:konu)");
    $sorgu->bindParam(":makale_ad", $makale_ad);
    $sorgu->bindParam(":makale_icerik", $makale_icerik);
    $sorgu->bindParam(":yazar", $makale_yazar);
    $sorgu->bindParam(":konu", $makale_konu);
    $sorgu->execute();
    header("Location:makaleler.php");
}


?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Makale Ekle</title>
</head>

<body class="bg-dark">
    <?php
    require("menu.php");
    ?>
    <div class="container text-light">
        <form action="" method="POST">
            <div class="d-flex justify-content-between">
                <div class="col-6">
                    <div class="input-group my-2">
                        <div class="input-group-text">
                            <label for="makale_adi">Makale Adı: </label>
                        </div>
                        <input id="makale_adi" name="MAKALE_AD" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group my-2">
                        <div class="input-group-text">
                            <label for="makale_konu">Makale Konusu: </label>
                        </div>
                        <select class="form-select" name="MAKALE_KONU" id="makale_konu" required>
                            <option value="" disabled selected>Bir konu seçiniz</option>
                            <?php foreach ($konular as $konu) : ?>
                                <option value="<?php echo $konu["KONU"] ?>"><?php echo $konu["KONU"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

            </div>
            <div class="input-group my-2">
                <textarea name="MAKALE_ICERIK" class="form-control" name="" id="" cols="30" rows="10" placeholder="Makale içeriği" required></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <a href="makaleler.php" class="btn btn-danger me-2">İptal Et</a>
                <button type="submit" name="submitted" value="1" class="btn btn-primary">Makaleyi Ekle</button>
            </div>
        </form>
    </div>
</body>

</html>