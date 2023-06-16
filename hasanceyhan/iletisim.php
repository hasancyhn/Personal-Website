<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>İletişim</title>
</head>

<body class="bg-dark">
    <?php require("menu.php"); ?>
    <div class="container">
        <h1 class="display-1 text-light">İletişim</h1>
        <div class="row">
            <div class="col-lg-7 col-12 bg-light p-4">
                <h1>Bir mesaj gönder</h1>
                <div class="row">
                    <div class="col-lg-6 col-12 my-2">
                        <label class="fw-semibold ms-2 mb-1" for="">İsim</label>
                        <input type="text" class="form-control" placeholder="Hasan Ceyhan">
                    </div>
                    <div class="col-lg-6 col-12 my-2">
                        <label class="fw-semibold ms-2 mb-1" for="">Telefon</label>
                        <input type="text" class="form-control" placeholder="+90 555 555 5555">
                    </div>
                    <div class="col-lg-6 col-12 my-2">
                        <label class="fw-semibold ms-2 mb-1" for="">Email</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="col-lg-6 col-12 my-2">
                        <label class="fw-semibold ms-2 mb-1" for="">Konu</label>
                        <input type="email" class="form-control" placeholder="Ne hakkında görüşmek istiyorsunuz ?">
                    </div>
                    <div class="col-12 my-2">
                        <label class="fw-semibold ms-2 mb-1" for="">Mesajınız</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Mesajınızı yazın"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary">Gönder</button>
                    </div>
                </div>

            </div>
            <div style="color: white; font-size: 30px;" class="col-lg-5 col-12 bg-secondary p-4 text-light">
                <h1>Bana ulaşın</h1>
                <div class="personal my-3">
                    <div class="my-3">
                        <a style="color: white; text-decoration: none;" href="mailto:hasanceyhan@gmail.com">Mail : hasanceyhan@gmail.com</a>
                    </div>
                    <div class="my-3">
                        Telefon : 0555 555 5555
                    </div>
                </div>
                <div class="d-flex my-3 justify-content-between" style="font-size: 50px;">
                    <div>
                        <a href="https://www.instagram.com/hasan_cyhn/"><i style="color:white" class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div>
                        <a href="https://twitter.com/hasan_cyhn"><i style="color:white" class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/in/hasan-ceyhan/"><i style="color:white" class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <div>
                        <a href="https://github.com/hasancyhn"><i style="color:white" class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>