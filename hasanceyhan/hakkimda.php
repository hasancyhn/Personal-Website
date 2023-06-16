<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Hakkımda</title>
</head>

<body class="bg-dark">
    <?php require("menu.php"); ?>
    <div class="container">
        <h1 class="display-1 text-light">
            Hakkımda
        </h1>
        <div class="card bg-dark border-light text-light">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col-7 p-5">
                    <h1 class="display-3">Ben kimim ? </h1>
                    <p class="fw-semibold mt-5">
                        01.01.2000 Akşehir/Konya doğumluyum.
                        2019-2020 eğitim öğretim yılında KTO Karatay Üniversitesinde İngiizce hazırlık sınıfını başarıyla tamamladım. 2020-2021 eğitim öğretim yılını KTO Karatay Üniversitesinde tamamladıktan sonra Necmettin Erbakan Üniversitesine ortalama ile yatay geçiş yaptım halen burada eğitimimi sürdürmekteyim. Python, C, Qt Creator, CSS, HTML5 ve C++ dillerine hakimim. Yürüyüş yapmaktan, araba kullanmaktan ve müzik dinlemekten hoşlanırım.
                    </p>
                </div>
                <div class="col-5 text-end">
                    <img src="https://avatars.githubusercontent.com/u/65310402?v=4" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</body>

</html>