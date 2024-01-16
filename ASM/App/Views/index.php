<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="public/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="public/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include 'App/Views/Components/sidebar.php'; ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include 'App/Views/Components/header.php'; ?>
      <!--  Header End -->
      <!-- <div class="container-fluid"> -->
      <!--  Row 1 -->
      <?php
      $action = "home";
      if (isset($_GET['act']))
        $action = $_GET['act'];
      switch ($action) {
        case "home":
          include 'home.php';
          break;
        case "staffs":
          include 'staff.php';
          break;
        case "suppliers":
          include 'suppliers.php';
          break;
        case "customers":
          include 'customers.php';
          break;
        case "products":
          include 'products.php';
          break;
        case "staff":
          include './listStaff.php';
          break;
        case "stockins":
          include 'stockins.php';
          break;
        case "stockouts":
          include 'stockouts.php';
          break;
        case "detailStockins":
          include 'detailStockins.php';
          break;
        case "detailStockouts":
          include 'detailStockouts.php';
          break;
      }
      ?>
      <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
      </div>
      <!-- </div> -->
    </div>
  </div>
  <script src="public/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/js/sidebarmenu.js"></script>
  <script src="public/assets/js/app.min.js"></script>
  <script src="public/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="public/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="public/assets/js/dashboard.js"></script>
</body>

</html>