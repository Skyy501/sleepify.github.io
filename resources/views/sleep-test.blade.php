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
            <li><a href="#">Test</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>
  <main class="main">
    <div class="form-container" style="background-color: #093b5d; border-radius: 8px; box-shadow: 0px 4px 10px #093b5d; padding: 40px; max-width: 600px; margin: 50px auto;">
        <h1 style="text-align: center; margin-bottom: 30px;color: white;">Sleep Disorder Test</h1>
        <form action="{{ route('sleep-test.predict') }}" method="POST">
            @csrf

            <label for="gender" style="font-weight: bold;color: white;">Gender</label><br>
            <label for="male" style="color: white; font-weight: bold;">
                <input type="radio" name="gender" value="male" style="width: auto; margin-right: 5px;"> Male
            </label>
            <label for="female" style="color: white; font-weight: bold;">
                <input type="radio" name="gender" value="female" style="width: auto; margin-right: 5px;"> Female
            </label>
            <br><br>

            <label for="age" style="font-weight: bold;color: white;">Age (0-100)</label><br>
            <input type="number" name="age" min="0" max="100" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br>

            <label for="work_difficulty" style="font-weight: bold;color: white;">Work Difficulty (rate from 1-5)</label><br>
            <input type="number" name="work_difficulty" min="1" max="5" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br>

            <label for="work_safety_level" style="font-weight: bold;color: white;">Work Safety Level (rate from 1-5)</label><br>
            <input type="number" name="work_safety_level" min="1" max="5" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br>

            <label for="sleep_duration" style="font-weight: bold;color: white;">Sleep Duration (hours per day)</label><br>
            <input type="number" name="sleep_duration" min="0" max="24" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br>

            <label for="quality_of_sleep" style="font-weight: bold;color: white;">Quality of Sleep (rate from 1-5)</label><br>
            <input type="number" name="quality_of_sleep" min="1" max="5" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br>

            <label for="physical_activity_level" style="font-weight: bold;color: white;">Physical Activity Level (minutes)</label><br>
            <input type="number" name="physical_activity_level" min="0" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br>

            <label for="stress_level" style="font-weight: bold;color: white;">Stress Level (rate from 1-5)</label><br>
            <input type="number" name="stress_level" min="1" max="5" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br>

            <label for="bmi_category" style="font-weight: bold;color: white;">BMI Category</label><br>
            <select name="bmi_category" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;">
                <option value="underweight">Underweight</option>
                <option value="normal">Normal</option>
                <option value="overweight">Overweight</option>
                <option value="obese">Obese</option>
            </select><br>

            <label for="heart_rate" style="color: white;font-weight: bold;">Heart Rate (beats per minute)</label><br>
            <input type="number" name="heart_rate" min="30" max="200" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br>

            <label for="daily_steps" style="color: white;font-weight: bold;">Daily Steps</label><br>
            <input type="number" name="daily_steps" min="0" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; background-color: #444; color: white;"><br><br>

            <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; border: none; border-radius: 5px; color: white; font-size: 16px; cursor: pointer;">Submit</button>
        </form>
    </div>
  </main>
  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-1 footer-about">
            <span class="sitename">Sleepify</span>
          </a>
          <div class="footer-contact pt-1">
            <p class="mt-1"><strong>Phone:</strong> <span>+62 822 9909 3990</span></p>
            <p><strong>Email:</strong> <span>sleepifydevs@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Sleepify</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">SleepyPros</a>
      </div>
    </div>

  </footer>

</html>
