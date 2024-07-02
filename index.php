<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pixels Photography</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet"> 
  <style>
    body {
      background-color: #f9f4ef;
      font-family: 'Roboto', sans-serif;
    }

    ul {
      justify-content: center !important;
    }

    .container-fluid#gallery_inside {
      margin-top: 50px;
    }

    .container-fluid#home {
      background-color: #ffe4c4;
      width: 98%;
      height: auto;
      border: solid black 2px;
      padding: 40px;
      margin-top: 20px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .container-fluid#contact {
      background-color: #e9c770;
      padding: 50px 0;
    }

    h2 {
      margin-top: 20px;
    }

    #skills {
      margin-top: 42px;
      background-color: rgba(215, 247, 250, 0.227);
      padding: 48px;
    }

    .skills {
      height: 200px;
      width: 49%;
      background-color: wheat;
      padding: 16px;
      margin-right: 12px;
      margin-top: 48px;
      text-align: center;
    }

    .navbar-brand img {
      height: 40px;
    }

    .nav-link {
      font-weight: bold;
    }

    .about-me {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 20px;
      text-align: left;
      animation: fadeIn 2s ease-in-out;
    }

    .about-me img {
      border-radius: 10%;
      margin-right: 20px;
      width: 200px;
      height: 266px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .about-me img:hover {
      transform: scale(1.05);
    }

    .about-me-description {
      max-width: 600px;
      font-family: 'Lora', serif;
      font-size: 1.2rem;
      line-height: 1.6;
      transition: transform 0.3s ease, opacity 0.3s ease;
      animation: slideUp 1s ease-in-out;
    }

    .about-me-description h4 {
      font-size: 2.5rem;
      font-family: 'Unica One', sans-serif;
      margin-bottom: 10px;
    }

    .about-me-description p {
      font-size: 1.1rem;
      margin-bottom: 0;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    @keyframes slideUp {
      from {
        transform: translateY(20px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @media (max-width: 768px) {
      .about-me {
        flex-direction: column;
        text-align: center;
      }

      .about-me img {
        margin-right: 0;
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar Section Start -->
  <nav class="navbar navbar-expand-md bg-light sticky-top border-bottom nav justify-content-center">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="logo.jpg" alt="Logo">
      </a>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Home Section -->
  <div class="container-fluid" id="home">
    <h1>
      <?php
          include 'connect.php';
          $query = "SELECT title, description FROM home_page";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['title'];
            }
          }
        ?>
    </h1>
    <br>
    <h4>
      <?php
          include 'connect.php';
          $query = "SELECT title, description FROM home_page";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['description'];
            }
          }
        ?>
    </h4>
    <div class="about-me">
      <img src="1.jpg" alt="Your Portrait">
      <div class="about-me-description">
        <h4>About Me</h4>
        <p>Hi, I'm Arpan Bhattarai, a passionate photographer with a keen eye for capturing moments that tell a story. With years of experience in various photography projects, I bring a unique perspective to each shot I take.</p>
      </div>
    </div>
  </div>

  <!-- Gallery Section Start -->
  <div class="container-fluid" id="gallery">
    <div class="container-fluid" id="gallery_inside">
      <center>
        <h1>Our Photography Collection</h1>
      </center>
      <br>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
          include 'connect.php';
          $query = "SELECT name FROM image_details";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            $imagecounter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<div class="col">';
              echo '<div class="card">';
              echo '<img src="images/' . $row['name'] . '" class="card-img-top" alt="...">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">Image no ' . $imagecounter . '</h5>';
              echo '<p class="card-text">This is another stunning image captured by us. This was image no ' . $imagecounter . ' uploaded by admin and is shown here</p>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              $imagecounter++;
            }
          } else {
            echo '<p>No images found in the database.</p>';
          }
        ?>
      </div>
    </div>
  </div>

  <!-- Skills Section Start -->
  <div class="container-fluid" id="skills">
    <center>
      <h1 class="display-4">Our Skills and Experience</h1>
    </center>
    <div class="row justify-content-center">
      <div class="col-md-5 skills">
        <h3>Photography Skills</h3>
        <p>Capturing high-quality photographs with our professional team.</p>
      </div>
      <div class="col-md-5 skills">
        <h3>Videography Skills</h3>
        <p>Recording best quality videos along with aerial footage.</p>
      </div>
      <div class="col-md-5 skills">
        <h3>Editing Skills</h3>
        <p>Our team provides 24/7 services along with easy customization.</p>
      </div>
      <div class="col-md-5 skills">
        <h3>4 Years Experience</h3>
        <p>Diverse Photography Projects, 50+ video shootings for big projects, 60+ photo and poster editing projects.</p>
      </div>
    </div>
  </div>

  <!-- Contact Section Start -->
  <div class="container-fluid" id="contact">
    <div class="container-fluid" id="contact_inside">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <center>
            <h2>Contact Us</h2>
          </center>
          <br>
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5PPUoVtNxQ84SxRbhFkFzVKnUhz88g1+0BsF6F1Lv44" crossorigin="anonymous"></script>
</body>

</html>
