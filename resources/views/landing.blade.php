<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Portofolio - Hana Karimah</title>

  <link rel="shortcut icon" href="images/logohk.png" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="template/css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="template/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="template/vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="template/vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="template/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="template/vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="template/vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="template/css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="template/css/topbar.virtual.css">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  
  <div class="vg-page page-home" id="home" style="background-image: url(images/bg_kucing.jpg); background-position: top">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">Hana</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">Tentang</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-animate="scrolling">Kontak</a>
            </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              @guest
                <a href="/login" class="btn btn-fab btn-theme no-shadow">HK</a>
              @endguest
              @auth
              <div class="btn-group">
                <button type="button" class="btn btn-fab btn-theme no-shadow" style="border-radius: 50%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  HK
                </button>
                <div class="dropdown-menu">
                  <button class="dropdown-item" href="#" data-toggle="modal" data-target="#pesanModal">Pesan</button>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout">Logout</a>
                </div>
              </div>
              @endauth
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Selamat Datang</h5>
      <h1 class="fw-light mb-4">Perkenalkan Aku <b class="fg-theme">Hana</b> Karimah</h1>
      <div class="badge">Mahasiswa Sistem Informasi</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="images/foto.jpeg" style="object-fit: cover; height: 100%; image-rendering: crisp-edges;" class="img-thumbnail" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">Hana Karimah</h1>
          <h5 class="fg-theme mb-3">Mahasiswa Sistem Informasi</h5>
          <p class="text-muted">Sangat termotivasi untuk mengembangkan sifat kepemimpinan, berkomunikasi dengan profesional di depan publik, dan mampu bekerjasama secara individu maupun kelompok dengan memahami berbagai karakteristik partner kerja.</p>
          <ul class="theme-list">
            <li><b>Asal:</b> Balikpapan, Kalimantan Timur</li>
            <li><b>Tempat, Tanggal Lahir:</b> Balikpapan, 31 Maret 2002</li>
            <li><b>Usia:</b> 19 Tahun</li>
            <li><b>Jenis Kelamin:</b> Perempuan</li>
          </ul>
          <a href="https://www.instagram.com/hanaakrmh_/" class="btn btn-theme-outline" target="_blank">Kunjungi Instagram</a>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <h1 class="text-center fw-normal wow fadeIn">Skill</h1>
      <div class="row py-3">
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Soft Skill</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Komunikasi dan Public Speaking</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">86%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Bekerja secara Individu maupun Kelompok</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">80%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Berkomunikasi secara Persuasif</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Mengikuti Instruksi dan Memberikan Hasil yang Terbaik </span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Hard Skill</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Programming Python</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">92%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Manajemen</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 99%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">99%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Desain</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">79%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 wow fadeInRight">
          <h2 class="fw-normal">Pendidikan</h2>
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">2020</div>
              <div class="details">
                <h5>Kuliah</h5>
                <small class="fg-theme">INSTITUT TEKNOLOGI KALIMANTAN</small>
                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p> --}}
              </div>
            </li>
            <li>
              <div class="title">2017 - 2020</div>
              <div class="details">
                <h5>Sekolah Menengah Atas</h5>
                <small class="fg-theme">SMA NEGERI 5 BALIKPAPAN SELATAN</small>
                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p> --}}
              </div>
            </li>
            <li>
              <div class="title">2014 - 2017</div>
              <div class="details">
                <h5>Sekolah Menengah Pertama</h5>
                <small class="fg-theme">SMP NEGERI 5 BALIKPAPAN SELATAN</small>
                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p> --}}
              </div>
            </li>
            <li>
              <div class="title">2008 - 2014</div>
              <div class="details">
                <h5>Sekolah Dasar</h5>
                <small class="fg-theme">SDIT AL-AULIYA 1</small>
                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p> --}}
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
          <h2 class="fw-normal">Pengalaman</h2>
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">2021</div>
              <div class="details">
                <h5>Panitia Acara INSPACE 2021</h5>
                <small class="fg-theme">INSTITUT TEKNOLOGI KALIMANTAN</small>
                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p> --}}
              </div>
            </li>
            <li>
              <div class="title">2021</div>
              <div class="details">
                <h5>Panitia CREATION 2021</h5>
                <small class="fg-theme">INSTITUT TEKNOLOGI KALIMANTAN</small>
                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p> --}}
              </div>
            </li>
            <li>
              <div class="title">2021</div>
              <div class="details">
                <h5>Divisi Acara ROC ITK 2021</h5>
                <small class="fg-theme">INSTITUT TEKNOLOGI KALIMANTAN</small>
                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p> --}}
              </div>
            </li>
            <li>
              <div class="title">2020</div>
              <div class="details">
                <h5>LKMM PRA-TD VI</h5>
                <small class="fg-theme">INSTITUT TEKNOLOGI KALIMANTAN</small>
                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p> --}}
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Portfolio page -->
  <div class="vg-page page-portfolio" id="portfolio" style="padding-bottom: 0">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Portfolio</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Hasil Portofolio</h1>
      <div class="gridder my-3">
        @foreach ($data as $dt)
        <div class="grid-item apps wow zoomIn">
          <div class="img-place" data-src="storage/images/{{ $dt->gambar }}" @guest data-fancybox @endguest data-caption="<h5 class='fg-theme'>{{ $dt->judul }}</h5>">
            <img src="storage/images/{{ $dt->gambar }}" alt="">
            <div class="img-caption" style="cursor: auto">
              <div class="d-flex justify-content-between">
                <h5 class="fg-theme">{{ $dt->judul }}</h5>
                @auth
                  <a href="/hapus/{{ $dt->id }}" class="btn btn-danger">Hapus</a>
                @endauth
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    @auth
      <div class="text-center wow ">
        <button type="button" class="btn btn-theme" data-toggle="modal" data-target="#tambah">
          Tambah Data
        </button>
      </div>
      @endauth
  </div> 
  <!-- End Portfolio page -->
  
  <!-- Contact -->
  <div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Kontak</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Kenal Lebih Dekat</h1>
      <div class="row py-5">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
          <div class="vg-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.2479514282949!2d116.92432283089497!3d-1.2493664612444833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df145b267538d67%3A0x170ee0d78d4093f2!2sJl.%20Telaga%20Mas%20No.52%2C%20Sepinggan%2C%20Kecamatan%20Balikpapan%20Selatan%2C%20Kota%20Balikpapan%2C%20Kalimantan%20Timur%2076116!5e0!3m2!1sen!2sid!4v1630130313541!5m2!1sen!2sid" style="border:0; width:100%; height:100%" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="col-lg-5">
          <form class="vg-contact-form" action="/pesan" method="POST">
            @csrf
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="nama" placeholder="Nama" required>
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="email" placeholder="Email" required>
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="subjek" placeholder="Subjek" required>
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="pesan" rows="6" placeholder="Masukkan Pesan ..." required></textarea>
              </div>
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->
  
  <!-- Footer -->
  <div class="vg-footer" style="margin-bottom: 0">
    <h1 class="text-center">Portofolio Hana</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Alamat</p>
            <hr class="divider">
            <p class="fs-large fg-white">Jl. Telaga Mas RT 52 Sepinggan, Balikpapan Selatan</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Social Media</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li><a href="https://www.instagram.com/hanaakrmh_" target="_blank">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 py-3">
          <div class="float-lg-right">
            <p>Kontak</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li>10201044@student.itk.ac.id</li>
              <li>+628 8888 8888</li>
              <li>+628 8888 8888</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-12">
          <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made with <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode ID</a></p>
        </div>
      </div>
    </div>
  </div> <!-- End footer -->
  

  @auth
  <!-- Modal -->
  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Portofolio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form action="/tambah" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" class="form-control" accept="image/*" required>
            </div>
            <div class="form-group">
              <label>Judul</label>
              <input type="text" name="judul" class="form-control" placeholder="Judul Portofolio" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Pesan Modal -->
  <div class="modal fade" id="pesanModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Pesan Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          @if (count($pesan) < 1)
            <div class="alert alert-success" role="alert">
              <strong>Belum ada pesan masuk</strong>
            </div>

          @else
          @foreach ($pesan as $ps)
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title">{{ $ps->subjek }}</h4>
              <p class="card-text"><strong>Nama :</strong> {{ $ps->nama }}</p>
              <p class="card-text" style="margin-top: -10px"><strong>Email :</strong> {{ $ps->email }}</p>
              <p class="card-text" style="margin-top: -10px"><strong>Pesan :</strong> {{ $ps->pesan }}</p>
            </div>
          </div>
          @endforeach
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  @endauth
  
  
  <script src="template/js/jquery-3.5.1.min.js"></script>
    
  <script src="template/js/bootstrap.bundle.min.js"></script>
    
  <script src="template/vendor/owl-carousel/owl.carousel.min.js"></script>
    
  <script src="template/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    
  <script src="template/vendor/isotope/isotope.pkgd.min.js"></script>
    
  <script src="template/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    
  <script src="template/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="template/vendor/wow/wow.min.js"></script>

  <script src="template/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="template/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="template/js/google-maps.js"></script>
    
  <script src="template/js/topbar-virtual.js"></script>
  
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>