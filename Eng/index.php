<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Discover Riyadh</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">      
  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/menu.css" rel="stylesheet">
  <?php @include 'header.php'; ?>
  
</head>

<body>
<section class="intro-single">
  <div class="container">
    <br>
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Welcome to Riyadh Tourism Guide</h1>
          <p>Discover the beauty of Riyadh through its diverse events and stunning landmarks.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="highlight-section">
  <div class="overlay"></div>
  <div class="content">
    <p class="highlight-text">
      From the LEAP Conference showcasing the future of technology, to Riyadh Season
      <br>
      mesmerizing the world with unique entertainment, all the way to Expo 2030 — the anticipated global event.
    </p>
    <div class="expo-info">
      <div class="expo-text">
        <p>
          Riyadh is preparing to host Expo 2030 from October 1, 2030, to March 31, 2031, under the theme “The Era of Change: Together for a Foresighted Tomorrow.” The exhibition will cover over 6 million square meters near King Khalid International Airport, serving as a platform to showcase the latest innovations and global technologies, reinforcing Riyadh's status as a leading destination for international events.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section-carousel">
  <div class="container">
    <h2 class="title-a" style="margin-bottom: 20px;">Featured Landmarks in Riyadh</h2>
    
    <div class="Carousel-container">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">

          <div class="carousel-item active" id="image-1">
            <div class="position-relative">
              <img src="img/riyadh1.jpg" class="d-block w-100" alt="Kingdom Tower">
              <div class="carousel-caption d-none d-md-block">
                <h5>Kingdom Tower</h5>
                <p>One of Riyadh's most iconic landmarks, known for its modern design and tall structure, featuring luxury hotels and shopping centers.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" id="image-2">
            <div class="position-relative">
              <img src="img/riyadh2.jpg" class="d-block w-100" alt="Al Faisaliah Tower">
              <div class="carousel-caption d-none d-md-block">
                <h5>Al Faisaliah Tower</h5>
                <p>A distinctive glass pyramid-shaped tower, housing high-end offices and malls, and a key highlight of the city skyline.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="carousel-controls" style="text-align: center; margin-top: 20px; position: relative;">
      <a class="previous round" onclick="prevImage()">&#8249;</a>
      <a class="next round" onclick="nextImage()">&#8250;</a>
    </div>

  </div>
</section>

<section class="section-t8" style="margin-top:100px;">
  <div class="container">
    <h2 class="title-a mb-4">Tourism Recommendations in Riyadh</h2>
    <div class="row">

      <div class="col-md-4">
        <a href="events.php" class="card-box-a">
          <div class="card-img">
            <img src="img/img1.jpg" class="img-a" style="border-radius: 25px;" alt="">
            <div class="card-overlay">
              <h3 class="card-title-a">Events & Festivals</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="shopping.php" class="card-box-a">
          <div class="card-img">
            <img src="img/واجهة-الرياض.png" class="img-a" style="border-radius: 25px;" alt="">
            <div class="card-overlay">
              <h3 class="card-title-a">Shopping Destinations</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="transportation.php" class="card-box-a">
          <div class="card-img">
            <img src="img/home-banner.jpg" class="img-a" style="border-radius: 25px;" alt="">
            <div class="card-overlay">
              <h3 class="card-title-a">Transportation</h3>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<section class="section-t8" style="margin-top: 100px;">
  <div class="container text-center">
    <h2 class="title-b mb-5">A Journey Through Riyadh’s Heritage & Culture</h2>
    
    <div class="big-card">
      <img src="img/ksa-national-museum.png" class="big-card-img" alt="National Museum of Saudi Arabia">
      <div class="big-card-content">
        <h2 class="big-card-title">National Museum of Saudi Arabia</h2>
        <p class="big-card-description">Takes you on a journey through the Kingdom's rich history, from ancient times to the modern era.</p>
      </div>
    </div>

    <div class="big-card" style="margin-top: 50px;">
      <img src="img/kinf-fahd-library.jpg" class="big-card-img" alt="King Fahd National Library">
      <div class="big-card-content">
        <h2 class="big-card-title">King Fahd National Library</h2>
        <p class="big-card-description">One of Riyadh’s most important libraries, featuring vast collections of cultural and scientific references, and hosting various intellectual and cultural events.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-t8" style="margin-top: 70px;">
  <div class="container">
    <h2 class="title-a mb-4">Booking Options</h2>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow transport-card text-end">
          <div class="card-body">
            <a href="https://www.haosaudi.com"><i><img src="img/sitelogo.svg"></i></a>
            <h5 class="card-title">Hao Platform</h5>
            <p class="card-text">A gateway to discover unique experiences in hobbies, arts, adventures, and many fun activities.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow transport-card text-end">
          <div class="card-body">
            <a href="https://webook.com/ar"><i><img src="img/wbk-logo-webookcom-bottompadding.svg"></i></a>
            <h5 class="card-title">Webook</h5>
            <p class="card-text">Book tickets to major events including sports tournaments, festivals, and live shows through Webook!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="footer" style="margin-top: 70px;">
  <br>
  <div class="content">
    <div>
      <h2>Discover Riyadh</h2>
      <p>Your guide to exploring everything the Saudi capital offers <br> landmarks, events, shopping, and transportation.</p>
    </div>
    <div class="social-media">
      <h4>Social Media</h4>
      <p><a href="#"><i class="fab fa-twitter"></i> Twitter</a></p>
      <p><a href="#"><i class="fab fa-instagram"></i> Instagram</a></p>
    </div>
    <div class="links">
      <h4>Quick Links</h4>
      <p><a href="index.php"><i class="fa-solid fa-angles-right"></i> Home</a></p>
      <p><a href="contact.php"><i class="fa-solid fa-angles-right"></i> Contact Us</a></p>
    </div>
    <div class="details">
      <h4>Contact Info</h4>
      <p><a href="#"><i class="fas fa-phone"></i> 966000000</a></p>
      <p><a href="#"><i class="fa fa-envelope"></i> hadeelalanazi.2025@gmail.com</a></p>
    </div>
  </div>
  <footer>
    <hr/>
    <p>© 2025 Discover Riyadh. All rights reserved.</p>
    <p>Developed by <strong>Hadeel Alanazi</strong>.</p>
    <br>
  </footer>
</div>

<script>
let currentImageIndex = 1;

function prevImage() {
  currentImageIndex = currentImageIndex > 1 ? currentImageIndex - 1 : 2;
  updateImage();
}

function nextImage() {
  currentImageIndex = currentImageIndex < 2 ? currentImageIndex + 1 : 1;
  updateImage();
}

function updateImage() {
  for (let i = 1; i <= 2; i++) {
    const item = document.getElementById('image-' + i).closest('.carousel-item');
    item.classList.toggle('active', i === currentImageIndex);
  }
}

updateImage();
</script>
</body>
</html>
