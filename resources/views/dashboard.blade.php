<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>The Lowkey GOAT</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/ti-icons/css/themify-icons.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/font-awesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/typicons/typicons.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/simple-line-icons/css/simple-line-icons.css"
    />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"
    />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/js/select.dataTables.min.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <script
      src="https://kit.fontawesome.com/0754cae2bd.js"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
      #map {
        height: 80%;
      }
    </style>
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav
        class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row"
      >
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start"
        >
          <div class="me-3">
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-bs-toggle="minimize"
            >
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="index.html">
              <img src="assets/images/korika.png" />
              <img src="assets/images/logo.png" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text text-black fw-bold fs-1 mt-5">
                Downscalling Data Iklim Indonesia
              </h1>
              <h3 class="welcome-sub-text mb-4">
                Data temperature pada Provinsi Jawa Tengah
              </h3>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-bs-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-chart-line menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="mdi mdi-information menu-icon"></i>
                <span class="menu-title">About</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-8 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-12 grid-margin stretch-card">
                    <div
                      class="card card-rounded shadow-sm border-danger"
                      style="border-left: 8px solid"
                    >
                      <div class="card-body">
                        <div
                          class="d-sm-flex justify-content-between align-items-start"
                        >
                          <div>
                            <h4 class="card-title card-title-dash fs-4">
                              Plot Map Hasil
                            </h4>
                            <h6 class="card-subtitle card-subtitle-dash">
                              Persebaran suhu udara di Jawa Tengah
                            </h6>
                          </div>
                        </div>
                        <div class="mt-4" id="map" style="height: 400px"></div>
                        <!-- Added height here -->
                      </div>
                    </div>
                  </div>
                  <div class="col-12 grid-margin stretch-card">
                    <div
                      class="card card-rounded shadow-sm border-warning"
                      style="border-left: 8px solid"
                    >
                      <div class="card-body">
                        <div
                          class="d-sm-flex justify-content-between align-items-start"
                        >
                          <div>
                            <h4 class="card-title card-title-dash fs-4">
                              Perbandingan
                            </h4>
                            <h6 class="card-subtitle card-subtitle-dash mb-4">
                              Data perbandingan suhu udara
                            </h6>
                          </div>
                        </div>
                        <div>
                          <img
                            class="img-fluid"
                            src="assets/images/example.png"
                            alt="Example Image"
                          />
                          <!-- Use img-fluid class -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded shadow-sm">
                      <div class="card-body pb-0">
                        <h4
                          class="card-title card-title-dash mb-5 fs-5 ps-2 py-1"
                          style="border-left: 5px solid #1f3bb3"
                        >
                          SUHU UDARA
                        </h4>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="status-summary-chart-wrapper">
                              <canvas id="lineChart"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded shadow-sm">
                      <div class="card-body pb-0">
                        <h4
                          class="card-title card-title-dash mb-5 fs-5 ps-2 py-1"
                          style="border-left: 5px solid #1f3bb3"
                        >
                          RELATIVE HUMIDITY
                        </h4>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="status-summary-chart-wrapper pb-4">
                              <canvas id="lineChartRH"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded shadow-sm">
                      <div class="card-body pb-0">
                        <h4
                          class="card-title card-title-dash mb-5 fs-5 ps-2 py-1"
                          style="border-left: 5px solid blue"
                        >
                          CURAH HUJAN
                        </h4>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="status-summary-chart-wrapper pb-4">
                              <canvas id="lineChartRainfall"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block fs-6"
                >Datathon 2024</span
              >
              <span
                class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center fs-6"
                >The Lowkey Goat &copy 2024</span
              >
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <script>
      // Initialize the map
      console.log("tes");
      var map = L.map("map").setView(
        [-7.246194969674581, 109.99566236877357],
        8
      );

      // Add a tile layer to the map
      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(map);
    </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
