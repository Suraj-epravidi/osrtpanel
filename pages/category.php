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
  <title>OSRT-Categories</title>
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
          <a class="nav-link text-white active bg-gradient-primary"
            href="../pages/faq.php">
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
              Categories
            </li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Categories</h6>
          <a class="opacity-5 text-dark" href="javascript:;"><br>How to Use the Add Category Section<br><br>

            Click the "Add Category" button located at the top of the page. This will open a modal form where you can input details for the new category, including:<br><br>

            Category Name: Enter the name of the category.<br>
            Category Image: Choose an image for the category by clicking the "Browse" button and selecting the file from your device.<br>
            Once you have filled in the necessary fields, click the "Submit Category" button to add the category to your system.<br>
            Viewing Existing Categories:<br> <br>
            To view all the categories that have been added, simply scroll down to the table below the "Add Category" button. This table will list all categories with their names and associated images.<br>

            Deleting a Category:<br> <br>
            To delete a category, find the category in the table below. You will see a "Delete" button next to each category. Click the "Delete" button, and a confirmation dialog will appear asking if you’re sure you want to delete the category. If confirmed, the category will be removed from the list.<br><br>
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
      $servername = "localhost";
      $username = "osrtraders_epravidi";
      $password = "UQ!r.gTOz=oo";
      $dbname = "osrtraders_epravidi_osrt";

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
      $sql = "SELECT * FROM categories";
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
            <h5 class="modal-title" id="addReviewModalLabel">Add a Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="add_category.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="product_id" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="product_id" name="category_name" required>
              </div>
              <div class="mb-3">
                <label for="review_image" class="form-label">Category Image</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="review_image" name="review_image" accept="image/*" aria-describedby="inputGroupFileAddon" aria-label="Upload">
                  <label class="input-group-text" for="review_image">Browse</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit Category</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editProductModalLabel">Edit Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editProductForm" action="update_category.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="category_id" id="category_id">
              <div class="mb-3">
                <label for="edit_product_name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name" required>
              </div>

              <!-- Display image and trigger input on click -->
              <div class="mb-3">
                <label for="edit_product_image" class="form-label">Category Image</label>
                <div class="input-group">
                  <!-- Image tag to display the current image -->
                  <img id="productImagePreview" src="default-image.jpg" alt="Category Image" style="width: 150px; height: 150px; object-fit: cover; cursor: pointer; border: 1px solid #ccc;">
                  <!-- Hidden file input -->
                  <input type="file" class="form-control" id="edit_product_image" name="new_image" accept="image/*" style="display: none;">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Changes</button>

            </div>
          </form>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              const rows = document.querySelectorAll("tbody tr");

              rows.forEach(row => {
                row.addEventListener("click", () => {
                  const cells = row.querySelectorAll("td");

                  // Fill in the form with data from the row
                  document.getElementById("category_id").value = cells[0].textContent.trim();
                  document.getElementById("category_name").value = cells[1].textContent.trim();

                  // Get the image source from the 11th cell (10th index)
                  const imageCell = document.getElementById('categoryImage_' + cells[0].textContent.trim()); // Assuming the image is in the 11th cell
                  if (imageCell) {
                    document.getElementById("productImagePreview").src = imageCell.src;
                  } else {
                    document.getElementById("productImagePreview").src = ""; // Clear if no image
                    console.log("Image not found");
                  }



                  // Show the modal
                  const editProductModal = new bootstrap.Modal(document.getElementById("editProductModal"));
                  editProductModal.show();
                });
              });
            });
          </script>
          <script>
            // Handle image file input change
            const fileInput = document.getElementById('edit_product_image');
            const productImagePreview = document.getElementById('productImagePreview');

            fileInput.addEventListener('change', function(event) {
              const file = event.target.files[0];
              if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                  // Set the image preview to the selected file
                  productImagePreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
              }
            });


            // Trigger the hidden file input when image preview is clicked
            productImagePreview.addEventListener('click', function() {
              fileInput.click();
            });
          </script>

        </div>
      </div>
    </div>

    <script>
      // // Trigger file input when the image is clicked
      // document.getElementById('productImagePreview').addEventListener('click', function() {
      //   document.getElementById('edit_product_image').click();
      // });
    </script>


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






    <div class="container-fluid py-4">
      <script>
        function redirectDownload() {
          window.location.href = "./category_download.php";
        }
      </script>
      <button type="button" class="btn btn-primary" style="margin-left: 0px;" data-bs-toggle="modal" data-bs-target="#addReviewModal">
        Add Category
      </button>
      <button type="button" class="btn btn-primary" style="margin-left: 6px;" onclick="redirectDownload()">
        Download
      </button>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Categories</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Sn no</th>
                      <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Category Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Image</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($reviews)): ?>
                      <?php foreach ($reviews as $index => $review): ?>
                        <tr>
                          <td class="text-xs text-center font-weight-bold mb-0" id="category_id"><?php echo htmlspecialchars($review['ID']); ?></td>
                          <td class="text-xs text-center font-weight-bold mb-0" id="category_name">
                            <?php echo htmlspecialchars($review['category_name']); ?>
                          </td>
                          <td class="text-center text-xs font-weight-bold mb-0" id="categoryImage_" <?php echo $review['ID']; ?>>
                            <?php if (!empty($review['category_image'])): ?>
                              <img src="/pages/category/<?php echo htmlspecialchars($review['category_image']); ?>" alt="Profile Image" style="width: 50px; height: 50px; border-radius: 50%;">
                            <?php else: ?>
                              <span>No Image</span>
                            <?php endif; ?>
                          </td>
                          <td class="text-center">
                            <form action="delete_category.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?');">
                              <input type="hidden" name="review_id" value="<?php echo $review['ID']; ?>" />
                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="6" class="text-center text-xs font-weight-bold mb-0">No Categories found.</td>
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