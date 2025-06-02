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
  <?php @include 'header.php'; ?>
</head>

<body>
<section class="intro-single">
  <div class="container">
    <br>
    <div class="row" style="direction:ltr;">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">مرحبًا بك في دليل الرياض السياحي</h1>
          <p>اكتشف جمال الرياض من خلال فعالياتها المتنوعة ومعالمها المدهشة</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="highlight-section">
  <div class="overlay"></div>
  <div class="content">
    <p class="highlight-text">
      من مؤتمر ليب الذي يكشف آفاق مستقبل التكنولوجيا، إلى موسم الرياض 
      <br>
      الذي يبهر العالم بعروضه الترفيهية الفريدة، وصولاً إلى إكسبو 2030، الحدث العالمي المنتظر.
    </p>
    <div class="expo-info">
      <div class="expo-text">
        <p>
          تستعد الرياض لاستضافة إكسبو 2030 في الفترة من 1 أكتوبر 2030 حتى 31 مارس 2031، تحت شعار “حقبة التغيير: معاً نستشرف المستقبل”. سيقام المعرض على مساحة تزيد عن 6 ملايين متر مربع بالقرب من مطار الملك خالد الدولي، ليكون منصة لعرض أحدث الابتكارات والتقنيات العالمية، مما يعزز مكانة الرياض كوجهة رائدة للفعاليات الدولية.
        </p>
      </div>
    </div>
  </div>
</section>
   


  <!-- Carousel Placeholder -->
<section class="section-carousel">
  <div class="container">
    <h2 class="title-a" style="margin-bottom: 20px;">معالم مختارة في الرياض</h2>
    
    <div class="Carousel-container">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
          
          <div class="carousel-item active" id="image-1">
  <div class="position-relative">
    <img src="img/riyadh1.jpg" class="d-block w-100" alt="برج المملكة">
    <div class="carousel-caption d-none d-md-block">
      <h5>برج المملكة</h5>
      <p>برج المملكة هو أحد أشهر معالم الرياض، يتميز بتصميمه المعماري الحديث وقمته الشاهقة، ويضم مراكز تجارية وفنادق فاخرة.</p>
    </div>
  </div>
</div>

<div class="carousel-item" id="image-2">
  <div class="position-relative">
    <img src="img/riyadh2.jpg" class="d-block w-100" alt="برج الفيصلية">
    <div class="carousel-caption d-none d-md-block">
      <h5>برج الفيصلية</h5>
      <p>برج الفيصلية يُعرف بتصميمه الهرمي الزجاجي الفريد، وهو من أبرز معالم الرياض ويحتوي على مكاتب تجارية ومراكز تسوق راقية.</p>
    </div>
  </div>
</div>


        </div>
      </div>
    </div>

    <!-- Custom Arrows -->
    <div class="carousel-controls" style="text-align: center; margin-top: 20px; position: relative;">
      <a class="previous round" onclick="prevImage()">&#8249;</a>
      <a class="next round" onclick="nextImage()">&#8250;</a>
    </div>

  </div>
</section>


<section class="section-t8" style="margin-top:100px;">
  <div class="container">
    <h2 class="title-a mb-4">توصيات سياحية في الرياض</h2>
    <div class="row">

      <div class="col-md-4">
        <a href="events.php" class="card-box-a">
          <div class="card-img">
            <img src="img/img1.jpg" class="img-a" style="border-radius: 25px;" alt="">
            <div class="card-overlay">
              <h3 class="card-title-a">الفعاليات والمهرجانات</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="shopping.php" class="card-box-a">
          <div class="card-img">
            <img src="img/واجهة-الرياض.png" class="img-a" style="border-radius: 25px;" alt="">
            <div class="card-overlay">
              <h3 class="card-title-a">أماكن التسوق</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
      <a href="transportation.php"class="card-box-a">
      <div class="card-img">
            <img src="img/home-banner.jpg" class="img-a" style="border-radius: 25px;" alt="">
            <div class="card-overlay">
              <h3 class="card-title-a">المواصلات </h3>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<section class="section-t8" style="margin-top: 100px;">
  <div class="container text-center">
    <h2 class="title-b mb-5">رحلة عبر التراث والثقافة في الرياض</h2>
    
    <div class="big-card">
      <img src="img/ksa-national-museum.png" class="big-card-img" alt="المتحف الوطني السعودي">
      <div class="big-card-content">
        <h2 class="big-card-title">المتحف الوطني السعودي</h2>
            <p class="big-card-description">يأخذك في رحلة عبر تاريخ المملكة الغني، من العصور القديمة حتى العصر الحديث</p>
      </div>
    </div>

    <div class="big-card"  style="margin-top: 50px;">
      <img src="img/kinf-fahd-library.jpg" class="big-card-img" alt="  ">
      <div class="big-card-content">
        <h2 class="big-card-title">مكتبة الملك فهد الوطنية</h2>
        <p class="big-card-description">تعتبر من أهم المكتبات في الرياض، تضم مجموعات واسعة من الكتب والمراجع الثقافية والعلمية، وتستضيف العديد من الفعاليات الثقافية والفكرية.</p>

      </div>
    </div>


  </div>
</section>

<section class="section-t8" style="margin-top: 70px;">
<div class="container ">
    <h2 class="title-a mb-4"> طرق الحجز</h2>

    <div class="row">
    <div class="col-md-4 mb-4">
    <div class="card h-100 shadow transport-card text-end">
          <div class="card-body">
            <a href="https://www.haosaudi.com"> <i><img src="img/sitelogo.svg"></i> </a>
            <h5 class="card-title"> منصة Hao </h5>
            <p class="card-text"> بوابة لاكتشاف تجارب مميزة في مجالات مثل الهوايات والفنون والمغامرات والعديد من الأنشطة الممتعة </p>
            
</div>
</div>
</div>
<div class="col-md-4 mb-4">
<div class="card h-100 shadow transport-card text-end">
          <div class="card-body">
             <a href="https://webook.com/ar" class="card-box-a"> <i><img src="img/wbk-logo-webookcom-bottompadding.svg"></i>  </a>
            <h5 class="card-title">Webook </h5>
            <p class="card-text">  من خلال Webook  حجز تذاكر لأهم الفعاليات مثل البطولات الرياضية والمهرجانات والعروض الحية!</p>
           
</div>
</div>
</div>
</div>
</div>
</section>

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
        <p><a href="#"><i class="fa fa-envelope"></i>  hadeelalanazi.2025@gmail.com</a></p>
      </div>
    </div>
    <footer>
  <hr/>
  <p>© 2025 Discover Riyadh. All rights reserved.</p>
  <p>Developed by <strong>hadeel alanazi</strong>.</p>
  <br>
</footer>

  </div>

  <script>
         
 let currentImageIndex = 1;

function prevImage() {
  if (currentImageIndex > 1) {
    currentImageIndex--;
  } else {
    currentImageIndex = 2;
  }
  updateImage();
}

function nextImage() {
  if (currentImageIndex < 2) {
    currentImageIndex++;
  } else {
    currentImageIndex = 1;
  }
  updateImage();
}

function updateImage() {
  for (let i = 1; i <= 2; i++) {
    let item = document.getElementById('image-' + i).closest('.carousel-item');
    if (i === currentImageIndex) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  }
}

updateImage();


  </script>
</body>
</html>
