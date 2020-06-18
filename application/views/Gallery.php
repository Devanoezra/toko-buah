<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <!-- Swiper -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/swiper.min.css">
  <style media="screen">
  .swiper-container {
width: 100%;
padding-top: 20px;
padding-bottom: 50px;
}
.swiper-slide {
background-position: center;
background-size: cover;
width: 300px;
height: 380px;
background: #fff;
}

.swiper-slide .imgBx{
width: 100%;
height: 300px;
overflow: hidden;
}

.swiper-slide .imgBx img{
width: 100%;
height: 100%;
}

.swiper-slide .details{
box-sizing: border-box;
font-size: 20px;
padding: 20px;
}

.swiper-slide .details h3{
margin: 0;
padding: 0;
font-size: 20px;
text-align: center;
line-height: 20px;
}

.swiper-slide .details h3 span{
font-size: 16px;
color: #f44336;
}
  </style>
  </head>
  <body>
    <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="imgBx">
                    <img src="<?= base_url()?>assets/img/gallery/jeruk.jpg" class="img-fluid">
                  </div>
                  <div class="details">
                    <h3>Jeruk <br> <hr> <span>  </span> </h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="imgBx">
                    <img src="<?= base_url()?>assets/img/gallery/Semangka.jpg" class="img-fluid">
                  </div>
                  <div class="details">
                    <h3>Semangka <br> <span> <hr> </span> </h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="imgBx">
                    <img src="<?= base_url()?>assets/img/gallery/mangga.jpg" class="jtm1">
                  </div>
                  <div class="details">
                    <h3>Mangga <br> <span> <hr> </span> </h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="imgBx">
                    <img src="<?= base_url()?>assets/img/gallery/anggur.jpg" class="img-fluid">
                  </div>
                  <div class="details">
                    <h3>Anggur <br> <span> <hr> </span> </h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="imgBx">
                    <img src="<?= base_url()?>assets/img/gallery/pisang.jpg" class="img-fluid">
                  </div>
                  <div class="details">
                    <h3>Pisang <br> <span> <hr> </span> </h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="imgBx">
                    <img src="<?= base_url()?>assets/img/gallery/durian.jpg" class="img-fluid">
                  </div>
                  <div class="details">
                    <h3>Durian <br> <span> <hr> </span> </h3>
                  </div>
                </div>
              </div>
      <!-- Add Pagination -->
              <div class="swiper-pagination">
              </div>
            </div>

    <script src="<?= base_url() ?>assets/js/swiper.min.js"></script>
    <script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: -5,
      stretch: 0,
      depth: 5,
      modifier: 1,
      slideShadows : true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });
    </script>
  </body>
</html>
