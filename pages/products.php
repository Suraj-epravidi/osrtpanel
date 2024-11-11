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
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>OSRT-Products</title>
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"
    />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>
    <!-- Material Icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"
      rel="stylesheet"
    />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="../assets/css/material-dashboard.css?v=3.0.0"
      rel="stylesheet"
    />
  </head>

  <body class="g-sidenav-show bg-gray-200">
  <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
      id="sidenav-main"
    >
      <div class="sidenav-header">
        <i
          class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
          aria-hidden="true"
          id="iconSidenav"
        ></i>
        <a
          class="navbar-brand m-0"
          href="../index.php"
        >
          <img
            src="../assets/img/logo-ct.png"
            class="navbar-brand-img h-100"
            alt="main_logo"
          />
          <span class="ms-1 font-weight-bold text-white">Dashboard</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2" />
      <div
        class="collapse navbar-collapse w-auto max-height-vh-100"
        id="sidenav-collapse-main"
      >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              class="nav-link text-white"
              href="../index.php"
            >
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/tables.php">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white active bg-gradient-primary "
              href="../pages/products.php"
            >
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Products</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white "
              href="../pages/review.php"
            >
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Review</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white "
              href="../pages/brands.php"
            >
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Brands</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" 
            href="../pages/faq.php">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">FAQs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" 
            href="../pages/category.php">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Categories</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <main
      class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
    >
      <!-- Navbar -->
      <nav
        class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
        id="navbarBlur"
        navbar-scroll="true"
      >
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol
              class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"
            >
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
              </li>
              <li
                class="breadcrumb-item text-sm text-dark active"
                aria-current="page"
              >
                Dashboard
              </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
          </nav>
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
            id="navbar"
          >
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
       <!-- PHP-->
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReviewModal">
  Add Product
</button>
  <!-- Modal for Adding a Product -->
  <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">Add a New Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="add_product.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="product_code" class="form-label">Product Code</label>
            <input type="text" class="form-control" id="product_code" name="product_code" required>
          </div>
          <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control" id="color" name="color" required>
          </div>
          <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
          </div>
          <div class="mb-3">
            <label for="material" class="form-label">Material</label>
            <input type="text" class="form-control" id="material" name="material" required>
          </div>
          <div class="mb-3">
            <label for="dimensions" class="form-label">Dimensions</label>
            <input type="text" class="form-control" id="dimensions" name="dimensions" required>
          </div>

          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" id="category" name="category" required>
              <option value="">Select Category</option>
              <?php
               function connectToDatabase() {
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
              $conn = connectToDatabase(); // Ensure this function is defined to connect to your DB
              $sql = "SELECT category_name FROM categories"; // Replace 'categories' with your actual table name
              $result = $conn->query($sql);
              
              if ($result && $result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo '<option value="' . htmlspecialchars($row["category_name"]) . '">' . htmlspecialchars($row["category_name"]) . '</option>';
                  }
              } else {
                  echo '<option value="">No categories found</option>';
              }
              $conn->close();
              ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" required>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
          </div>
          <div class="mb-3">
            <label for="product_image" class="form-label">Upload Product Image</label>
            <div class="input-group">
              <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*" aria-describedby="inputGroupFileAddon" aria-label="Upload" required>
              <label class="input-group-text" for="product_image">Browse</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Product</button>
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
       <?php
// Database connection function


