<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <title>اكتشف الرياض</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">      
  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous" ></script>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/menu.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <?php @include 'header.php'; ?>
</head>

<body>
<section class="intro-single">
  <div class="container">
    <br>
    <div class="row" style="direction:ltr;">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">أماكن التسوق</h1>
          <p>دليلك إلى تجربة تسوق فريدة في الرياض</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="text-section">
  <div class="content">
    <p class="highlight-text">
      توفر مدينة الرياض تجربة تسوق متنوعة تجمع بين الماركات العالمية الراقية والمنتجات المحلية 
      <br>
      مما يجعلها وجهة مثالية لعشاق التسوق، حيث تلتقي المولات الحديثة بالأسواق التقليدية في تناغم فريد يعكس روح المدينة.
    </p>
    <div class="expo-info">
      <div class="expo-text">
        <p>
          تعد الأسواق الشعبية في الرياض نافذة على التراث والثقافة السعودية، حيث يمكن للزوار اكتشاف منتجات تقليدية
          <br>
          مثل السجاد اليدوي، والبخور، والعطور الشرقية، والملابس التراثية، والحرف اليدوية الأصيلة.
          <br>
          ومن أبرز هذه الأسواق:
        </p>
      </div>
    </div>
  </div>
</section>

  
<!-- Shopping Section 1 -->
<section class="section-t8 bg-light" style="margin-top: 70px;">
  <div class="container">
    <div class="row">
      <?php
      include 'config.php';
      $sql = "SELECT * FROM shopping_places WHERE type = 'شعبي'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $i = 1; 
        while($row = $result->fetch_assoc()) {
          echo '<div class="carousel-item-b col-md-4">';
          echo '  <div class="card-box-a">';
          echo '    <div><img src="img/' . $row["image"] . '" alt="" class="img-a"></div>';
          echo '    <div class="card-overlay">';
          echo '      <div class="card-overlay-a-content">';
          echo '        <div class="card-header-a">';
          echo '          <h2 class="card-title-a">' . $row["title"] . '</h2>';
          echo '        </div>';
          echo '        <div class="card-body-a text-center">';
          echo '          <button class="btn-a" data-bs-toggle="modal" data-bs-target="#descModal' . $i . '">عرض التفاصيل</button>';
          echo '        </div>';
          echo '      </div>';
          echo '    </div>';
          echo '  </div>';
          echo '</div>';

          echo '<div class="modal fade" id="descModal' . $i . '" tabindex="-1" aria-labelledby="descLabel' . $i . '" aria-hidden="true">';
          echo '  <div class="modal-dialog">';
          echo '    <div class="modal-content">';
          echo '      <div class="modal-header">';
          echo '        <h5 class="modal-title" id="descLabel' . $i . '">' . $row["title"] . '</h5>';
          echo '        <button type="button" class="btn text-danger fs-4" data-bs-dismiss="modal" aria-label="Close" style="border: none; background: transparent;">
               <i class="fa fa-times"></i></button>';
          echo '      </div>';
          echo '      <div class="modal-body">';
          echo '        <p>' . $row["description"] . '</p>';
          echo '      </div>';
          echo '    </div>';
          echo '  </div>';
          echo '</div>';

          $i++;
        }
      } else {
        echo "<p>لا توجد بيانات تسوق متاحة.</p>";
      }
      ?>
    </div>
  </div>
</section>


  <section class="text-section">
  <div class="content">
    <p class="highlight-text">
      من عبق الأسواق الشعبية القديمة التي تنبض بالأصالة والتراث، إلى أجواء المراكز التجارية الحديثة التي تقدم تجربة تسوق فاخرة وعصرية، 
      <br>
      تجمع الرياض بين الماضي العريق والحاضر المتطور في تناغم فريد.
    </p>
    <div class="expo-info">
      <div class="expo-text">
        <p>
          تتميز الأسواق الحديثة في الرياض بتنوعها ورفاهيتها، حيث تضم أشهر العلامات التجارية العالمية، 
          <br>
          إلى جانب مطاعم راقية، مقاهي مميزة، ومرافق ترفيهية متكاملة، مما يجعلها وجهة مثالية للاستمتاع بتجربة تسوق وترفيه متكاملة.
          <br>
          ومن أبرز هذه المراكز التجارية:
        </p>
      </div>
    </div>
  </div>
</section>


<!-- Shopping Section 2 -->
<section class="section-t8 bg-light" style="margin-top: 70px;">
  <div class="container">
    <div class="row">
      <?php
      include 'config.php';
      $sql = "SELECT * FROM shopping_places WHERE type = 'عصري'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $i = 1; 
        while($row = $result->fetch_assoc()) {
          echo '<div class="carousel-item-b col-md-4">';
          echo '  <div class="card-box-a">';
          echo '    <div><img src="img/' . $row["image"] . '" alt="" class="img-a"></div>';
          echo '    <div class="card-overlay">';
          echo '      <div class="card-overlay-a-content">';
          echo '        <div class="card-header-a">';
          echo '          <h2 class="card-title-a">' . $row["title"] . '</h2>';
          echo '        </div>';
          echo '        <div class="card-body-a text-center">';
          echo '          <button class="btn-a" data-bs-toggle="modal" data-bs-target="#descModal' . $i . '">عرض التفاصيل</button>';
          echo '        </div>';
          echo '      </div>';
          echo '    </div>';
          echo '  </div>';
          echo '</div>';

          echo '<div class="modal fade" id="descModal' . $i . '" tabindex="-1" aria-labelledby="descLabel' . $i . '" aria-hidden="true">';
          echo '  <div class="modal-dialog">';
          echo '    <div class="modal-content">';
          echo '      <div class="modal-header">';
          echo '        <h5 class="modal-title" id="descLabel' . $i . '">' . $row["title"] . '</h5>';
          echo '        <button type="button" class="btn text-danger fs-4" data-bs-dismiss="modal" aria-label="Close" style="border: none; background: transparent;">
               <i class="fa fa-times"></i></button>';
          echo '      </div>';
          echo '      <div class="modal-body">';
          echo '        <p>' . $row["description"] . '</p>';
          echo '      </div>';
          echo '    </div>';
          echo '  </div>';
          echo '</div>';

          $i++;
        }
      } else {
        echo "<p>لا توجد بيانات تسوق متاحة.</p>";
      }
      ?>
    </div>
  </div>
</section>

  <!-- Footer -->
  <div class="footer" style="margin-top: 70px;">
    <br>
    <div class="content">
      <div>
        <h2>اكتشف الرياض</h2>
        <p>دليلك لاكتشاف كل ما تقدمه العاصمة من معالم وفعاليات وتسوق ومواصلات.</p>
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
        <p><a href="#"><i class="fa fa-envelope"></i>  hadeelalanazi.2025@gmail.com</a></p>
      </div>
    </div>
    <footer>
  <hr />
  <p>© 2025 Discover Riyadh. All rights reserved.</p>
  <p>Developed by <strong>hadeel alanazi</strong>.</p>
  <br>
</footer>

  </div>

  
</body>
</html>
