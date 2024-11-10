
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

    <main
      class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
    >
      <!-- Navbar -->
   <script>
    function redirectDownload(){
        window.location.href = "./emailTable.php";
    }
   </script>
      <!-- End Navbar -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReviewModal" onclick="redirectDownload()">
Download
</button>
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
$sql = "SELECT * from newsletter";
$result = $conn->query($sql);
?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Subscribers</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Sn no</th>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Email</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $row['id'] . "</td>";
                        echo "<td class='text-center'>" . htmlspecialchars($row['newsletter_email']) . "</td>";
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
