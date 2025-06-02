<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Discover Riyadh</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">      
  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
          <h1 class="title-single">Tourist Recommendations in Riyadh</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- events -->
<section class="section-t8 bg-light" style="margin-top: 70px;">
  <div class="container">
    <div class="row">
      <?php
      include 'config.php';
      $sql = "SELECT * FROM eventseng ";
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
          echo '          <button class="btn-a" data-bs-toggle="modal" data-bs-target="#descModal' . $i . '">View Details</button>';
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
        echo "<p>No tourism data available.</p>";
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

</body>
</html>
