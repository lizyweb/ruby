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

    <title>Therapy</title>
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
</head>
<body style="background-color: rgb(233,233,233);">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Therapy</a></li>
        </ol>

        <div class="ms-auto" style="margin-top: 20px;">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="submit" name="logout" value="Logout"  class="btn btn-brand get-quote position-absolute end-0 top-0 mt-2 x-5">
          </form>
        </div>

      </div>
    </section>


    <section class="section-bg py-5 cta">
        <div class="container">

          <h3 class="wow fadeInUp mb-3 text-white text-center" data-wow-delay="0.1s">Therapy</h3>

          <div class="row gy-4 mt-3">
            <div class="col-lg-4">
              <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/1.BAD FILLING OF THE TOOTH ROOT/7.1.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">BAD FILLING OF THE TOOTH ROOT </a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
              <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/2.CARIES - STAGES OF DEVELOPMENT/7.2.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">CARIES - STAGES OF DEVELOPMENT </a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/3.CARIES REMOVAL, ROOT CANAL CLEANING/7.3.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">CARIES REMOVAL, ROOT CANAL CLEANING </a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                    <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/4.COSMETIC TOOTH BONDING/7.4.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">COSMETIC TOOTH BONDING  </a>
                </div>
            </div><!-- End Service Item -->
            
            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/5.CRACKED TOOTH/7.5.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">CRACKED TOOTH  </a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                    <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/6.DENTAL DEMINERLIZATION/7.6.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">DENTAL DEMINERLIZATION  </a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
              <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/7.DISLOCATION OF A TOOTH/7.7.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">DISLOCATION OF A TOOTH </a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                  <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/8.FISSUE CARIES - FISSURE SEALING/7.8.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">FISSUE CARIES - FISSURE SEALING </a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                  <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/9.HIDDEN CARIES/7.9.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">HIDDEN CARIES </a>
                </div>
            </div>

            <div class="col-lg-4">
              <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/10.PERIODONTITIS/7.10.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">PERIODONTITIS </a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
              <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/11.PERIOSTITIS - CYST/7.11.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">PERIOSTITIS – CYST </a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/12.ROOT CARIES, ABFRACTION/7.12.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">ROOT CARIES, ABFRACTION </a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                    <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/13.ROOT CANAL FILLING, DENTAL FILLING/7.13.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">ROOT CANAL FILLING, DENTAL FILLING </a>
                </div>
            </div><!-- End Service Item -->
            
            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/14.TOOTH ABRASION AND BIOLOGICAL HEIGHT/7.14.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">TOOTH ABRASION AND BIOLOGICAL HEIGHT </a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4">
                <div class="position-relative d-flex align-items-center justify-content-between">
                  <a href="DENTAL-ILLUSTRATIONS-(pdf)/7.THERAPY/15.TOOTH EXTENSION USING A PIN, RESTORATION/7.15.1.pdf" target="_blank" class="btn btn-brand text-start" style="width: 100%;">TOOTH EXTENSION USING A PIN, RESTORATION </a>
                </div>
            </div><!-- End Service Item -->
            
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
</body>
</html>