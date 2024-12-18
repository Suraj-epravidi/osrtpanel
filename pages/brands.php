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
  <title>OSRT-Brands</title>
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
            class="nav-link text-white"
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
            class="nav-link text-white active bg-gradient-primary"
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
              Brands
            </li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Brands</h6>


          <a class="opacity-5 text-dark" href="javascript:;"><br>How to Use the Add Brand Section<br><br>

            Adding a New Brand:<br><br>

            Click the "Add Brand" button located above the table. This will open a modal (popup) window where you can add a new brand.<br><br>
            Fill out the following fields in the modal:<br><br>
            Brand Name: Enter the name of the brand.<br>
            Brand Website: Provide the website URL of the brand.<br>
            Upload Logo: Choose an image file for the brand's logo (optional).<br>
            Once all fields are filled, click the "Submit" button to add the brand to the table.<br><br>
            Deleting a Brand:<br>

            To delete a brand entry, click the "Delete" button in the last column of the respective brand row.
            A confirmation dialog will appear. Select "OK" if you're sure you want to delete the brand, or "Cancel" to abort the action.<br><br>

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
      $sql = "SELECT brand_name, brand_website, brand_logo FROM brands";
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
            <h5 class="modal-title" id="addReviewModalLabel">Add a Brand</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="add_brand.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="product_id" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="product_id" name="brandName" required>
              </div>
              <div class="mb-3">
                <label for="comments" class="form-label">Brand Website</label>
                <textarea class="form-control" id="comments" name="brandWebsite" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label for="review_image" class="form-label">Upload Logo</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="review_image" name="review_image" accept="image/*" aria-describedby="inputGroupFileAddon" aria-label="Upload">
                  <label class="input-group-text" for="review_image">Browse</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
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
            <h5 class="modal-title" id="addReviewModalLabel">Brand</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="add_brand.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="product_id" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="product_id" name="brandName" required>
              </div>
              <div class="mb-3">
                <label for="comments" class="form-label">Brand Website</label>
                <textarea class="form-control" id="comments" name="brandWebsite" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Upload Logo</label>
                <label class="custom-file-upload">
                  <input type="file" id="review_image" name="review_image" accept="image/*">
                  Upload Image
                </label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>




    <div class="container-fluid py-4">
      <script>
        function redirectDownload() {
          window.location.href = "./brand_download.php";
        }
      </script>
      <button type="button" class="btn btn-primary" style="margin-left: 0px;" data-bs-toggle="modal" data-bs-target="#addReviewModal">
        Add Brand
      </button>
      <button type="button" class="btn btn-primary" style="margin-left: 6px;" onclick="redirectDownload()">
        Download
      </button>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Brands</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Sn no</th>
                      <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Brand Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Brand Website</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($reviews)): ?>
                      <?php foreach ($reviews as $index => $review): ?>
                        <tr>
                          <td class="text-xs text-center font-weight-bold mb-0"><?php echo $index + 1; ?></td>
                          <td class="text-xs text-center font-weight-bold mb-0"><?php echo htmlspecialchars($review['brand_name']); ?></td>
                          <td class="text-center text-xs font-weight-bold mb-0" style="word-wrap: break-word; white-space: normal; text-align: left;">
                            <?php echo htmlspecialchars($review['brand_website']); ?>
                          </td>
                          <td class="text-center text-xs font-weight-bold mb-0">
                            <?php if (!empty($review['brand_logo'])): ?>
                              <img src="/pages/brands/<?php echo htmlspecialchars($review['brand_logo']); ?>" alt="Brand Logo" style="width: 50px; height: 50px; border-radius: 50%;">
                            <?php else: ?>
                              <span>No Image</span>
                            <?php endif; ?>
                          </td>
                          <td class="text-center">
                            <!-- Delete button -->
                            <form action="delete_brand.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                              <input type="hidden" name="brand_name" value="<?php echo htmlspecialchars($review['brand_name']); ?>">
                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="5" class="text-center text-xs font-weight-bold mb-0">No brands found.</td>
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