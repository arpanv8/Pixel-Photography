<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: bisque
    }

    ul {
      justify-content: center !important;
    }

    .container-fluid#gallery_inside {
      margin-top: 150px;
    }

    .h1 {
      color: rgb(69, 25, 25) !important;
    }

    .container-fluid#home {
      background-color: bisque;
      width: 98%;
      height: 650px;
      border: solid black 2px;
      margin-top: 40px;
    }
    .container-fluid#contact{
      background-color: rgb(233, 199, 112);
    }
    h2{
      margin-top: 50px !important;
    }
    #skills{
      margin-top: 42px;
      background-color: rgba(215, 247, 250, 0.227);
      padding: 48px;
  }
  .skills{
      height: 200px;
      width: 49%;
      background-color: wheat;
      padding: 16px;
      margin-right: 12px;
      margin-top:48px;
  }
  </style>
</head>

<body>

  <!-- navbar ko section start -->
  <nav class="navbar navbar-expand-md bg-light sticky-top border-bottom nav justify-content-center">
    <div class="container-fluid">
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
          <a class="nav-link " href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Home -->
  <div class="container-fluid" id="home">
    <center>
      <p class="h1"> <?php
          include 'connect.php';
          $query = "SELECT title, description FROM home_page";
          
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_assoc($result)) {
                
              echo $row['title'];
            }
          } 
        ?></p>
    </center>
    <br>
    <center>
      <p class="h4">
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

      </p>
    </center>
  </div>

  <!-- Gallery section start -->
  <div class="container-fluid" id="gallery">
    <div class="container-fluid" id="gallery_inside">
      <center>
        <p class="h1">Our Photography Collection</p>
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
              echo '<h5 class="card-title">Image no ' . $imagecounter. '</h5>';
              echo '<p class="card-text">This is another stunning image captured by us. This was image no '.$imagecounter.' uploaded by admin and is shown here</p>';
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

  <!-- Skills section start -->
  <div class="container-fluid" id="skills">
    <center> <h1 class="display-4">Our Skills and Experience</h1> </center>
    <div class="row">
      <div class="skills">
        <center>
          <h3>Photography skills</h3>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, magnam!
        </center>
      </div>
      <div class="skills">
        <center>
          <h3>Videography skills</h3>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, magnam!
        </center>
      </div>
      <div class="skills">
        <center>
          <h3>Editing skills</h3>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, magnam!
        </center>
      </div>
      <div class="skills">
        <center>
          <h3>4 Years Experience</h3>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, magnam!
        </center>
      </div>
    </div>
  </div>

  <!-- Contact section start -->
  <div class="container-fluid" id="contact">
    <div class="container-fluid" id="contact_inside">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <center> <h2>Contact Us</h2> </center>
          <br>
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5
