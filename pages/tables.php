
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
    <title>OSRT-Contact form</title>
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
              class="nav-link text-white "
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
            <a class="nav-link text-white active bg-gradient-primary" href="../pages/tables.php">
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
              class="nav-link text-white "
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
            <a class="opacity-5 text-dark" href="javascript:;">
            <br><br>This page shows a Contact Form table listing entries from users who have submitted inquiries. The table displays:<br><br>

Sn no: Serial number of each entry.<br>
Name: Name of the person who submitted the form.<br>
Email: Email address provided by the user.<br>
Website: Website (if given) by the user.<br>
Comment: Message or comment submitted.<br>
Created At: Date and time of submission.<br><br>
Each row represents a form submission, allowing you to review user inquiries easily.<br><br>

Contact Support<br>
If you encounter any issues or have questions, you can reach out to support:<br><br>

Email: support@epravidi.com<br>
Phone: +977 9813722923<br>
Website: www.epravidi.com<br><br></a>
          </nav>
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
            id="navbar"
          >
            <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control" />
              </div>
            </div> -->
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
       <!-- PHP-->
        <?php
// Database configuration
$host = "192.250.235.20";  // Replace with your server name
$username = "epravidi_osrt_data";   // Replace with your database username
$password = "UQ!r.gTOz=oo";      // Replace with your database password
$dbname = "epravidi_osrt";       // Replace with your database name


// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch the contact form data
$sql = "SELECT id, name, email, website, comment, created_at FROM contact_form";
$result = $conn->query($sql);
?>
<div class="container-fluid py-4">
<script>
  function redirectDownload(){
    window.location.href = "./contact_download.php";
  }
</script>
<button type="button" class="btn btn-primary"  onclick="redirectDownload()">
Download
</button>
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Contact Form</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Sn no</th>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Website</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Comment</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $row['id'] . "</td>";
                        echo "<td class='text-center'>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td class='text-center'>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td class='text-center'>" . htmlspecialchars($row['website']) . "</td>";
                        echo "<td class='text-center'>" . htmlspecialchars($row['comment']) . "</td>";
                        echo "<td class='text-center'>" . $row['created_at'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No records found</td></tr>";
                }
                $conn->close();
                ?>
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
