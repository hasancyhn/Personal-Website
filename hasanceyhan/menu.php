<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-3">
    <div class="container-fluid">
        <div class="navbar-brand">Hasan Ceyhan</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="makaleler.php">Makaleler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dersler.php">Dersler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hobiler.php">Hobiler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hakkimda.php">Hakkımda</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <?php if (!isset($_SESSION["ADMIN"])) : ?>
                    <a class="btn btn-outline-light" href="giris.php">Giriş Yap</a>
                <?php else: ?>
                    <a class="btn btn-outline-light" href="cikis.php">Çıkış Yap</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
</nav>