<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <!doctype html>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Welcome to Sleepify</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-end">
        <a class="logo d-flex align-items-center me-auto">
            <img src="assets/img/zzz.png" alt="Logo" class="logo-image">
            <h1 class="sitename">Sleepify</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Our Tests</a></li>
            <li><a href="#doctors">Our Team</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#footer">Contact</a></li>
            <li>
                <a href="{{ route('profile') }}" class="btn btn-primary rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-person"></i>
                </a>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
          <div class="container">
            <h2>Welcome to Sleepify</h2>
            <p>At Sleepify, we are dedicated to helping individuals understand and overcome sleeping disorders, one step at a time. We know that quality sleep is essential for a healthy life, yet many people struggle with disorders like insomnia, sleep apnea, restless leg syndrome, and others without realizing the root causes. Our mission is to guide you on a personalized journey toward better sleep.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End About Web Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="container">
            <h2>Our Vision</h2>
            <p>We aim to create a world where everyone enjoys the rejuvenating power of restful sleep. By increasing awareness and providing easy-to-follow solutions, we hope to improve the quality of life for those affected by sleep disorders.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Our Vision Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="container">
            <h2>Our Mission</h2>
            <p>Our mission is simple: to improve lives by addressing sleep-related challenges. We understand that sleep disorders can severely impact your physical health, mental well-being, and overall quality of life. Whether you're experiencing insomnia, sleep apnea, or just restless nights, we are here to help. Our platform is designed to empower individuals by guiding them through every step of the journey toward better sleep.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Our Mission Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Our Tests Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-heartbeat icon"></i></div>
              <h4><a href="" class="stretched-link">Self-Assessment Tools</a></h4>
              <p>Begin your journey by identifying potential sleep problems through our scientifically designed quizzes and symptom checkers.</p>
            </div>
          </div><!-- End Our Tests Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="" class="stretched-link">Expert Guidance</a></h4>
              <p>Receive professional insights into various sleeping disorders from certified sleep specialists and researchers.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-thermometer icon"></i></div>
              <h4><a href="" class="stretched-link">Personalized Solutions</a></h4>
              <p>We provide tailored recommendations, including lifestyle changes, relaxation techniques, and professional treatments, all suited to your specific condition.</p>
            </div>
          </div><!-- End Our Tests Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-dna icon"></i></div>
              <h4><a href="" class="stretched-link">Support & Resources</a></h4>
              <p>Access a wealth of educational content, tips, and tools that promote better sleep hygiene and overall well-being.</p>
            </div>
          </div><!-- End Our Tests Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p>We're dedicated to helping individuals understand and overcome sleeping disorders, one step at a time. Quality sleep is essential for a healthy life, yet many people struggle with disorders like insomnia, sleep apnea, restless leg syndrome, and others without realizing the root causes. Our mission is to guide you on a personalized journey toward better sleep.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/sleeping.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>We Provide</h3>
            <p class="fst-italic">
                Our platform offers a comprehensive, step-by-step approach to recognizing and managing sleep issues such as,
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Self-Assessment Tools</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Expert Guidance</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Personalized Solutions</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Support & Resources</span></li>
            </ul>
            <p>
                We aim to create a world where everyone enjoys the rejuvenating power of restful sleep. By increasing awareness and providing easy-to-follow solutions, we hope to improve the quality of life for those affected by sleep disorders.


            </p>
          </div>
        </div>

      </div>
      <br><br>
    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/sleepschedule.png" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Benefits for Using Sleepify</h3>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-hand-holding-medical flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Enhanced Quality of Life</a></h4>
                <p>By improving your sleep, you enhance your physical, emotional, and mental well-being, resulting in increased productivity, better mood, and overall health.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-suitcase-medical flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Comprehensive Self-Assessment Tools</a></h4>
                <p>Our easy-to-use tools help you identify sleep disorders and understand potential triggers, enabling you to take the first step towards better sleep.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
              <i class="fa-solid fa-staff-snake flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Expert Guidance</a></h4>
                <p>Sleepify connects you with sleep experts, providing professional insights and recommendations for managing sleep problems, backed by the latest research and medical advice.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
              <i class="fa-solid fa-lungs flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Holistic Approach</a></h4>
                <p>Beyond just diagnosing, we offer lifestyle tips, stress management techniques, and behavioral changes that can improve sleep quality, providing a well-rounded approach to better rest.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Test</h2>
        <p>We provide a test to help you recognize your sleep condition</p>
      </div><!-- End Section Title -->

      <div class="container" style="display: flex; justify-content: center; align-items: center;">

        <div class="row gy-4" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" style="margin: 0 auto;">
            <div class="service-item position-relative" style="text-align: center; border: 1px solid #ccc; padding: 1.5rem; border-radius: 8px;">
              <div class="icon" style="font-size: 2rem; margin-bottom: 1rem;">
                <i class="fas fa-pills"></i>
              </div>
              <a href="sleeptest" class="stretched-link" style="text-decoration: none; color: inherit;">
                <h3>Sleep Disorder Test</h3>
              </a>
              <p>This test is designed to help you identify potential signs of common sleep disorders, such as insomnia, sleep apnea, restless leg syndrome, or narcolepsy. It evaluates symptoms like difficulty falling asleep, frequent waking during the night, excessive daytime sleepiness, and snoring. The results will indicate whether you may be at risk for a sleep disorder and recommend seeking professional advice for further evaluation.</p>
            </div>
          </div><!-- End Service Item -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>See what most people are curious about!</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-container">

              <div class="faq-item">
                <h3>What is a sleeping disorder?</h3>
                <div class="faq-content">
                    <p>A sleeping disorder refers to a condition that disrupts your normal sleep patterns. Common types include insomnia (difficulty falling or staying asleep), sleep apnea (interrupted breathing during sleep), and narcolepsy (excessive daytime sleepiness). These disorders can affect your physical and mental well-being if not addressed.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Why is sleep important?</h3>
                <div class="faq-content">
                  <p>Sleep plays a vital role in maintaining overall health. It helps the body repair itself, supports brain function, and boosts the immune system. Lack of quality sleep can lead to various health issues, including memory problems, weakened immunity, and increased risk of chronic conditions.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Who is this test for?</h3>
                <div class="faq-content">
                    <p>This test is designed for individuals who suspect they may have sleep-related issues or want to assess their sleep health. It is suitable for adults and teenagers but should not replace professional medical evaluation.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How accurate is this test?</h3>
                <div class="faq-content">
                    <p>The test provides a preliminary assessment based on commonly recognized patterns of sleeping disorders. While it is designed to be informative, it is not a substitute for diagnosis by a healthcare professional.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How does the test work?</h3>
                <div class="faq-content">
                    <p>The test involves answering a series of questions related to your sleep habits, patterns, and overall health. Based on your responses, the system analyzes your risk of having a sleeping disorder and provides tailored recommendations.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How long does the test take?</h3>
                <div class="faq-content">
                    <p>On average, the test takes about 5 to 10 minutes to complete. The exact time may vary depending on how quickly you answer the questions.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
              <div class="faq-item">
                <h3>Can I retake the test?</h3>
                <div class="faq-content">
                  <p>Absolutely. You can retake the test as often as you like, especially if your sleep patterns or symptoms change over time.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->
<!-- Doctors Section -->
<section id="doctors" class="doctors section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Team</h2>
      <p>Our dedicated team is committed to helping you understand and improve your sleep health. Meet the passionate experts who make Sleepify possible.</p>
    </div><!-- End Section Title -->
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/doctors/doctors-1.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/christopher_w_j/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/christopher-jovison-a3b27b259/?originalSubdomain=id"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Christopher Jovison</h4>
              <span>2602170934</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/doctors/doctors-2.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/luke-soegianto/?originalSubdomain=id"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Luke Mangala Soegianto</h4>
              <span>2602090196</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/doctors/doctors-3.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/levina1111/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/levina-jane-189860251/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Levina Jane Saputra</h4>
              <span>2602084836</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/doctors/doctors-4.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/nicholasabrahamsalim/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/nicholas-abraham-558ba732b/?originalSubdomain=id"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Nicholas Abraham Salim</h4>
              <span>2602175840</span>
            </div>
          </div>
        </div><!-- End Team Member -->
      </div>
    </div>
    </section><!-- /Doctors Section -->
@yield('footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
