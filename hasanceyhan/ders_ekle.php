<?php
session_start();
if (!isset($_SESSION["ADMIN"])){
    header("Location:dersler.php");
}
require("connection.php");
if (isset($_POST["submitted"])) {
    $ders_ad = $_POST["DERS_AD"];
    $ders_gunu = $_POST["DERS_GUNU"];
    $ders_saati = $_POST["DERS_SAAT"];
    $ders_ogretmen = $_POST["DERS_OGRETMEN"];

    $sorgu = $db->prepare("INSERT INTO DERS (DERS_AD,DERS_SAAT,DERS_OGRETMEN,DERS_GUNU) VALUES (:ders_ad,:ders_saat,:ders_ogretmen,:ders_gunu)");
    $sorgu->bindParam(":ders_ad", $ders_ad);
    $sorgu->bindParam(":ders_saat", $ders_saati);
    $sorgu->bindParam(":ders_ogretmen", $ders_ogretmen);
    $sorgu->bindParam(":ders_gunu", $ders_gunu);

    $sorgu->execute();
    header("Location:dersler.php");
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
    <title>Ders Ekle</title>
</head>

<body class="bg-dark">
    <?php require("menu.php"); ?>
    <div class="container border rounded p-4 text-light">
        <h1>Ders Ekle</h1>
        <form action="" method="POST">
            <div class="row">
                <div class="col-6">
                    <div class="input-group my-2">
                        <div class="input-group-text">
                            Ders Adı:
                        </div>
                        <input name="DERS_AD" class="form-control" type="text" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group my-2">
                        <div class="input-group-text">
                            Ders Saati:
                        </div>
                        <input name="DERS_SAAT" class="form-control" type="time" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group my-2 ">
                        <div class="input-group-text">
                            Ders Öğretmeni:
                        </div>
                        <input name="DERS_OGRETMEN" class="form-control" type="text" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group my-2">
                        <div class="input-group-text">
                            Ders Günü
                        </div>
                        <select name="DERS_GUNU" id="" class="form-select" required>
                            <option value="" disabled selected>Bir gün seçiniz</option>
                            <option value="Pazartesi">Pazartesi</option>
                            <option value="Salı">Salı</option>
                            <option value="Çarşamba">Çarşamba</option>
                            <option value="Perşembe">Perşembe</option>
                            <option value="Cuma">Cuma</option>
                            <option value="Cumartesi">Cumartesi</option>
                            <option value="Pazar">Pazar</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <a href="dersler.php" class="btn btn-danger">İptal</a>
                    </div>
                    <div>
                        <button type="submit" name="submitted" class="btn btn-primary">Ders Ekle</button>
                    </div>
                </div>

            </div>
        </form>




    </div>
</body>

</html>