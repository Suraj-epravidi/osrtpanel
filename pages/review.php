<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link
    rel="apple-touch-icon"
    sizes="76x76"
    href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>OSRT-Review</title>
  <!--     Fonts and icons     -->
  <link
    rel="stylesheet"
    type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script
    src="https://kit.fontawesome.com/42d5adcbca.js"
    crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"
    rel="stylesheet" />
  <!-- CSS Files -->
  <link
    id="pagestyle"
    href="../assets/css/material-dashboard.css?v=3.0.0"
    rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i
        class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true"
        id="iconSidenav"></i>
      <a
        class="navbar-brand m-0"
        href="../index.php">
        <img
          src="../assets/img/logo-ct.png"
          class="navbar-brand-img h-100"
          alt="main_logo" />
        <span class="ms-1 font-weight-bold text-white">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2" />
    <div
      class="collapse navbar-collapse w-auto max-height-vh-100"
      id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a
            class="nav-link text-white"
            href="../index.php">
            <div
              class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/tables.php">
            <div
              class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link text-white"
            href="../pages/products.php">
            <div
              class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link text-white active bg-gradient-primary"
            href="../pages/review.php">
            <div
              class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Review</span>

          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link text-white"
            href="../pages/brands.php">
            <div
              class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Brands</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white"
            href="../pages/faq.php">
            <div
              class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">FAQs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white"
            href="../pages/category.php">
            <div
              class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main
    class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav
      class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
      id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol
            class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
            </li>
            <li
              class="breadcrumb-item text-sm text-dark active"
              aria-current="page">
              Review
            </li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Review</h6>

          <a class="opacity-5 text-dark" href="javascript:;"><br>How to Use the Add Review Section<br>
            On the Review page, you can view, add, and delete reviews associated with products.<br><br>

            To Add a New Review:<br>
            Click on the Add Review button to open a pop-up form for adding a new review.<br>
            Fill in the form fields:<br>
            Product ID: Enter the ID of the product.<br>
            Comments: Type the review comments.<br>
            Upload Image: Choose an image to accompany the review.<br>
            Click Submit Review to save the review.<br><br>
            To Delete a Review:<br>
            In the reviews table, locate the review you want to delete.<br>
            Click on the Delete button in the last column of the review entry.<br>
            A prompt will appear asking for confirmation; click OK to confirm deletion.<br><br>
            If you encounter any issues or have questions, please don’t hesitate to contact Epravidi for assistance. Our support team is here to help ensure smooth management of your product data.
            <br>
            Contact Epravidi:<br>
            <br>
            Email: support@epravidi.com
            Phone: +977 9813722923
            Website: www.epravidi.com<br><br></a>
        </nav>
        <div
          class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
          id="navbar">
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
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- PHP-->
    <?php
    // Database connection function
    function connectToDatabase()
    {
      $servername = "192.250.235.20";
      $username = "epravidi_osrt_data";
      $password = "UQ!r.gTOz=oo";
      $dbname = "epravidi_osrt";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      return $conn;
    }

    // Function to fetch reviews from the database
    function getProductReviews($conn)
    {
      $sql = "SELECT comments, product_id, created_at, thumbnail FROM reviews";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
      } else {
        return [];
      }
    }

    // Main logic to display reviews in a table
    $conn = connectToDatabase();
    $reviews = getProductReviews($conn);
    $conn->close();
    ?>




    <!-- Modal for adding a review -->
    <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addReviewModalLabel">Add a Review</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="add_review.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="product_id" class="form-label">Product ID</label>
                <input type="number" class="form-control" id="product_id" name="product_id" required>
              </div>
              <div class="mb-3">
                <label for="comments" class="form-label">Comments</label>
                <textarea class="form-control" id="comments" name="comments" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label for="review_image" class="form-label">Upload Image</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="review_image" name="review_image" accept="image/*" aria-describedby="inputGroupFileAddon" aria-label="Upload">
                  <label class="input-group-text" for="review_image">Browse</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit Review</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <style>
      .custom-file-upload {
        border: 2px solid #007bff;
        display: inline-block;
        padding: 10px 12px;
        cursor: pointer;
        background-color: #3a3ac7;
        color: #007bff;
        border-radius: 5px;
        font-weight: bold;
      }

      .custom-file-upload:hover {
        background-color: #3a3ac7;
        color: #fff;
      }

      #review_image {
        display: none;
      }
    </style>

    <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addReviewModalLabel">Add a Review</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="add_review.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="product_id" class="form-label">Product ID</label>
                <input type="number" class="form-control" id="product_id" name="product_id" required>
              </div>
              <div class="mb-3">
                <label for="comments" class="form-label">Comments</label>
                <textarea class="form-control" id="comments" name="comments" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Upload Image</label>
                <label class="custom-file-upload">
                  <input type="file" id="review_image" name="review_image" accept="image/*" required>
                  Upload Image
                </label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit Review</button>
            </div>
          </form>
        </div>
      </div>
    </div>




    <div class="container-fluid py-4">
      <script>
        function redirectDownload() {
          window.location.href = "./review_download.php";
        }
      </script>
      <button type="button" class="btn btn-primary" style="margin-left: 0px;" data-bs-toggle="modal" data-bs-target="#addReviewModal">
        Add Review
      </button>
      <button type="button" class="btn btn-primary" style="margin-left: 6px;" onclick="redirectDownload()">
        Download
      </button>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Reviews</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Sn no</th>
                      <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Product ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Comments</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profile</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($reviews)): ?>
                      <?php foreach ($reviews as $index => $review): ?>
                        <tr>
                          <td class="text-xs text-center font-weight-bold mb-0"><?php echo $index + 1; ?></td>
                          <td class="text-xs text-center font-weight-bold mb-0"><?php echo htmlspecialchars($review['product_id']); ?></td>
                          <td class="text-center text-xs font-weight-bold mb-0" style="word-wrap: break-word; white-space: normal; text-align: left;">
                            <?php echo htmlspecialchars($review['comments']); ?>
                          </td>
                          <td class="text-center text-xs font-weight-bold mb-0">
                            <?php if (!empty($review['thumbnail'])): ?>
                              <img src="/pages/profile/<?php echo htmlspecialchars($review['thumbnail']); ?>" alt="Profile Image" style="width: 50px; height: 50px; border-radius: 50%;">
                            <?php else: ?>
                              <span>No Image</span>
                            <?php endif; ?>
                          </td>
                          <td class="text-center text-xs font-weight-bold mb-0"><?php echo htmlspecialchars($review['created_at']); ?></td>
                          <td class="text-center">
                            <form action="delete_review.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?');">
                              <input type="hidden" name="review_id" value="<?php echo $review['product_id']; ?>" />
                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="6" class="text-center text-xs font-weight-bold mb-0">No reviews found.</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>