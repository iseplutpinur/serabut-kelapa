<?php
$counter = 1;
function getBg(int $counter): string
{
  if ($counter % 2 == 0)  return 'bg-light';
  else return 'bg-white';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $pengaturan['title']['value2'] ?></title>
  <meta name="description" content="<?= $pengaturan['deskripsi']['value1'] ?>">

  <!-- icon -->

  <link rel="icon" href="<?= base_url('files/image/pengaturan/' . $pengaturan['icon']['value2']) ?>">

  <link rel="stylesheet" href="<?= base_url() ?>assets/template/front/css/themify-icons.css">
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/template/front/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/template/front/css/feather.css">

  <!-- gallery -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/template/front/css/baguetteBox.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/template/') ?>plugins/fontawesome-free/css/all.min.css">
</head>


<body class="color-theme-blue mont-font">
  <div class="preloader"></div>
  <div class="main-wrap">
    <div class="header-wrapper pt-3 pb-3 shadow-none pos-fixed position-absolute">
      <div class="container">
        <div class="d-flex flex-row justify-content-between">
          <?php if ($home_logo['value2'] == 1) : ?>
            <a href="">
              <img style="max-width: 200px;" src="<?= base_url('files/image/home/') . $home_logo['value1'] ?>" alt="Site Logo">
            </a>
          <?php endif ?>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav nav-menu float-none text-center">
              <?php if ($home_show['value1'] == 1) : ?>
                <li class="nav-item"><a class="nav-link nav" href="#home">Home</a></li>
              <?php endif; ?>

              <li class="nav-item"><a class="nav-link nav" href="#about_us">About Us</a></li>
              <li class="nav-item"><a class="nav-link nav" href="#gallery">Gallery</a></li>
              <li class="nav-item"><a class="nav-link nav" href="#feature">Feature</a></li>
              <li class="nav-item"><a class="nav-link nav" href="#product">Product</a></li>
              <li class="nav-item"><a class="nav-link nav" href="#testimoni">Testimoni</a></li>
              <li class="nav-item"><a class="nav-link nav" href="#team">Team</a></li>

              <?php if ($kontak_show['value1'] == 1) : ?>
                <li class="nav-item"><a class="nav-link nav" href="#contact">Contact Us</a></li>
              <?php endif ?>
            </ul>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </div>

    <?php if ($home_show['value1'] == 1) : ?>
      <div class="banner-wrapper bg-image-cover bg-image-bottomcenter" <?php if ($home_foto_jumbotron['value2'] == 1) : ?> style="background-image: url(<?= base_url('files/image/home/') . $home_foto_jumbotron['value1'] ?>);" <?php endif ?> id="home">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 vh-lg--100 align-items-center d-flex sm-mt-7">
              <div class="card w-100 border-0 bg-transparent d-block sm-mb-5 sm-mt-3">
                <?php if ($home_judul_utama['value2'] == 1) : ?>
                  <h4 class="fw-700 text-white display4-size display4-lg-size display4-md-size lh-1 mb-0 os-init mt-5 " data-aos="fade-up" data-aos-delay="300" data-aos-duration="400"><?= $home_judul_utama['value1'] ?></h4>
                <?php endif ?>
                <?php if ($home_sub_judul['value2'] == 1) : ?>
                  <h4 class=" fw-500 mb-4 lh-30 font-xsss text-grey-500 mt-3 os-init" data-aos="fade-up" data-aos-delay="400" data-aos-duration="400"><?= $home_sub_judul['value1'] ?></h4>
                <?php endif ?>

                <?php if ($home_btn_title['value2'] == 1) : ?>
                  <a href="<?= $home_btn_link['value1'] ?>" class="btn border-0 w200 bg-primary p-3 text-white fw-600 rounded-lg d-inline-block font-xssss btn-light mt-1 os-init" data-aos="fade-up" data-aos-delay="500" data-aos-duration="400">
                    <?= $home_btn_title['value1'] ?>
                  </a>
                <?php endif ?>


              </div>
            </div>
            <div class="col-lg-6 align-items-center d-flex vh-lg--100 ">
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($about_show['value1'] == 1) : ?>
      <div class="how-to-work mt-5 pt-5   <?php echo getBg($counter);
                                          $counter++ ?>" id="about_us">
        <div class="container">
          <div class="d-lg-flex flex-row flex-row-reverse justify-content-between">
            <?php if ($about_foto['value2'] == 1) : ?>
              <div class="mb-4 ml-lg-5">
                <img src="<?= base_url('files/image/about/') . $about_foto['value1'] ?>" alt="image" class="rounded-lg img-fluid shadow-xs">
              </div>
            <?php endif ?>

            <div class="width-50 page-title style1">
              <?php if ($about_judul['value2'] == 1) : ?>
                <h2 class="fw-700 text-grey-800 display1-size display2-md-size lh-3"><?= $about_judul['value1'] ?></h2>
              <?php endif ?>
              <?php if ($about_detail['value2'] == 1) echo $about_detail['value1']; ?>
            </div>

          </div>
        </div>
      </div><br><br><br>
    <?php endif ?>

    <?php if ($galeri_show['value1'] == 1) : ?>
      <div class="how-to-work pt-lg--5 pb-lg--7   <?php echo getBg($counter);
                                                  $counter++ ?>" id="gallery">

        <div class="container">
          <div class="row justify-content-center">
            <div class="page-title style1 col-xl-6 col-lg-8 col-md-10 text-center">
              <?php if ($galeri_judul['value2'] == 1) : ?>
                <h2 class="text-grey-900 fw-700 display1-size display2-md-size pb-3 mb-0 d-block">
                  <?= $galeri_judul['value1'] ?>
                </h2>
              <?php endif ?>
              <?php if ($galeri_sub_judul['value2'] == 1) : ?>
                <p class="fw-300 font-xsss lh-28 text-grey-500">
                  <?= $galeri_sub_judul['value1'] ?>
                </p>
              <?php endif ?>
            </div>
          </div>
          <div class="tz-gallery">
            <div class="row">
              <?php foreach ($galeri_items as $item) : ?>
                <div class="col-sm-6 col-md-4">
                  <a class="lightbox" href="<?= base_url('files/image/galeri/') . $item['foto'] ?>">
                    <img src="<?= base_url('files/image/galeri/') . $item['foto'] ?>" alt="<?= $item['nama'] ?>">
                  </a>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($feature_show['value1'] == 1) : ?>
      <div class="how-to-work pb-lg--7    <?php echo getBg($counter);
                                          $counter++ ?>" id="feature">
        <br><br><br>
        <div class="container">
          <div class="d-flex flex-row justify-content-center">
            <div class="page-title style1 col-xl-6 col-lg-8 col-md-10 text-center mb-3 ">
              <?php if ($feature_judul['value2'] == 1) : ?>
                <h2 class="text-grey-900 fw-700 display1-size display2-md-size pb-3 mb-0 d-block">
                  <?= $feature_judul['value1'] ?>
                </h2>
              <?php endif; ?>
              <?php if ($feature_sub_judul['value2'] == 1) : ?>
                <p class="fw-300 font-xsss lh-28 text-grey-500">
                  <?= $feature_sub_judul['value1'] ?>
                </p>
              <?php endif ?>
            </div>
          </div>
          <div class="row">
            <?php foreach ($feature_items as $item) : ?>
              <div class="col-md-4">
                <div style="width: auto; padding: 24px; display: flex; flex-direction: column; align-items: center;">
                  <img src="<?= base_url('files/image/feature/') . $item['foto'] ?>" alt="<?= $item['nama'] ?>" style="max-width: 78px;">
                  <h3 class="fw-600 font-xs mt-3 mb-2 mt-2">
                    <?= $item['nama'] ?>
                  </h3>
                  <p class="font-xsss fw-400 text-grey-500 lh-28 mt-0 mb-0  mt-3 w-75 w-xs-90 text-center">
                    <?= $item['keterangan'] ?>
                  </p>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($produk_show['value1'] == 1) : ?>
      <div class="product-wrapper pb-5 pt-5   <?php echo getBg($counter);
                                              $counter++ ?>" id="product">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-left mb-5 pb-0">
              <?php if ($produk_judul['value2'] == 1) : ?>
                <h2 class="text-grey-800 fw-700 display1-size display2-md-size lh-2">
                  <?= $produk_judul['value1'] ?>
                </h2>
              <?php endif; ?>
              <?php if ($produk_sub_judul['value2'] == 1) : ?>
                <p class="fw-300 font-xsss lh-28 text-grey-500">
                  <?= $produk_sub_judul['value1'] ?>
                </p>
              <?php endif ?>
            </div>

            <div class="col-lg-12">
              <div class="product-slider owl-carousel owl-theme overflow-visible dot-none right-nav pb-4">
                <?php foreach ($produk_items as $item) : ?>
                  <div class="owl-items text-center">
                    <div class="d-md-flex flex-row-reverse justify-content-between width-100">
                      <div class="p-md-3">
                        <img src="<?= base_url('files/image/produk/') . $item['foto'] ?>" class="img-fluid" style="border-radius: 16px; max-width: 300px;" alt="<?= $item['nama'] ?>">
                      </div>
                      <div class="text-left p-md-3" style="max-width: 60%;">
                        <h1 class="text-grey-800 fw-600 display1-size display2-md-size lh-2"><?= $item['nama'] ?></h1>
                        <p><?= $item['keterangan'] ?></p>

                        <a class="btn btn-success mt-md-4" href="https://api.whatsapp.com/send?phone=<?= $whatsapp ?>&text=<?= str_replace('  ', '', $item['nama']) ?>">Contact Us

                          <svg xmlns="http://www.w3.org/2000/svg" width="16" style="margin-left: 3px;" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($testimoni_show['value1'] == 1) : ?>
      <div class="feedback-wrapper  pb-5 pt-5    <?php echo getBg($counter);
                                                  $counter++ ?>" id="testimoni">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-left mb-5 pb-0">
              <?php if ($testimoni_judul['value2'] == 1) : ?>
                <h2 class="text-grey-800 fw-700 display1-size display2-md-size lh-2">
                  <?= $testimoni_judul['value1'] ?>
                </h2>
              <?php endif; ?>
              <?php if ($testimoni_sub_judul['value2'] == 1) : ?>
                <p class="fw-300 font-xsss lh-28 text-grey-500">
                  <?= $testimoni_sub_judul['value1'] ?>
                </p>
              <?php endif ?>
            </div>

            <div class="col-lg-12">
              <div class="feedback-slider owl-carousel owl-theme overflow-visible dot-none right-nav pb-4">
                <?php foreach ($testimoni_items as $item) : ?>
                  <div class="owl-items text-center">
                    <div class="card w-100 p-5 text-left border-0 shadow-xss rounded-lg">
                      <div class="card-body pl-0 pt-0">
                        <img src="<?= base_url('files/image/testimoni/') . $item['foto'] ?>" alt="<?= $item['nama'] ?>" class="w45 float-left mr-3">
                        <h4 class="text-grey-900 fw-700 font-xsss mt-0 pt-1"><?= $item['nama'] ?></h4>
                        <h5 class="font-xssss fw-500 mb-1 text-grey-500"><?= $item['jabatan'] ?></h5>
                      </div>
                      <p class="font-xsss fw-400 text-grey-500 lh-28 mt-0 mb-0 "><?= $item['keterangan'] ?></p>
                      <div class="star d-block w-100 text-right mt-4 mb-0">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                          <?php if ($i <= $item['nilai']) : ?>
                            <img src="<?= base_url() ?>assets/template/front/images/star.png" alt="star" class="w15 mr-1 float-left mr-2">
                          <?php else : ?>
                            <img src="<?= base_url() ?>assets/template/front/images/star-disable.png" alt="star" class="w15 mr-1 float-left mr-2">
                        <?php endif;
                        endfor; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($team_show['value1'] == 1) : ?>
      <div class="team-wrapper pb-5 pt-5    <?php echo getBg($counter);
                                            $counter++ ?>" id="team">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-left mb-5 pb-0">
              <?php if ($team_judul['value2'] == 1) : ?>
                <h2 class="text-grey-800 fw-700 display1-size display2-md-size lh-2">
                  <?= $team_judul['value1'] ?>
                </h2>
              <?php endif; ?>
              <?php if ($team_sub_judul['value2'] == 1) : ?>
                <p class="fw-300 font-xsss lh-28 text-grey-500">
                  <?= $team_sub_judul['value1'] ?>
                </p>
              <?php endif ?>
            </div>

            <div class="col-lg-12">
              <div class="team-slider owl-carousel owl-theme overflow-visible dot-none right-nav pb-4">
                <?php foreach ($team_items as $item) : ?>
                  <div class="owl-items text-center p-md-3">
                    <div class="d-flex flex-column justify-content-center text-center">
                      <div>
                        <img src="<?= base_url('files/image/team/') . $item['foto'] ?>" class="rounded-circle mx-auto d-block" style="max-width: 150px;" alt="<?= $item['nama'] ?>">
                      </div>
                      <div>
                        <h3 class="fw-600 font-xs mt-3 mb-2 mt-2"><?= $item['nama'] ?></h3>
                        <h3 class="fw-500 font-xss mt-3 mb-2 mt-2"><?= $item['jabatan'] ?></h3>
                        <p><?= $item['keterangan'] ?></p>
                      </div>
                      <!-- <div class="d-flex flex-row justify-content-center">
                        <a href="#" class="btn btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                          </svg>
                        </a>
                        <a href="#" class="btn btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                          </svg>
                        </a>
                        <a href="#" class="btn btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                          </svg>
                        </a>
                      </div> -->
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($kontak_show['value1'] == 1) : ?>
      <div class="section" id="contact">
        <div id="map" class="rounded-lg overflow-hidden" style="height: 500px;"></div>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;callback=mapinitialize" type="text/javascript"></script>
        <script type="text/javascript">
          function mapinitialize() {
            var latlng = new google.maps.LatLng(<?= $kontak_koordinat['value1'] ?>, <?= $kontak_koordinat['value2'] ?>);
            var myOptions = {
              zoom: 16,
              center: latlng,
              scrollwheel: false,
              scaleControl: false,
              disableDefaultUI: false,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              // Google Map Color Styles
              styles: [{
                "featureType": "all",
                "elementType": "all",
                "stylers": [{
                  "visibility": "on"
                }]
              }, {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{
                  "color": "#444444"
                }]
              }, {
                "featureType": "administrative.province",
                "elementType": "all",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "administrative.locality",
                "elementType": "all",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "administrative.neighborhood",
                "elementType": "all",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "administrative.land_parcel",
                "elementType": "all",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                  "color": "#f2f2f2"
                }]
              }, {
                "featureType": "landscape.man_made",
                "elementType": "all",
                "stylers": [{
                  "visibility": "simplified"
                }]
              }, {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                  "visibility": "off"
                }, {
                  "color": "#cee9de"
                }, {
                  "saturation": "2"
                }, {
                  "weight": "0.80"
                }]
              }, {
                "featureType": "poi.attraction",
                "elementType": "geometry.fill",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "poi.park",
                "elementType": "all",
                "stylers": [{
                  "visibility": "on"
                }]
              }, {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{
                  "saturation": -100
                }, {
                  "lightness": 45
                }]
              }, {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [{
                  "visibility": "simplified"
                }]
              }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                  "visibility": "on"
                }, {
                  "color": "#f5d6d6"
                }]
              }, {
                "featureType": "road.highway",
                "elementType": "labels.text",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "road.highway",
                "elementType": "labels.icon",
                "stylers": [{
                  "hue": "#ff0000"
                }, {
                  "visibility": "on"
                }]
              }, {
                "featureType": "road.highway.controlled_access",
                "elementType": "labels.text",
                "stylers": [{
                  "visibility": "simplified"
                }]
              }, {
                "featureType": "road.highway.controlled_access",
                "elementType": "labels.icon",
                "stylers": [{
                  "visibility": "on"
                }, {
                  "hue": "#0064ff"
                }, {
                  "gamma": "1.44"
                }, {
                  "lightness": "-3"
                }, {
                  "weight": "1.69"
                }]
              }, {
                "featureType": "road.arterial",
                "elementType": "all",
                "stylers": [{
                  "visibility": "on"
                }]
              }, {
                "featureType": "road.arterial",
                "elementType": "labels.text",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [{
                  "visibility": "on"
                }]
              }, {
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [{
                  "visibility": "simplified"
                }, {
                  "weight": "0.31"
                }, {
                  "gamma": "1.43"
                }, {
                  "lightness": "-5"
                }, {
                  "saturation": "-22"
                }]
              }, {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                  "visibility": "off"
                }]
              }, {
                "featureType": "transit.line",
                "elementType": "all",
                "stylers": [{
                  "visibility": "on"
                }, {
                  "hue": "#ff0000"
                }]
              }, {
                "featureType": "transit.station.airport",
                "elementType": "all",
                "stylers": [{
                  "visibility": "simplified"
                }, {
                  "hue": "#ff0045"
                }]
              }, {
                "featureType": "transit.station.bus",
                "elementType": "all",
                "stylers": [{
                  "visibility": "on"
                }, {
                  "hue": "#00d1ff"
                }]
              }, {
                "featureType": "transit.station.bus",
                "elementType": "labels.text",
                "stylers": [{
                  "visibility": "simplified"
                }]
              }, {
                "featureType": "transit.station.rail",
                "elementType": "all",
                "stylers": [{
                  "visibility": "simplified"
                }, {
                  "hue": "#00cbff"
                }]
              }, {
                "featureType": "transit.station.rail",
                "elementType": "labels.text",
                "stylers": [{
                  "visibility": "simplified"
                }]
              }, {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                  "color": "#46bcec"
                }, {
                  "visibility": "on"
                }]
              }, {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [{
                  "weight": "1.61"
                }, {
                  "color": "#cde2e5"
                }, {
                  "visibility": "on"
                }]
              }]
            };
            var map = new google.maps.Map(document.getElementById("map"), myOptions);

            var image = "<?= base_url() ?>assets/template/front/images/map-marker.png";
            var image = new google.maps.MarkerImage("<?= base_url() ?>assets/template/front/images/map-marker.png", null, null, null, new google.maps.Size(50, 50));
            var marker = new google.maps.Marker({
              map: map,
              icon: image,
              position: map.getCenter()
            });

            var contentString = '<b>Office</b><br>Streetname 13<br>50001 Sydney';
            var infowindow = new google.maps.InfoWindow({
              content: contentString
            });

            google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map, marker);
            });


          }
          mapinitialize();
        </script>
      </div>

      <div class="map-wrapper  <?php echo getBg($counter);
                                $counter++ ?>">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="contact-wrap bg-white shadow-lg rounded-lg position-relative">
                <?php if ($kontak_judul['value2'] == 1) : ?>
                  <h1 class="text-grey-900 fw-700 display3-size mb-5 lh-1"><?= $kontak_judul['value1'] ?></h1>
                <?php endif ?>
                <div id="alert">

                </div>
                <form action="#" id="fpesan">
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="form-group mb-3">
                        <input type="text" class="form-control style2-input bg-color-none " name="nama" placeholder="Nama">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="form-group mb-3">
                        <input type="email" class="form-control style2-input bg-color-none " name="email" placeholder="Email">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group mb-3 md-mb-2">
                        <textarea class="w-100 h125 style2-textarea p-3 form-control" name="pesan" placeholder="Pesan"></textarea>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="rounded-lg style1-input bg-current text-white text-center font-xss fw-500 border-2 border-0 p-0 w175">
                          Submit
                        </button>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($footer_show['value1'] == 1) : ?>
      <!-- footer -->
      <div class="footer-wrapper my-0 <?php echo getBg($counter);
                                      $counter++ ?>">
        <div class="container">
          <div class="d-lg-flex flex-row justify-content-between  align-items-end">
            <?php if ($home_logo['value2'] == 1) : ?>
              <div>
                <a href="">
                  <img style="max-width: 200px;" src="<?= base_url('files/image/home/') . $home_logo['value1'] ?>" alt="Site Logo">
                </a>
              </div>
            <?php endif ?>
            <div>
              <p class="w-100"><?= $footer_alamat['value1'] ?>
              </p>
            </div>
            <div>
              <ul class="list-inline">
                <?php foreach ($footer_sosmed as $sosmed) : ?>
                  <li class="list-inline-item mr-3"><a href="<?= $sosmed['nama'] ?>" title="<?= $sosmed['nama'] ?>"><i class="<?= $sosmed['icon'] ?> fa-2x"></i></a></li>
                <?php endforeach; ?>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="middle-footer mt-5 pt-4"></div>
            </div>
            <div class="col-sm-12 lower-footer pt-0"></div>
            <div class="col-sm-6 col-xs-12">
              <p class="copyright-text" id="coyright"></p>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

  </div>


  <div class="d-flex flex-row-reverse">
    <a href="https://api.whatsapp.com/send?phone=<?= $whatsapp ?>" class="btn btn-success" href="#" style="position:fixed; bottom:16px; right: 16px; z-index:999; padding: 8px; border-radius: 50px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
      </svg>
    </a>
  </div>

  <script src="<?= base_url() ?>assets/template/front/js/plugin.js"></script>
  <script src="<?= base_url() ?>assets/template/front/js/aos.min.js"></script>
  <script src="<?= base_url() ?>assets/template/front/js/scripts.js"></script>
  <script>
    AOS.init();
    $('a[href*="#"].nav').on('click', function(e) {
      e.preventDefault()
      const destination = $($(this).attr('href')).offset().top;
      $('html, body').animate({
        scrollTop: destination,
      }, (destination / 5), 'linear');
      document.title = `${this.innerText} | <?= $pengaturan['deskripsi']['value1'] ?>`;
    })
  </script>

  <!-- gallery -->
  <script src="<?= base_url() ?>assets/template/front/js/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
  </script>

  <!-- contact -->
  <script>
    $(document).ready(() => {
      function setLoading(loading) {
        const btn = $('button[type=submit]');
        const nama = $('[name=nama]');
        const email = $('[name=email]');
        const pesan = $('[name=pesan]');
        if (loading) {
          btn.attr('disabled', '');
          btn.html(`<div class="spinner-border" style="width: 1.3rem;height: 1.3rem;margin-right: 8px;" role="status">
                          <span class="sr-only">Loading...</span>
                        </div> Submit`);
          nama.attr('disabled', '');
          email.attr('disabled', '');
          pesan.attr('disabled', '');
        } else {
          btn.removeAttr('disabled');
          btn.html('Submit');
          nama.removeAttr('disabled');
          email.removeAttr('disabled');
          pesan.removeAttr('disabled');
        }
      }
      $("#fpesan").submit(function(ev) {

        ev.preventDefault();
        const form = new FormData(this);

        setLoading(true);
        $.ajax({
          method: 'post',
          url: `<?= base_url() ?>home/input_pesan`,
          data: form,
          cache: false,
          contentType: false,
          processData: false,
        }).done((data) => {
          $('[name=nama]').val('');
          $('[name=email]').val('');
          $('[name=pesan]').val('');
          $('#alert').html(`
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <div id="contact_alert_body">
                    <strong>Berhasil</strong>. Pesan berhasil disimpan.
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
          `);
        }).fail(($xhr) => {
          if ($xhr.responseJSON) {
            $('#alert').html(`
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <div id="contact_alert_body">
                      <strong>Gagal</strong>. Pesan gagal disimpan.
                      <ul>
                        ${String($xhr.responseJSON.message)}
                      </ul>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            `);
          }
        }).always(() => {
          setLoading(false);
        })
      });
    });
    $('#coyright').html(`<?= $pengaturan['copyright']['value1'] ?>`);
  </script>
</body>



</html>