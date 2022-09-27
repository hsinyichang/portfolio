<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>個人作品集</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <li><a href="./back.php" target="_blank" class="nav-link scrollto"><i class="bx bxs-user-check"></i> <span>Login</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Gina Chang</h1>
      <p>I'm <span class="typed" data-typed-items="web programmer"></span></p>
      <div class="social-links">
        <a href="https://www.facebook.com/f1233772002/" target=_blank class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/gina_0615/" target=_blank class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://github.com/hsinyichang" target=_blank class="linkedin"><i class="bx bxl-github"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="./assets/img/<?=$Img->find(['sh'=>1])['img']?>" class="img-fluid" alt="" width="80%" height="80%">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3 style="text-align: center;"><?=$Intro->find(1)['title']?></h3>
            <br>
            <p>
                <?=$Intro->find(1)['content']?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-info-lg"></i> <strong>Birthday:</strong> <span>15  JUNE 1992</span></li>
                  <li><i class="bi bi-info-lg"></i> <strong>Website:</strong> <span><a href="https://hsinyichang.github.io/" target="_blank" rel="noopener noreferrer">https://hsinyichang.github.io/</a></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-info-lg"></i> <strong>Email:</strong> <span>f1233772002@gmail.com</span></li>
                  <li><i class="bi bi-info-lg"></i> <strong>City:</strong> <span>New Taipei City, TW</span></li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>        
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">職業訓練</h3>
            <div class="resume-item pb-0">
              <h4>勞動部泰山職業訓練場</h4>
              <h5>2022.04 - 2022.09</h5>
              <p><em>PHP資料庫網頁設計班</em></p>
              <ul>
                <li>PHP資料庫程式設計</li>
                <li>HTML、CSS排版編輯網頁動態技術</li>
                <li>JS、JQ網頁動態技術</li>
                <li>Bootstrap 套件應用</li>
                <li>視覺影像設計、數位媒體應用</li>
                <li>網頁設計實務、網頁設計乙級檢定輔導</li>
              </ul>
            </div>

            <h3 class="resume-title">教育程度</h3>
            <div class="resume-item">
              <h4>私立大同大學</h4>
              <h5>2010 - 2014</h5>
              <p><em>資訊經營學系</em></p>
              <ul>
                <li>學習Java程式</li>
                <li>PHP資料庫管理</li>
                <li>資料分析</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>私立天主教恆毅高中</h4>
              <h5>2007 - 2010</h5>
              <p><em>數理班</em></p>
              <p>高中擔任糾察隊大隊長</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">工作經驗</h3>
            <div class="resume-item">
              <h4>全國電子-企業服務課</h4>
              <h5>2022.09 - </h5>
              <p><em>高級程式設計師</em></p>
              <ul>
                <li>負責資料庫系統規劃、排程</li>
                <li>完成主管交辦事項</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>快樂吉米語文短期補習班</h4>
              <h5>2013 - 2015</h5>
              <p><em>輔導、行政老師 </em></p>
              <ul>
                <li>負責櫃台行政作業、安排課程</li>
                <li>輔導學生安親、作業指導</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>宏亞食品-禮坊</h4>
              <h5>2012 - 2013</h5>
              <p><em>銷售業務員</em></p>
              <ul>
                <li>負責婚姻禮俗解說及銷售門市商品</li>
                <li>提供顧客之接待與需求服務（如：電話諮詢、調貨、修改、包裝及退換貨處理）</li>
                <li>中秋檔期，跑業務</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop & AI <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>作品集展示</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-PHP">PHP</li>
              <li data-filter=".filter-HTML">Html</li>
              <li data-filter=".filter-PS">PS</li>
              <li data-filter=".filter-AI">AI</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php
        $rows=$Port->all(['sh'=>1]);
        foreach($rows as $row){
        ?>
        <div class="col-lg-3 col-md-6 portfolio-item filter-<?=$row['type']?>">
            <div class="portfolio-wrap" style="width: 250px; height: 180px">
              <img src="assets/img/portfolio/<?=$row['img']?>" class="img-fluid">
              <div class="portfolio-info">
                <h4><?=$row['type']?></h4>
                <p><?=$row['title']?></p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/<?=$row['img']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?=$row['title']?>"><i class="bx bx-plus"></i></a>
                  <!-- <a href="./vote" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                  <a href="<?=$row['href']?>" target="_blank" rel="noopener noreferrer"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php  
        }
        ?>
          
          
        </div>
        
      </div>
    </section><!-- End Portfolio Section -->
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Daily AI</h2>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/1.png" class="testimonial-img" alt="">
            <h3>Dolphin</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/2.png" class="testimonial-img" alt="">
            <h3>Penguin</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/3.png" class="testimonial-img" alt="">
            <h3>Rhino</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/4.png" class="testimonial-img" alt="">
            <h3>Zebra</h3>
 
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/5.png" class="testimonial-img" alt="">
            <h3>Squirrel</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/6.png" class="testimonial-img" alt="">
            <h3>Parrot</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/7.png" class="testimonial-img" alt="">
            <h3>Butterfly</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/8.png" class="testimonial-img" alt="">
            <h3>Sea turtle</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/9.png" class="testimonial-img" alt="">
            <h3>Bat</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/10.png" class="testimonial-img" alt="">
            <h3>Rooster</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/11.png" class="testimonial-img" alt="">
            <h3>Kangaroo</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/12.png" class="testimonial-img" alt="">
            <h3>Elephant</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/13.png" class="testimonial-img" alt="">
            <h3>Goat</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/14.png" class="testimonial-img" alt="">
            <h3>Whale</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/15.png" class="testimonial-img" alt="">
            <h3>Hippocampus</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              30 daily AI
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->
        
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>f1233772002@gmail.com</p>
              </div>
              <br>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.703506537071!2d121.41732155092362!3d25.044134143959646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bec9ad74b1%3A0xa639904a89f26435!2z5Yue5YuV6YOo5Yue5YuV5Yqb55m85bGV572y5YyX5Z-65a6c6Iqx6YeR6aas5YiG572y5rOw5bGx6IG35qWt6KiT57e05aC0!5e0!3m2!1szh-TW!2stw!4v1659404719365!5m2!1szh-TW!2stw" width="100%" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="./forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="sub" id="sub" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          
        </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="social-links">
        
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-github"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span><?=$Footer->find(['sh'=>1])['footer'];?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>