<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK N 2</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- my css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Script Alpine.js-->
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo/1.png" alt="Bootstrap" width="70">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto fs-5 ">
          <li class="nav-item mx-3 ">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#jurusan">Jurusan</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#artikel">Artikel</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto fs-5 shadow-sm">
          <li class="nav-item fw-bold btn btn-sm btn-outline-info">
            <a class="nav-link" href="./pages/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- hero -->
  <section id="home">
    <div class="container-fluid mt-5 pt-5">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/bg/g-1.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fs-1 text-light fw-semibold">Tempat Belajar, Berkembang, dan Berprestasi</h5>
              <p class="text-light">SMK N 2 adalah rumah bagi siswa yang ingin berkembang dalam keterampilan dan
                pengetahuan. Kami mempersiapkan Anda menjadi pemimpin masa depan.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/bg/g-2.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fs-1 text-light fw-semibold">Membangun Karakter, Mengasah Keterampilan</h5>
              <p class="text-light">Dengan fasilitas lengkap dan tenaga pengajar profesional, SMK N 2 mendorong siswa
                untuk terus berkembang, baik secara akademis maupun non-akademis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hero -->

  <!-- About -->
  <section id="about" class="container py-5">
    <div class="mb-5">
      <h2 class="display-4 text-center pb-3 fw-semibold">WELCOME TO <span class="text-info">SMK N 2</span></h2>
      <p class="text-center fst-italic">SMKN 2 merupakan sekolah terbagus dan terluas yang ada di Papua
        Ada 5 jurusan yang siap mempersiapkan anda menjadi orang sukses</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 text-center mb-4">
        <img src="assets/img/about/ks-1.jpg" alt="Kepala Sekolah" width="250" class="img-fluid rounded shadow">
        <h4 class="mt-3">Kepala Sekolah</h4>
      </div>
      <div class="col-12 col-md-6">
        <div class="card-about">
          <div class="card-body">
            <h2 class="card-title mb-4 fw-medium">Visi</h2>
            <p class="card-text">Sebagai Lembaga Diklat Kejuruan yang Berstandar Mutu dan Tetap Mengemban Potensi
              Tanah Papua Menuju Kemandirian.</p>
            <h2 class="card-title mb-4 fw-medium">Misi</h2>
            <ul class="list-unstyled">
              <li class="d-flex align-items-start mb-2">
                <span class="badge bg-info rounded-pill me-3">1</span>
                <span>Menyelenggarakan PBM yang Bermutu, Berakhlak dan Bermoral.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <span class="badge bg-info rounded-pill me-3">2</span>
                <span>Mengembangkan kegiatan Diklat yang Inovatif, Kreatif dan Produktif.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <span class="badge bg-info rounded-pill me-3">3</span>
                <span>Mendorong partisipasi aktif dalam menjaga lingkungan.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <span class="badge bg-info rounded-pill me-3">4</span>
                <span>Mengembangkan keterampilan dan kreativitas siswa.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <span class="badge bg-info rounded-pill me-3">5</span>
                <span>Menyediakan layanan Diklat bermutu bagi Lembaga-Lembaga Dinas/Instansi, sesuai dengan bidang
                  keahlian yang ada.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About -->

  <!-- jurusan -->
  <section id="jurusan" class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-4 text-center pb-3 fw-semibold">Jurusan <span class="text-info">SMK N 2</span></h2>
        <p class="lead">Pilih jurusan yang sesuai dengan minat dan bakat Anda.</p>
      </div>
      <div x-data="card()" class="row">
        <template x-for="(item, index) in cardJurusan" :key="index">
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm border-info">
              <img :src="item.gambar" class="card-img-top object-fit-cover" alt="Jurusan 1" height="200">
              <div class="card-body">
                <h5 class="card-title" x-text="item.judul">Teknik Komputer & Jaringan</h5>
                <p class="card-text" x-text="item.text">Program keahlian ini membekali siswa dengan kemampuan dalam perakitan komputer,
                  jaringan, dan keamanan data. Lulusan siap bekerja di berbagai industri teknologi.</p>
              </div>
              <div class="card-footer bg-transparent border-0 text-center pb-4">
                <a href="#" class="btn btn-info text-light">Selengkapnya</a>
              </div>
            </div>
          </div>
        </template>
        <div class="d-flex justify-content-center my-4">
          <button @click="prevPage()" :disabled="currentPage === 1" class="btn btn-outline-info me-2" aria-label="Previous">
            <i class="bi bi-chevron-left"></i>
            <span class="d-none d-md-inline">Previous</span>
          </button>
          <template x-for="page in totalPage" :key="page">
            <button @click="changePage(page)" class="btn mx-2" aria-label="Current Page"
              :class="{'btn-info': currentPage === page, 'btn-outline-info': currentPage !== page}">
              <span x-text="page"></span>
            </button>
          </template>
          <button @click="nextPage()" :disabled="currentPage === totalPage" class="btn btn-outline-info ms-2" aria-label="Next">
            <span class="d-none d-md-inline">Next</span>
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- jurusan -->

  <!-- artikel -->
  <section id="artikel" x-data="{ aktifArtikel: null }">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-4 pb-3 fw-semibold">Berita <span class="text-info">Terbaru</span></h2>
        <p class="lead fst-italic">Berita terbaru dan artikel menarik dari sekolah kami.</p>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card article-card h-100 shadow-sm border-0">
            <img src="assets/img/berita/b-3.jpg" class="card-img-top article-image" alt="Artikel 1" height="300">
            <div class="card-body">
              <div class="article-meta pb-3 text-secondary">20 September 2024</div>
              <h5 class="card-title">Prestasi Siswa dalam Olimpiade Sains Nasional</h5>
              <p class="card-text">
                Siswa kami berhasil meraih medali emas dalam Olimpiade Sains Nasional.
              </p>
              <!-- mengembalikan undefined, memastikan tidak ada nilai atau aksi yang dikembalikan atau diproses. -->
              <!-- jika 'baca selengkap' nya di klik maka aktifArtikel maka akan menjalnkan kondisi -->
              <!-- apakah artikel (baca selengkapnya) akan ditampilkan atau disembunyikan -->
              <!-- Mengecek aktifArtikel sama dengan 1. jika iya maka menjadi null, artikel tersebut akan disembunyikan. -->
              <!-- Jika aktifArtikel tidak sama dengan 1, maka akan di-set menjadi 1, yang artinya artikel tersebut akan ditampilkan. -->
              <!-- Jika nilainya 1, maka artikel tersebut dianggap aktif (ditampilkan). Jika nilainya null, maka artikel tersebut tidak aktif (disembunyikan). -->
              <a href="javascript:void(0)" class="read-more" @click="aktifArtikel = aktifArtikel === 1 ? null : 1">Baca
                Selengkapnya</a>
              <div x-show="aktifArtikel === 1" x-cloak class="mt-3">
                <p>Siswa kami berhasil meraih medali emas dalam Olimpiade Sains Nasional. Baca selengkapnya tentang
                  perjalanan mereka dan bagaimana mereka menghadapi tantangan selama kompetisi.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card article-card h-100 shadow-sm border-0">
            <img src="assets/img/berita/b-2.jpg" class="card-img-top article-image" alt="Artikel 2" height="300">
            <div class="card-body">
              <div class="article-meta pb-3 text-secondary">18 September 2024</div>
              <h5 class="card-title">Kunjungan Industri ke Perusahaan Teknologi Terdepan</h5>
              <p class="card-text">
                Siswa kelas 12 jurusan Teknik Informatika berkesempatan mengunjungi perusahaan teknologi terkemuka.
              </p>
              <a href="javascript:void(0)" class="read-more" @click="aktifArtikel = aktifArtikel === 2 ? null : 2">Baca
                Selengkapnya</a>
              <div x-show="aktifArtikel === 2" x-cloak class="mt-3">
                <p>Simak pengalaman mereka dalam memahami teknologi terbaru di perusahaan tersebut dan bagaimana
                  kunjungan ini memotivasi siswa untuk berkarir di bidang teknologi.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card article-card h-100 shadow-sm border-0">
            <img src="assets/img/berita/b-1.jpg" class="card-img-top article-image" alt="Artikel 3" height="300">
            <div class="card-body">
              <div class="article-meta pb-3 text-secondary">15 September 2024</div>
              <h5 class="card-title">Pengabdian Masyarakat oleh Siswa di Desa Terpencil</h5>
              <p class="card-text">
                Siswa kami terlibat dalam program pengabdian masyarakat di desa terpencil.
              </p>
              <a href="javascript:void(0)" class="read-more" @click="aktifArtikel = aktifArtikel === 3 ? null : 3">Baca
                Selengkapnya</a>
              <div x-show="aktifArtikel === 3" x-cloak class="mt-3">
                <p>Pelajari lebih lanjut tentang kegiatan ini, termasuk bagaimana siswa membantu masyarakat dalam bidang
                  pendidikan, kesehatan, dan teknologi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- artikel -->

  <!-- Awal Contact -->
  <section id="contact" class="container py-5">
    <div class="col-12 p-5">
      <h2 class="display-4 text-center  fw-semibold">Contact<span class="text-info"> Us</span> </h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="contact-info bg-white p-4">
          <h5>Alamat Kantor</h5>
          <p><i class="bi bi-geo-alt"></i> Jl. Padang Bulan No. 123, Jayapura, Papua</p>
          <h5>Email</h5>
          <p><i class="bi bi-envelope"></i> SmkN2@gmail.com</p>
          <h5>Telepon</h5>
          <p><i class="bi bi-telephone"></i> (021) 123-4567</p>
          <div class="social-media mt-4 text-center">
            <h5>Ikuti Kami di Sosial Media</h5>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-form bg-white p-4">
          <h5>Kirim Pesan</h5>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nama Lengkap" required>
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" placeholder="Subjek" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
            </div>
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-info text-light">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Contact -->

  <!-- Footer -->
  <footer class="bg-info mt-5 py-3">
    <div>
      <p class="footer text-center text-light">Copyright &copy WEBII 2024</p>
    </div>
  </footer>


  <!-- my js -->
  <script src="./assets/js/script.js"></script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
