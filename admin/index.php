<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Bung Karno</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/icons/favicon.ico">

    <script>
        function tutuppopup() {
            document.getElementById('parentpopup').style.display = "none";
        }
    </script>

</head>


<body>
    <!-- Pop up -->
    <div id="parentpopup">
        <div class="closepopup">
            <a href="#" onclick="tutuppopup();">X</a>
        </div>
        <div class="childpopup">
            <h2>Tugas UAS </h2>
            <h4>Membuat website sederhana menggunakan : HTML, CSS, JS dan menggunakan database MySQL</h4> <br>
            <ul type="none">
                <li>- Penggunaan Javascript pada website ini dapat dilihat pada efek teks mengetik, serta pop up ini.
                </li>
                <li>- Database MySQL digunakan pada halaman Login dan Registrasi</li>
                <li>- Website ini bisa digunakan di Mobile dan Dekstop(Laptop)</li><br>
            </ul>

            <p><strong>Kelompok Ganjil (3sip1)</strong></p>
        </div>
    </div>

    <!-- sidebar -->
    <input type="checkbox" id="check">
    <div class="sidebar">
        <ul>
            <li><label for="check" class="close-sidebar-mobile"> <a>
                        <-- Tutup</a> </label> <li><a href="#">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </div>

    <!-- Bagian Header -->
    <header>
        <div class="container">
            <img src="img/logo.png">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>

            <!-- Menu untuk Mobile -->
            <label for="check" class="mobile-menu"><i class="fa-solid fa-bars fa-2x"></i></label>
        </div>

    </header>

    <!-- Bagian Banner -->
    <section class="banner">
        <div class="container">
            <div class="banner-left">
                <img src="img/logo_ubk.ico">
                <h2>Universitas Bung Karno <br>
                    Selamat datang di Website 3SIP1 <span class="efek-ngetik"></span></h2>
                <p>Ini adalah Website yang berisi informasi tentang Kelas 3SIP1 Universitas Bung Karno</p>
            </div>
        </div>
    </section>

    <!-- Bagian About -->
    <section id="about">
        <div class="container">
            <h3>About</h3>
            <p>Universitas Bung Karno, atau disingkat sebagai UBK, adalah salah satu universitas swasta terletak di DKI
                Jakarta yang menyandang nama besar Bapak Proklamator Indonesia, Ir.Soekarno</p>
            <p>Siapa sih yang tidak kenal dengan kampus bersejarah dan legendaris di kota jakarta ini bahkan yang
                didirikan oleh Presiden pertama di Indonesia yaitu Ir.Soekarno.
                Ini adalah Universitas Bung Karno (UBK). Mungkin kamu udah tidak asing dengar kata UBK,
                kampus dengan nama Bung Karno ini berada di Jakarta dan menyandang nama besar Ir.Soekarno, bahkan kampus
                ini memiliki mata kuliah khusus Ajaran Bung Karno yang membahas secara spesifik mengenai sejarah,
                filsafat, dan seluruh pemikiran dari Bung Karno. Tidak hanya itu, kampus ini menjadi satu-satunya kampus
                yang resmi didirikan oleh B.J. Habibie. Ada lima fakultas yang bisa kamu pertimbangkan kalau mau masuk
                ke UBK yaitu
                ada Fakultas Hukum, Fakultas Ekonomi, Fakultas Ilmu Sosial dan Politik (FISIP), Fakultas Teknik, dan
                Fakultas Ilmu Komputer Universitas Bung Karno adalah universitas swasta yang bertempat di Jakarta Pusat,
                Indonesia.
                Universitas ini didirikan oleh Yayasan Pendidikan Soekarno pada tahun 1999 dan diresmikan oleh Presiden
                RI ketiga, Prof. Dr. Ing. B.J. Habibie di Istana Presiden.Berdirinya Universitas Bung Karno mendapat
                sambutan luar biasa dari masyarakat.
                Hal ini terbukti dari banyaknya jumlah pendaftar, baik untuk menjadi mahasiswa maupun dosen. Pada tahun
                akademik 1983/1984, jumlah calon mahasiswa peserta tes ujian masuk sebanyak 4.200 orang dari 5.000 orang
                yang mengajukan formulir permohonan dan jumlah pelamar dosen sebanyak 221 orang.
                Apabila kamu mempertanyakan tentang akreditasinya, jangan khawatir. Sebab kampus inii telah menyandang
                status terakreditasi dari BAN-PT. </p>

        </div>
    </section>

    <!-- Bagian Portofolio -->
    <section id="portfolio">
        <div class="container">
            <h3>Portfolio Kelas 3SIP 1 </h3>
            <h3>Berbagi & Buka Bersama 2021</h3>
            <div class="col-4">
                <a href="">
                    <img src="img/mahasiswa1.jpeg" alt="">
                    <span>Foto 1</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/mahasiswa2.jpeg" alt="">
                    <span>Foto 2</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/mahasiswa3.jpeg" alt="">
                    <span>Foto 3</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/mahasiswa4.jpeg" alt="">
                    <span>Foto 4</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/mahasiswa5.jpeg" alt="">
                    <span>Foto 5</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/mahasiswa7.jpeg" alt="">
                    <span>Foto 6</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/mahasiswa8.jpeg" alt="">
                    <span>Foto 7</span>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="img/mahasiswa9.jpeg" alt="">
                    <span>Foto 8</span>
                </a>
            </div>



        </div>
    </section>

    <!-- Bagian Kontak -->
    <section id="contact">
        <div class="container">
            <h3>Contact</h3>

            <div class="col-3">
                <h4>Alamat</h4>
                <p>Jalan Kimia No 20, Kec. Menteng, Kota Jakarta Pusat </p>
            </div>

            <div class="col-3">
                <h4>Email</h4>
                <p>Bungkarno2022@gmail.com</p>
            </div>

            <div class="col-3">
                <h4>Telp/HP</h4>
                <p>+62 8211 23I 329 </p>
            </div>

        </div>
    </section>

    <!-- bagian footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - 3SIP1 (Kelompok Ganjil).</small>
        </div>
    </footer>


    <script src="js/script.js">
    </script>
</body>

</html>