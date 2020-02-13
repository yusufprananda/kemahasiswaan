    <!-- Navbar Normal -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <div class="d-flex flex-row">
                <div class="mr-2">
                    <img class="p-0 m-0" src="img/logo.png" alt="">
                </div>
                <div class="align-self-center">
                    <h1 class="p-0 m-0"><?= $nama ?></h1>
                    <h2>Universitas Ngudi Waluyo</h2>
                </div>
            </div>
        </a>
        <div class="cNavnormal ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">BERANDA</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">BERITA</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TENTANG
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sejarah.php">SEJARAH</a>
                        <a class="dropdown-item" href="#">STRUKTUR ORMAWA</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        HIMPUNAN MAHASISWA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">KEPERAWATAN</a>
                        <a class="dropdown-item" href="#">S1 KEBIDANAN</a>
                        <a class="dropdown-item" href="#">D3 KEBIDANAN</a>
                        <a class="dropdown-item" href="#">KESEHATAN MASYARAKAT</a>
                        <a class="dropdown-item" href="#">GIZI</a>
                        <a class="dropdown-item" href="#">FARMASI</a>
                        <a class="dropdown-item" href="#">ILMU KEOLAHRAGAAN</a>
                        <a class="dropdown-item" href="#">D4 AKUTANSI PERPAJAKAN</a>
                        <a class="dropdown-item" href="#">TEKNIK INFORMATIKA</a>
                        <a class="dropdown-item" href="#">SASTRA JEPANG</a>
                        <a class="dropdown-item" href="#">SASTRA INGGRIS</a>
                        <a class="dropdown-item" href="#">PENDIDIKAN GURU SD</a>
                        <a class="dropdown-item" href="#">PENDIDIKAN GURU PAUD</a>
                        <a class="dropdown-item" href="#">HUKUM</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UKM
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">BASKET</a>
                        <a class="dropdown-item" href="#">FUTSAL</a>
                        <a class="dropdown-item" href="#">KARYA TULIS</a>
                        <a class="dropdown-item" href="#">SILAT</a>
                        <a class="dropdown-item" href="#">SANATA DHARMA</a>
                        <a class="dropdown-item" href="#">TAEKWONDO</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BEM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BPM</a>
                </li>
            </ul>
        </div>
        <button class="btn search" onclick="openSearch()">
            <i class="fas fa-search"></i>
        </button>
        <button class="btn hamburger" onclick="openNav()">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <!-- Navbar Overlay -->
    <nav>
        <div id="cNavover" class="cOverlay">
            <div class="cNavhead d-flex flex-row py-3">
                <div class="px-3">
                    <img class="p-0 m-0" src="img/logo.png" alt="">
                </div>
                <div class="align-self-center">
                    <h1 class="p-0 m-0">Kemahasiswaan</h1>
                    <h2>Universitas Ngudi Waluyo</h2>
                </div>
                <div class="ml-auto align-self-center px-3">
                    <button class="btn close" onclick="closeNav()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="cNavcont">
                <a class="btn" href="index.php">Beranda</a>
                <a class="btn" href="news.php">Berita</a>
                <button class="btn dropdown-toggle shadow-none" type="button" data-toggle="collapse" data-target="#collapseone" aria-expanded="false" aria-controls="collapseExample">
                    Tentang
                </button>
                <div class="collapse" id="collapseone" data-parent=".cNavcont">
                    <div class="card card-body">
                        <a class="btn" href="sejarah.php">Sejarah</a>
                        <a class="btn" href="#">Struktur Ormawa</a>
                    </div>
                </div>
                <button class="btn dropdown-toggle shadow-none" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapseExample">
                    HIMA
                </button>
                <div class="collapse" id="collapsetwo" data-parent=".cNavcont">
                    <div class="card card-body">
                        <a class="btn" href="#">Keperawatan</a>
                        <a class="btn" href="#">S1 Kebidanan</a>
                        <a class="btn" href="#">D3 Kebidanan</a>
                        <a class="btn" href="#">Kesehatan Masyarakat</a>
                        <a class="btn" href="#">Gizi</a>
                        <a class="btn" href="#">Farmasi</a>
                        <a class="btn" href="#">Ilmu Keolahragaan</a>
                        <a class="btn" href="#">D4 Akutansi Perpajakan</a>
                        <a class="btn" href="#">Teknik Informatika</a>
                        <a class="btn" href="#">Sastra Jepang</a>
                        <a class="btn" href="#">Sastra Inggris</a>
                        <a class="btn" href="#">Pendidikan Guru SD</a>
                        <a class="btn" href="#">Pendidikan Guru PAUD</a>
                        <a class="btn" href="#">Hukum</a>
                    </div>
                </div>
                <button class="btn dropdown-toggle shadow-none" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapseExample">
                    UKM
                </button>
                <div class="collapse" id="collapsethree" data-parent=".cNavcont">
                    <div class="card card-body">
                        <a class="btn" href="#">Basket</a>
                        <a class="btn" href="#">Futsal</a>
                        <a class="btn" href="#">Karya Tulis</a>
                        <a class="btn" href="#">Silat</a>
                        <a class="btn" href="#">Sanata Dharma</a>
                        <a class="btn" href="#">Taekwondo</a>
                    </div>
                </div>
                <a class="btn" href="#">BEM</a>
                <a class="btn" href="#">BPM</a>
            </div>
        </div>
    </nav>

    <!-- Search -->
    <section class="cSearch">
        <div id="cSearch" class="cOverlay">
            <div class="position-relative">
                <button class="btn closeSearch" onclick="closeSearch()">
                    <i class="fas fa-times"></i>
                </button>
                <div class="cForm">
                    <form action="">
                        <div class="form-group">
                            <input id="cSearchbar" type="text" class="form-control shadow-none" spellcheck="false" placeholder="Search ....">
                        </div>
                    </form>
                    <p>Tekan ENTER untuk melakukan pencarian.</p>
                </div>
            </div>
        </div>
    </section>