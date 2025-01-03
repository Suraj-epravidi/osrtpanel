<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: /pages/sign-up.php");
  exit();
}
$message = isset($_GET['message']) ? $_GET['message'] : '';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
  <title>OSRT-</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <?php if ($message): ?>
    <script>
      alert("<?php echo $message; ?>");
    </script>
  <?php endif; ?>
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../index.php">
        <img src="../assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo" />
        <span class="ms-1 font-weight-bold text-white">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2" />
    <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/products.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/review.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Review</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/brands.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Brands</span>
          </a>
        </li>
        <li class="nav-item">
            <a
              class="nav-link text-white"
              href="../pages/store_brands.php"
            >
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
              <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Store Brands</span>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages/faq.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">FAQs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages/category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
              Dashboard
            </li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control" />
              </div>
            </div> -->
          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

          </ul>
          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <style>
      .boxStatus {
        /* important */
        margin-bottom: 100px;
      }

      .subscribersBox {
        cursor: pointer;
      }
    </style>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row rowStatus">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
          <?php
          // Database configuration
          $host = "localhost";  // Replace with your server name
          $username = "osrtraders_epravidi";   // Replace with your database username
          $password = "UQ!r.gTOz=oo";      // Replace with your database password
          $dbname = "osrtraders_epravidi_osrt";

          // Create connection
          $conn = new mysqli($host, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Query to count the number of products
          $sql_products = "SELECT COUNT(*) AS product_count FROM products";
          $result_products = $conn->query($sql_products);

          $product_count = 0;
          if ($result_products->num_rows > 0) {
            $row = $result_products->fetch_assoc();
            $product_count = $row['product_count'];
          }

          // Query to count the number of emails in newsletters
          $sql_newsletters = "SELECT COUNT(*) AS email_count FROM newsletter";
          $result_newsletters = $conn->query($sql_newsletters);

          $email_count = 0;
          if ($result_newsletters->num_rows > 0) {
            $row = $result_newsletters->fetch_assoc();
            $email_count = $row['email_count'];
          }

          $conn->close();
          ?>

          <div class="card">
            <div class="card-header p-3 pt-2">
              <div
                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Products</p>
                <h4 class="mb-0"><?php echo $product_count; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0" />
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"></span>
              </p>
            </div>
          </div>
          <script>
            function redirectPage() {
              window.location.href = "./pages/subscriber.php";
            }
          </script>
          <?php
          $host = "localhost";
          $username = "osrtraders_epravidi";
          $password = "UQ!r.gTOz=oo";
          $dbname = "osrtraders_epravidi_osrt";
          try {
            // Connect to the database
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $stmt = $pdo->query("SELECT COUNT(*) AS total_visitors FROM visitors");
            $totalVisitors = $stmt->fetch(PDO::FETCH_ASSOC)['total_visitors'];

            $stmt = $pdo->query("SELECT COUNT(*) AS total_reviews FROM reviews");
            $totalReviews = $stmt->fetch(PDO::FETCH_ASSOC)['total_reviews'];

            $stmt = $pdo->query("SELECT COUNT(*) AS total_brands FROM brands");
            $totalBrands = $stmt->fetch(PDO::FETCH_ASSOC)['total_brands'];

            $stmt = $pdo->query("SELECT COUNT(*) AS total_categories FROM categories");
            $totalCategories = $stmt->fetch(PDO::FETCH_ASSOC)['total_categories'];

            $stmt = $pdo->query("SELECT COUNT(*) AS today_visitors FROM visitors WHERE DATE(visited_at) = CURDATE()");
            $todayVisitors = $stmt->fetch(PDO::FETCH_ASSOC)['today_visitors'];
          } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
          }

          // Close the connection
          $pdo = null;
          ?>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div
                class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                <h4 class="mb-0"><?php echo $todayVisitors; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0" />
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"> </span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div
                class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>

              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Visitors</p>
                <h4 class="mb-0"><?php echo $totalVisitors; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0" />
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-danger text-sm font-weight-bolder"></span>

              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus subscribersBox">
          <div class="card" onclick="redirectPage()">
            <div class="card-header p-3 pt-2">
              <div
                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Subscribers</p>
                <h4 class="mb-0"><?php echo $email_count; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0" />
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"> Click here to download the list.</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div
                class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent"
              >
                <div
                  class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"
                >
                  <div class="chart">
                    <canvas
                      id="chart-bars"
                      class="chart-canvas"
                      height="170"
                    ></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Website Views</h6>
                <p class="text-sm">Last Campaign Performance</p>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm">campaign sent 2 days ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div
                class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent"
              >
                <div
                  class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1"
                >
                  <div class="chart">
                    <canvas
                      id="chart-line"
                      class="chart-canvas"
                      height="170"
                    ></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Daily Sales</h6>
                <p class="text-sm">
                  (<span class="font-weight-bolder">+15%</span>) increase in
                  today sales.
                </p>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm">updated 4 min ago</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2">
              <div
                class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent"
              >
                <div
                  class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1"
                >
                  <div class="chart">
                    <canvas
                      id="chart-line-tasks"
                      class="chart-canvas"
                      height="170"
                    ></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Completed Tasks</h6>
                <p class="text-sm">Last Campaign Performance</p>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm">just updated</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->
    </div>
    <div class="container-fluid py-4">
      <div class="row rowStatus">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div
                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Reviews</p>
                <h4 class="mb-0"><?php echo $totalReviews; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0" />
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder">
                </span>

              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div
                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Brands</p>
                <h4 class="mb-0"><?php echo $totalBrands; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0" />
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"> </span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div
                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Categories</p>
                <h4 class="mb-0"><?php echo $totalCategories; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0" />
            <div class="card-footer p-3">
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder"> </span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="py-4 change-UI">

        <h6 class="font-weight-bolder mb-0">Change Homepage Elements</h6>
        <br>
        <div class="row rowStatus change-UIBox">

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
            <div class="card change-UI">
              <div class="card-header p-3 pt-2">
                <div class="text-end pt-1 change-UI">
                  <p class="text-sm mb-0 text-capitalize change-UI">Change Homepage Video</p>
                  <h4 class="mb-0 change-UI"><button type="button" class="btn btn-primary change-UI" data-bs-toggle="modal" data-bs-target="#addReviewModal">Click here</button></h4>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
            <div class="card change-UI">
              <div class="card-header p-3 pt-2">
                <div class="text-end pt-1 change-UI">
                  <p class="text-sm mb-0 text-capitalize change-UI">Change Welcome Image</p>
                  <h4 class="mb-0"><button type="button" class="btn btn-primary change-UI" data-bs-toggle="modal" data-bs-target="#addWelcomeImageModal">Click here</button></h4>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 boxStatus">
            <div class="card change-UI">
              <div class="card-header p-3 pt-2">
                <div class="text-end pt-1 change-UI">
                  <p class="text-sm mb-0 text-capitalize change-UI">Change Welcome Image (Responsive)</p>
                  <h4 class="mb-0 change-UI"><button type="button" class="btn btn-primary change-UI" data-bs-toggle="modal" data-bs-target="#addWelcomeImageResponsiveModal">Click here</button></h4>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Lightbox Modal -->
    <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addProductModalLabel">Add a New Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="./pages/upload_homepage_video.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="product_image" class="form-label">Choose file</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="product_image" name="product_image" accept="video/mp4"
                    aria-describedby="inputGroupFileAddon" aria-label="Upload" required>
                  <label class="input-group-text" for="product_image">Browse</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="addWelcomeImageModal" tabindex="-1" aria-labelledby="addWelcomeImageLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addWelcomeImageLabel">Add a New JPG Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="./pages/upload_welcome_image.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="product_image" class="form-label">Choose file</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*"
                    aria-describedby="inputGroupFileAddon" aria-label="Upload" required>
                  <label class="input-group-text" for="product_image">Browse</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="addWelcomeImageResponsiveModal" tabindex="-1" aria-labelledby="addWelcomeImageResponsiveLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addWelcomeImageResponsiveLabel">Add a New JPG Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="./pages/upload_welcome_image_responsive.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="product_image" class="form-label">Choose file</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*"
                    aria-describedby="inputGroupFileAddon" aria-label="Upload" required>
                  <label class="input-group-text" for="product_image">Browse</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6,
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
              color: "#fff",
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: [
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6,
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5],
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: [
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6,
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              padding: 10,
              color: "#f8f9fa",
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5],
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
        damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>