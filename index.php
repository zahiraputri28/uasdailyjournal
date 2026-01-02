<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | My Daily Journal</title>
    <link rel="icon" href="img/logo.jpg" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <style>
      .senin {
        border-color: blue;
      }
      .senin .card-header {
        background: blue;
      }

      .selasa {
        border-color: green;
      }
      .selasa .card-header {
        background: green;
      }

      .rabu {
        border-color: red;
      }
      .rabu .card-header {
        background: red;
      }

      .kamis {
        border-color: orange;
      }
      .kamis .card-header {
        background: orange;
        color: black;
      }

      .jumat {
        border-color: aqua;
      }
      .jumat .card-header {
        background: aqua;
      }

      .sabtu {
        border-color: gray;
      }
      .sabtu .card-header {
        background: gray;
      }

      .minggu {
        border-color: black;
      }
      .minggu .card-header {
        background: black;
      }
    </style>
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <button
              type="button"
              class="btn btn-dark theme"
              id="dark"
              title="dark"
            >
              <i class="bi bi-moon-stars-fill"></i>
            </button>
            <button
              type="button"
              class="btn btn-danger theme"
              id="light"
              title="light"
            >
              <i class="bi bi-brightness-high"></i>
            </button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->

    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/gambar1.jpg" class="img-fluid" width="300" />
          <div>
            <h1 class="fw-bold display-4">
              Where Every Day Becomes a Story
            </h1>
            <h4 class="lead display-6">
              Catatan harianku dimulai dari sini.
            </h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->

    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100 text-body senin">
              <div class="card-header text-white">Senin</div>
              <div class="card-body">
                <p class="card-text">
                  <b>10:20 - 12.00</b><br />
                  Basis Data<br />
                  H.5.4
                </p>
                <p>
                  <b>14:10 - 15.50</b><br />
                  Pendidikan Kewarganegaraan<br />
                  E.3
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 text-body selasa">
              <div class="card-header text-white">Selasa</div>
              <div class="card-body">
                <p class="card-text">
                  <b>08:40 - 10:20 </b><br />
                  Basis data<br />
                  D.2.K
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 text-body rabu">
              <div class="card-header text-white">Rabu</div>
              <div class="card-body">
                <p class="card-text">
                  <b> 07:00 - 09.30</b><br />
                  Probabilitas Dan Statistik <br />
                  H.5.11
                </p>
                <p>
                  <b> 10:20 - 12:00 </b><br />
                  Pemrograman Berbasis Web <br />
                  D.2.J
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 text-body kamis">
              <div class="card-header text-white">Kamis</div>
              <div class="card-body">
                <p class="card-text">
                  <b> 09:30 - 12:00 </b><br />
                  Sistem Informasi <br />
                  H.5.12
                </p>
                <p>
                  <b> 12:30 - 15:00 </b><br />
                  Logika Informatika <br />
                  H.3.8
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 text-body jumat">
              <div class="card-header text-white">Jumat</div>
              <div class="card-body">
                <p class="card-text">
                  <b> 09:30 - 12:00 </b><br />
                  Rekayasa Perangkat Lunak<br />
                  H.3.9
                </p>
                <p>
                  <b> 12:30 - 15:00 </b><br />
                  Sistem Operasi <br />
                  H.5.3
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 text-body sabtu">
              <div class="card-header text-white">Sabtu</div>
              <div class="card-body">
                <p class="card-text">Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 text-body minggu">
              <div class="card-header text-white">Minggu</div>
              <div class="card-body">
                <p class="card-text">Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->

    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/gal1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/gal2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/gal3.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/gal4.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/gal5.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->

    <!-- profile begin -->
    <section id="profile" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Profile</h1>
        <div class="d-sm-flex align-items-center justify-content-center">
          <div class="p-3">
            <img
              src="img/pro.png"
              class="rounded-circle border shadow"
              width="300"
            />
          </div>

          <!-- Kolom Biodata -->
            <div class="card bg-body-tertiary text-body shadow-sm border-0">
              <div class="card-body">
                <h3 class="fw-bold text-center mb-3">Zahira Putri Rabiah</h3>
                <p class="text-center text-secondary mb-4">
                  Mahasiswa Teknik Informatika
                </p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>NIM:</b> A11.2024.16026</li>
                  <li class="list-group-item">
                    <b>Program Studi:</b> Teknik Informatika
                  </li>
                  <li class="list-group-item">
                    <b>Email:</b> 111202416026@mhs.dinus.ac.id
                  </li>
                  <li class="list-group-item">
                    <b>Telepon:</b> +62 895 1323 9757
                  </li>
                  <li class="list-group-item">
                    <b>Alamat:</b> Perumahan Mijen Harmoni B-09, Kota Semarang
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--kolom biodata end-->
    <!-- profile end -->

    <!-- footer begin -->
    <footer id="footer" class="text-center p-5 bg-danger-subtle">
      <div>
        <a href="https://instagram.com/ptty_biaaay"
          ><i class="bi bi-instagram h2 p-2"></i
        ></a>
        <a href="https://twitter.com/stiilzy_"
          ><i class="bi bi-twitter h2 p-2"></i
        ></a>
        <a href="https://wa.me/+6289513239757"
          ><i class="bi bi-whatsapp h2 p-2"></i
        ></a>
      </div>
      <div>Zahira Putri Rabiah &copy; 2025</div>
    </footer>
    <!-- footer end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      window.setTimeout("tampilWaktu()", 1000);

      function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
      document.getElementById("dark").onclick = function () {
        document.body.style.backgroundColor = "black";

        document
          .getElementById("hero")
          .classList.remove("bg-danger-subtle", "text-black");
        document.getElementById("hero").classList.add("bg-dark", "text-white");

        document
          .getElementById("article")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("article")
          .classList.add("bg-secondary", "text-white");

        document
          .getElementById("schedule")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("schedule")
          .classList.add("bg-secondary", "text-white");

        document
          .getElementById("gallery")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("gallery")
          .classList.add("bg-dark", "text-white");

        document
          .getElementById("profile")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("profile")
          .classList.add("bg-secondary", "text-white");

        document
          .getElementById("footer")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("footer")
          .classList.add("bg-dark", "text-white");

        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.remove("bg-body-tertiary", "text-body");
          collection[i].classList.add("bg-dark", "text-white", "border-secondary");
        }

        const collection2 = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < collection2.length; i++) {
          collection2[i].classList.remove("bg-white");
          collection2[i].classList.add("bg-secondary", "text-white", "border-dark");
        }

        const smallText = document.getElementsByTagName("small");
        for (let i = 0; i < smallText.length; i++) {
          smallText[i].classList.remove("text-body-secondary");
          smallText[i].classList.add("text-white");
        }

        const scheduleCards = document.querySelectorAll("#schedule .card");
        scheduleCards.forEach((card) => {
          card.classList.remove("text-body");
          card.classList.add("text-white");
        })
      };

      document.getElementById("light").onclick = function () {
        document.body.style.backgroundColor = "white";

        document
          .getElementById("hero")
          .classList.replace("bg-dark", "bg-danger-subtle");
        document
          .getElementById("hero")
          .classList.replace("text-white", "text-black");

        document
          .getElementById("article")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("article")
          .classList.add("text-black");

        document
          .getElementById("schedule")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("schedule")
          .classList.add("text-black");

        document
          .getElementById("gallery")
          .classList.replace("bg-dark", "bg-danger-subtle");
        document
          .getElementById("gallery")
          .classList.replace("text-white", "text-black");

        document
          .getElementById("profile")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("profile")
          .classList.add("text-black");

        document
          .getElementById("footer")
          .classList.replace("bg-dark", "bg-danger-subtle");
        document
          .getElementById("footer")
          .classList.replace("text-white", "text-black");

        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.remove("bg-dark", "bg-secondary", "text-white", "border-secondary");
          collection[i].classList.add("bg-body-tertiary", "text-body");
        }

        const collection2 = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < collection2.length; i++) {
          collection2[i].classList.remove("bg-secondary", "text-white", "border-dark");
          collection2[i].classList.add("bg-white");
        }

        const smallText = document.getElementsByTagName("small");
        for (let i = 0; i < smallText.length; i++) {
          smallText[i].classList.remove("text-white");
          smallText[i].classList.add("text-body-secondary");
        }

        const scheduleCards = document.querySelectorAll("#schedule .card");
        scheduleCards.forEach((card) => {
          card.classList.remove("text-white");
          card.classList.add("text-body");
        })
      };
    </script>
  </body>
</html>
