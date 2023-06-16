<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Giriş</title>
</head>

<body class="bg-dark text-light">
    <?php require("menu.php"); ?>
    <div class="container d-flex align-items-center justify-content-center" style="height: 80vh;">
        <div class="border p-4 text-center">
            <h1 class="mb-3">Giriş Yap</h1>
            <form action="giris_onay.php" method="POST">
                <div class="input-group my-2">
                    <div class="input-group-text">
                        Kullanıcı adı:
                    </div>
                    <input name="kullanici_adi" type="text" class="form-control">
                </div>
                <div class="input-group my-2">
                    <div class="input-group-text">
                        Parola:
                    </div>
                    <input name="parola" id="sifre" type="password" class="form-control">
                    <div class="input-group-text" id="gosterBtn" style="cursor: pointer;">
                        Göster
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-100 mt-2 ">Giriş Yap</button>
                </div>

            </form>
        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>