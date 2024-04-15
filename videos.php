<?php
session_start();

// Check if the user is logged in, redirect to login page if not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit;
}

// Logout logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page after logout
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>

    <!-- Assets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Videos</title>
    <style>
        .breadcrumbs {
            padding: 15px 0;
            background: #ecf6fe;
            }

            .breadcrumbs ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0 0 10px 0;
            margin: 0;
            font-size: 14px;
            }

            .breadcrumbs ol li+li {
            padding-left: 10px;
            }

            .breadcrumbs ol li+li::before {
            display: inline-block;
            padding-right: 10px;
            color: #f8c255;
            content: "/";
            }
            .get-quote{
                margin-right:50px;
                margin-top:50px
            }

            @media (max-width: 767px) {
                .get-quote{
                margin-right:10px;
            }
            }
    </style>
    <style>
    .container-1 {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
      color: #333;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .dashboard-links {
      display: flex;
      flex-wrap: wrap;
    }

    .dashboard-links li {
      margin-right: 10px;
      margin-bottom: 10px;
    }

    .dashboard-links a {
      display: block;
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .dashboard-links a:hover {
      background-color: #2980b9;
    }

    @media (max-width: 768px) {
      .dashboard-links li {
        width: 100%;
        margin-right: 0;
      }
    }
  </style>
  <style>
        /* Add a style block to include custom styles */
        .btn-brand {
          /* white-space: nowrap; */
          background-color: transparent;
          color: var(--brand);
          border: 1px solid var(--brand);
        }
        .btn-brand:hover{
            background: linear-gradient(to right,rgb(31,191,183), rgb(25,190,182));
            border: 1px solid rgb(31,191,183);
            color: white;
        }
    </style>
    <style>
        .cta {
            background: linear-gradient(to right,rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("img/back/img-5.jpg") fixed center center;
            background-size: cover;
        }
    </style>
    <style>
        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            margin-bottom: 20px;
            }

            .custom-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            }

            .video-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            }

            .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: none;
            border: none;
            font-size: 3rem;
            color: var(--brand);
            cursor: pointer;
            }
    </style>
</head>
<body style="background-color: rgb(233,233,233);">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Videos</a></li>
        </ol>

        <div class="ms-auto" style="margin-top: 20px;">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="submit" name="logout" value="Logout"  class="btn btn-brand get-quote position-absolute end-0 top-0 mt-2 x-5">
          </form>
        </div>

      </div>
    </section>


    <section id="video-gallery">
            <div class="container">
                <div class="row">
                    <h2 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Video Gallery</h2>
                    <div class="col-12 col-lg-4">
                        <div class="video-container">
                            <video class="custom-video">
                                <source src="DENTAL-ILLUSTRATIONS-(pdf)/9.VIDEOS/Screenrecording_20230428_111259.mp4" type="video/mp4">
                            </video>
                            <button class="play-button"><i class='bx bx-play-circle'></i></button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="video-container">
                            <video class="custom-video">
                                <source src="DENTAL-ILLUSTRATIONS-(pdf)/9.VIDEOS/Screenrecording_20230428_111315.mp4" type="video/mp4">
                            </video>
                            <button class="play-button"><i class='bx bx-play-circle'></i></button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="video-container">
                            <video class="custom-video">
                                <source src="DENTAL-ILLUSTRATIONS-(pdf)/9.VIDEOS/Screenrecording_20230506_113843.mp4" type="video/mp4">
                            </video>
                            <button class="play-button"><i class='bx bx-play-circle'></i></button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="video-container">
                            <video class="custom-video">
                                <source src="DENTAL-ILLUSTRATIONS-(pdf)/9.VIDEOS/Screenrecording_20230506_173836.mp4" type="video/mp4">
                            </video>
                            <button class="play-button"><i class='bx bx-play-circle'></i></button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="video-container">
                            <video class="custom-video">
                                <source src="DENTAL-ILLUSTRATIONS-(pdf)/9.VIDEOS/Screenrecording_20230506_173914.mp4" type="video/mp4">
                            </video>
                            <button class="play-button"><i class='bx bx-play-circle'></i></button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="video-container">
                            <video class="custom-video">
                                <source src="DENTAL-ILLUSTRATIONS-(pdf)/9.VIDEOS/Screenrecording_20230506_174008.mp4" type="video/mp4">
                            </video>
                            <button class="play-button"><i class='bx bx-play-circle'></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <div class="container-1 mt-5 mb-5" style="background-color: rgb(233,233,233);">
      <h3 class="d-flex align-items-center justify-content-center text-brand mb-3">Dashboard Links</h3>
      <ul class="dashboard-links d-flex align-items-center justify-content-center">
        <li><a href="patient.php">Patient Details</a></li>
        <li><a href="search.php">Patient Database</a></li>
        <li><a href="dental_illustration.php">Dental Illustration</a></li>
      </ul>
    </div>
    

    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        // Gallery
        const customVideos = document.querySelectorAll('.custom-video');
        const playButtons = document.querySelectorAll('.play-button');

        playButtons.forEach((playButton, index) => {
             playButton.addEventListener('click', () => {
                customVideos[index].play();
                customVideos[index].controls = true;
                playButton.style.display = 'none';
            });
        });
    </script>
</body>
</html>