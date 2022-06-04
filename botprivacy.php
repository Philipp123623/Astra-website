<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Astra | Discord bot</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta property="og:title" content="Astra &middot; Discord Bot" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="/assets/img/favicon.png" />
  <meta property="og:description"
        content="Astra manages your server - you can handle your discord server with Astra: Administration, level system, temp channels, welcome message, and much more." />
  <meta name="theme-color" content="#5846f9">

  <link href="assets/img/favicon_transparent.png" rel="icon">
  <link href="assets/img/favicon_transparent.png" rel="favicon_transparent">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

<?php
    include_once './templates/header2.php';
  ?>

  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Astra</h1>
          <h2>Astra manages your server - you can handle your discord server with Astra: Administration, level system, temp channels, welcome message, and much more.</h2>
          <div><a href="invite.php" class="btn-get-started scrollto">Invite</a>
          <a href="support.php" class="btn-get-started scrollto">Support server</a></div>

        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/favicon_transparent.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <main id="main">
      <section id="about" class="about">
         <div class="container">
         <div class="section-title" data-aos="fade-up">
            <h2>Storage of Discord data</h2>
         </div>
         <div class='impressum'>
         <p>Information according to Discord's Developer TOS</p>
         <p>
            <b>What data we store</b><br>
                We store Discord User IDs, Usernames, Guild IDs, Guildnames, Channel IDs and Role IDs. This data is made available to us by the Discord API and there is no automatic deletion<br>
                There is no storage of further personal data.<br><br>
                <b>Why we store the information and how we use it</b><br>
                If a member is blocked from our bot, we save the userid of the person<br>
                We save Role IDs for functions like reactionroles oder autoroles
                We save the respective channel IDs for welcome-, giveaway-, change prefixes and other functions<br><br>
                <b>Who gets this data?</b><br>
                The saved data is saved on our server and cannot be accessed from the outside. You can only access our server with access to our database which will not given to peoples from outsides.<br>
                Apart from the owner of the server and Astra at the same time, nobody has access to the database/server. The data is not viewed manually.<br><br>
                <b>Who to contact with questions and/or concerns</b><br>
                If you have any concerns or questions about our data storage, please do not hesitate to contact us in our <a href="https://discord.com/invite/VkwPsfN2XG"> support server</a>.<br><br>
                <b>How to delete your data</b><br>
                You can easily request your data deletion in our  <a href="https://discord.com/invite/VkwPsfN2XG">support server</a>, and we delete all your data.<br><br><br>
                <b>Note:</b> We reserve the right to expand or update this page without any notification.        </p>
      </section>
      <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
          <div class="credits">
            <h3>Astra</h3>
            <p>
              Copyright © 2021 Astra Development 
              Astra Development is not affiliated with Discord, Inc.
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </p>
          </div>
          </div>

        <div class="col-lg-2 col-md-6 offset-md-4 footer-links" style="/*! float: left */">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#features">Features</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Other Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="https://stats.uptimerobot.com/lE5N1SoKy5">Servicestatus</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="imprint">Imprint</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="privacy-policy">Privacy Policy</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="botprivacy">Bots Privacy</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="terms">Terms of use</a></li>
          </ul>
        </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            <p style="font-size: 30px">
              <b>Astra</b>
            <p style="font-size: 15px">
              Astra manages your server - you can handle your discord server with Astra
            </p>
            </p>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="https://discord.com/oauth2/authorize?client_id=811733599509544962&permissions=8&scope=bot" class="discord"><i class="bx bxl-discord"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</main>

</html>