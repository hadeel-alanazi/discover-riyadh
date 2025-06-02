<?php

// Including the configuration file
@include 'config.php';

// Starting the session
session_start();

// Sending message when form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $stmt = $conn->prepare("INSERT INTO message (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "<h2>!تم ارسال رسالتك. شكرًا لك</h2>";
        } else {
            echo "خطأ: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
    

?>


<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <title>اكتشف الرياض</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Bootstrap CSS File -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Library Files -->
 <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous" ></script>
  <!--  Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
   <link href="css/menu.css" rel="stylesheet">
       <?php @include 'header.php'; ?>

</head>

<body>  

  <!--/ Intro Single start /-->
  <section class="intro-single" style="margin-top: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">تواصل معنا</h1>
            <span class="color-text-a">يسعدنا الاجابة على استفساراتكم</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Start /-->
  <section class="contact" style="margin-top: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7 mx-auto">

              <form class="form-a contactForm" action="" method="post" role="form">
                <div id="errormessage"></div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="الاسم" data-rule="minlen:4" data-msg="الرجاء إدخال 4 أحرف على الأقل" required>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="البريد الالكتروني" data-rule="email" data-msg="يرجى إدخال البريد الإلكتروني الصحيح" required>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="من فضلك اكتب شيئا" placeholder="رسالتك" required></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">ارسال</button>
                  </div>
                </div>
              </form>

            </div>
                </div>
              </div>
            </div>
          </div>
  </section>
        <br>
        <br>
  <!--/ Contact End /-->

       
<!-- Footer -->
  <div class="footer" style="margin-top: 70px;">
    <br>
    <div class="content">
      <div>
        <h2>اكتشف الرياض</h2>
        <p>دليلك لاكتشاف كل ما تقدمه العاصمة السعودية من معالم وفعاليات وتسوق ومواصلات.</p>
      </div>
      <div class="social-media">
        <h4>سوشل ميديا</h4>
        <p><a href="#"><i class="fab fa-twitter"></i> Twitter</a></p>
        <p><a href="#"><i class="fab fa-instagram"></i> Instagram</a></p>
      </div>
      <div class="links">
        <h4>روابط سريعة</h4>
        <p><a href="index.php"><i class="fa-solid fa-angles-right"></i>الصفحة الرئيسية</a></p>
        <p><a href="contact.php"><i class="fa-solid fa-angles-right"></i> تواصل معنا</a></p>
      </div>
      <div class="details">
        <h4>وسائل التواصل</h4>
        <p><a href="#"><i class="fas fa-phone"></i> 966000000 </a></p>
        <p><a href="#"><i class="fa fa-envelope"></i> hadeelalanazi.2025@gmail.com</a></p>
      </div>
    </div>
    <footer>
  <hr />
  <p>© 2025 Discover Riyadh. All rights reserved.</p>
  <p>Developed by <strong>hadeel alanazi</strong>.</p>
  <br>
</footer>

  </div>
    	<!-- footer end -->
                
</body>
</html>