// Function to fetch products from the database
function getProducts($conn) {
    $sql = "SELECT product_id, product_name, description, product_code, color, brand, material, dimensions, category,stock, price, image FROM products";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Main logic to display products in a table
$conn = connectToDatabase();
$products = getProducts($conn);
$conn->close();
?>

<!-- HTML for displaying the products -->

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Products</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sn no</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Code</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Brand</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Material</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dimensions</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stock</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($products)): ?>
                  <?php foreach ($products as $index => $product): ?>
                    <tr>
                      <td class="text-center font-weight-bold mb-0" ><?php echo htmlspecialchars($product['product_id']); ?></td>
                      <td class="text-xs font-weight-bold mb-0" id="product_name"><?php echo htmlspecialchars($product['product_name']); ?></td>
                      <td class="text-xs font-weight-bold mb-0" id="description"><?php echo htmlspecialchars($product['description']); ?></td>
                      <td class="text-center text-xs font-weight-bold mb-0" id="product_code"><?php echo htmlspecialchars($product['product_code']); ?></td>
                      <td class="text-center text-xs font-weight-bold mb-0" id="color"><?php echo htmlspecialchars($product['color']); ?></td>
                      <td class="text-center text-xs font-weight-bold mb-0" id="brand"><?php echo htmlspecialchars($product['brand']); ?></td>
                      <td class="text-center text-xs font-weight-bold mb-0" id="material"><?php echo htmlspecialchars($product['material']); ?></td>
                      <td class="text-center text-xs font-weight-bold mb-0" id="dimensions"><?php echo htmlspecialchars($product['dimensions']); ?></td>
                      <td class="text-center text-xs font-weight-bold mb-0" id="category"><?php echo htmlspecialchars($product['category']); ?></td>
                      <td class="text-center text-xs font-weight-bold mb-0" id="stock"><?php echo htmlspecialchars($product['stock']); ?></td>
                      <td class="text-center text-xs font-weight-bold mb-0" id="price">Rs. <?php echo htmlspecialchars($product['price']); ?></td>
                      <td class="text-center">
                        <?php if (!empty($product['image'])): ?>
                          <img src="../pages/product_image/<?php echo htmlspecialchars($product['image']); ?>" id="osrtImageProduct" alt="Product Image" style="width: 50px; height: 50px;">
                        <?php else: ?>
                          <span>No image</span>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="11" class="text-center text-xs font-weight-bold mb-0">No products found.</td>
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
<!-- Lightbox Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editProductForm" action="update_product.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="product_id" id="edit_product_id">
          <div class="mb-3">
            <label for="edit_product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="edit_product_name" name="product_name" required>
          </div>
          <div class="mb-3">
            <label for="edit_description" class="form-label">Description</label>
            <textarea class="form-control" id="edit_description" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="edit_product_code" class="form-label">Product Code</label>
            <input type="text" class="form-control" id="edit_product_code" name="product_code" required>
          </div>
          <div class="mb-3">
            <label for="edit_color" class="form-label">Color</label>
            <input type="text" class="form-control" id="edit_color" name="color">
          </div>
          <div class="mb-3">
            <label for="edit_brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="edit_brand" name="brand">
          </div>
          <div class="mb-3">
            <label for="edit_material" class="form-label">Material</label>
            <input type="text" class="form-control" id="edit_material" name="material">
          </div>
          <div class="mb-3">
            <label for="edit_dimensions" class="form-label">Dimensions</label>
            <input type="text" class="form-control" id="edit_dimensions" name="dimensions">
          </div>
          <div class="mb-3">
            <label for="edit_category" class="form-label">Category</label>
            <select class="form-control" id="edit_category" name="category" required>
              <option value="">Select Category</option>
              <?php
              // Fetch categories from the database
              $conn = connectToDatabase();
              $sql = "SELECT category_name FROM categories"; // Update with actual table name if needed
              $result = $conn->query($sql);

              if ($result && $result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo '<option value="' . htmlspecialchars($row["category_name"]) . '">' . htmlspecialchars($row["category_name"]) . '</option>';
                  }
              } else {
                  echo '<option value="">No categories found</option>';
              }
              $conn->close();
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="edit_category" class="form-label">Stock</label>
            <input type="number" class="form-control" id="edit_stock" name="stock">
          </div>
          <div class="mb-3">
            <label for="edit_price" class="form-label">Price</label>
            <input type="number" class="form-control" id="edit_price" name="price" required>
          </div>

          <!-- Display image and trigger input on click -->
          <div class="mb-3">
            <label for="edit_product_image" class="form-label">Product Image</label>
            <div class="input-group">
              <!-- Image tag to display the current image -->
              <img id="productImagePreview" src="default-image.jpg" alt="Product Image" style="width: 150px; height: 150px; object-fit: cover; cursor: pointer; border: 1px solid #ccc;">
              <!-- Hidden file input -->
              <input type="file" class="form-control" id="edit_product_image" name="new_image" accept="image/*" style="display: none;">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-danger" id="deleteProductBtn">Delete Product</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // Trigger file input when the image is clicked
  document.getElementById('productImagePreview').addEventListener('click', function() {
    document.getElementById('edit_product_image').click();
  });

</script>

<script>
  document.getElementById("deleteProductBtn").addEventListener("click", () => {
    const productId = document.getElementById("edit_product_id").value;

    if (confirm("Are you sure you want to delete this product?")) {
        // Send a request to the delete script
        fetch("./delete_product.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ product_id: productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Product deleted successfully.");
                // Optionally, refresh the page or remove the product row from the table
                location.reload(); // Refresh the page
            } else {
                alert("Error deleting product: " + data.message);
            }
        })
        .catch(error => {
            alert("An error occurred: " + error);
        });
    }
});

</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const rows = document.querySelectorAll("tbody tr");

  rows.forEach(row => {
    row.addEventListener("click", () => {
      const cells = row.querySelectorAll("td");

      // Fill in the form with data from the row
      document.getElementById("edit_product_id").value = cells[0].textContent.trim();
      document.getElementById("edit_product_name").value = cells[1].textContent.trim();
      document.getElementById("edit_description").value = cells[2].textContent.trim();
      document.getElementById("edit_product_code").value = cells[3].textContent.trim();
      document.getElementById("edit_color").value = cells[4].textContent.trim();
      document.getElementById("edit_brand").value = cells[5].textContent.trim();
      document.getElementById("edit_material").value = cells[6].textContent.trim();
      document.getElementById("edit_dimensions").value = cells[7].textContent.trim();
      document.getElementById("edit_category").value = cells[8].textContent.trim();
      document.getElementById("edit_price").value = parseInt(cells[9].textContent.replace("Rs. ", "").trim()) || 0;


      // Get the image source from the 11th cell (10th index)
      const imageCell = document.getElementById('osrtImageProduct').src;  // Assuming the image is in the 11th cell
      console.log(cells);
      if (imageCell) {
        document.getElementById("productImagePreview").src = imageCell;
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
