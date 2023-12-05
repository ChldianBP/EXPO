<?php
include "kategori.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Beach Exploration</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontAwesome.css" />
    <link rel="stylesheet" href="css/hero-slider.css" />
    <link rel="stylesheet" href="css/templatemo-main.css" />
    <link rel="stylesheet" href="css/owl-carousel.css" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>

  <!--Beach Exploration-->
  <body>
    <div class="fixed-side-navbar">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#home"><span>Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about"><span>About</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#inspirasi"><span>Inspirasi</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ideKegiatan"><span>Ide Kegiatan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#panduan"><span>Panduan Praktis</span></a>
        </li>
      </ul>
    </div>

    <div class="parallax-content baner-content" id="home">
      <div class="container">
        <div class="first-content">
          <h1>Beach Exploration</h1>

          <div class="primary-button">
            <a href="#about">Discover More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="service-content" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="left-text">
              <h4>More About This Application</h4>
              <div class="line-dec"></div>
              <p>
                Beach Exploration merupakan platform e-travel yang menawarkan berbagai keuntungan bagi pengguna yang menyukai pantai dan liburan. Dengan fitur relaksasi virtual, pengguna dapat merasakan kedamaian dan terhubung dengan alam
                melalui gambar pantai yang indah, memberikan kesempatan untuk menghilangkan stres dan 3 bersantai setelah menjalani kehidupan sehari-hari. Selain itu, Destinasi Pantai memberikan gambaran mendalam tentang berbagai destinasi
                pantai populer, memungkinkan pengguna merencanakan perjalanan yang sesuai dengan minat mereka dan menjelajahi lokasi eksotis di daerah Bantul. Hal ini membantu pengguna memperluas wawasan mereka tentang destinasi pantai yang
                tersedia, sehingga memberikan pengalaman perjalanan yang tak terlupakan.
              </p>


              <div class="primary-button">
                <a href="#inspirasi">Learn More About Us</a>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <div class="service-item">
                  <h4>Destinasi & Inspirasi Pantai</h4>
                  <div class="line-dec"></div>
                  <p>Pada bagian ini kami menunjukkan beberapa pantai rekomendasi dari kami dan bagian ini juga berisi gambar pantai, nama pantai, dan alamat pantai</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="service-item">
                  <h4>Ide Ide Aktivitas</h4>
                  <div class="line-dec"></div>
                  <p>Halaman ini memberikan pengguna ide-ide aktivitas yang dapat mereka nikmati di pantai, seperti berjemur, berenang, bermain pasir, dan aktivitas lainnya. Ini mencakup deskripsi aktivitas dan tips yang berkaitan.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <h4>Panduan Praktis</h4>
                  <div class="line-dec"></div>
                  <p>
                    Halaman ini berisi informasi praktis yang membantu pengguna merencanakan perjalanan ke pantai. Ini termasuk apa yang perlu dibawa ke pantai dan bagaimana merencanakan perjalanan pantai, termasuk persiapan sebelum
                    keberangkatan dan itinerary.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Inspirasi  -->
    <div class="parallax-content projects-content" id="inspirasi">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="owl-testimonials" class="owl-carousel owl-theme">

            <?php
$result = mysqli_query($conn, "SELECT * FROM inspirasi");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
              <div class="item">
                <div class="testimonials-item">
                  <a href="img/<?php echo $row['gambar'];?>" data-lightbox="image-1"><img src="img/<?php echo $row['gambar'];?>" alt="" /></a>
                  <div class="text-content">
                    <h4><?php echo $row['nama_pantai'];?></h4>
                    <span><?php echo $row['alamat'];?></span>
                  </div>
                </div>
              </div>
              
              <?php
}
?>
<!-- End Inspirasi  -->

<!-- Ide Kegiatan -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php

$result = mysqli_query($conn, "SELECT * FROM ide_kegiatan");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
    <div class="tabs-content" id="ideKegiatan">
    <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="wrapper">
              <section id="first-tab-group" class="tabgroup">
                <div id="tab<?php echo $row['no'];?>">
                  <img src="img/<?php echo $row['gambar'];?>" alt="" />
                  <p><?php echo $row['deskripsi'];?></p>
                </div>
              </section>
              <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                <li><a href="#tab<?php echo $row['no'];?>" class="active">Ide kegiatan <?php echo $row['no'];?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
}
?> 
<!-- End Ide Kegiatan -->

<!-- Panduan Praktis -->
    <div class="service-content" id="panduan">
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="service-item">
                  <h1><b>Panduan Praktis</b></h1>
                  <div class="line-dec"></div>
                </div>
              </div>
              
<?php
$result = mysqli_query($conn, "SELECT * FROM panduan_praktis");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>  
              <div class="col-md-12">
                <div class="service-item">
                  <h4>Panduan Praktis <?php echo $row['no'];?></h4>
                  <div class="line-dec"></div>
                  <p><?php echo $row['isi'];?></p>
                </div>
              </div>

<?php
}
?>  

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End Panduan Praktis -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="primary-button">
              <a href="loginbe.php">Login Admin</a>
            </div>
            <ul>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-dribbble"></i></a>
              </li>
            </ul>
            <p>
              Copyright &copy; 2023
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>');
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
      function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
      }
    </script>

    <script>
      $(document).ready(function () {
        // Add smooth scrolling to all links
        $(".fixed-side-navbar a, .primary-button a").on("click", function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate(
              {
                scrollTop: $(hash).offset().top,
              },
              800,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });
      });
    </script>
  </body>
</html>

</html>
<?php mysqli_close($conn); ?>
