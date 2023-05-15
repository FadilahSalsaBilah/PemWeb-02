<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Kelola-Data-Motor</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/bad50b83fc.js" crossorigin="anonymous"></script>
  <style>
    #lg {
      margin-left: 93%;
    }
  </style>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="../backend/index.php">KANNA MOTO</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <center>
              <img src="assets/img/profil.png" alt="" width="100">
              <br>
              Fadilah Admin
            </center>
            <br>
            <form class="form-inline">
              <input class="form-control mr-sm-2 ml-2" type="search" placeholder="Search" aria-label="Search" />
            </form>
            <ul class="nav nav-pills nav-sidebar flex-column mt-3" data-widget="treeview" role="menu"
              data-accordion="false">
              <li class="nav-item menu-open">
                <a href="../backend/index.php" class="nav-link">
                <i class="fa-solid fa-gauge"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="../backend/index.php" class="nav-link">
                <i class="fa-sharp fa-solid fa-tag"></i>
                  Merk
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="../frontend/index.php" class="nav-link">
                <i class="fa-solid fa-motorcycle"></i>
                  Product
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="" class="nav-link">
                  <i class="fa-solid fa-right-from-bracket mr-3"></i>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Admin</div>
          KannaMoto
        </div>
      </nav>
    </div>

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <center>
            <h2 class="mt-4"> <img src="assets/img/gigi.png" alt="" width="70">KANNA MOTO</h2>
          </center>
          <button type="button" id="lg" class="btn btn-info" data-toggle="modal" data-target="#detaill<?= $idb; ?>">
            Login
          </button>
          <div class="card mt-2 mb-4">
            <div class="card-header">
              <h2 class="ml-4">Kelola Data Motor</h2>
              <ul class="nav nav-item justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="siloker_backend1.html">Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="siloker_backend2.html">Data Motor</a>
                </li>
              </ul>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Tambah
              </button>
            </div>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Daftar Motor</h4>
                    <button type="button" class="close" data-dismiss="modal">
                      &times;
                    </button>
                  </div>

                  <!-- Modal body -->
                  <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <input type="text" name="Merk Motor" placeholder="Merk Motor" class="form-control" required />
                      <br />
                      <button type="submit" class="btn btn-primary" name="add">
                        Submit
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Merk Motor</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Honda</td>
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                          data-target="#detaill<?= $idb; ?>">
                          Detail
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                          data-target="#edit<?= $idb; ?>">
                          Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                          data-target="#delete<?= $idb; ?>">
                          Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Yamaha</td>
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                          data-target="#detaill<?= $idb; ?>">
                          Detail
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                          data-target="#edit<?= $idb; ?>">
                          Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                          data-target="#delete<?= $idb; ?>">
                          Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>TVS</td>
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                          data-target="#detaill<?= $idb; ?>">
                          Detail
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                          data-target="#edit<?= $idb; ?>">
                          Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                          data-target="#delete<?= $idb; ?>">
                          Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Suzuki</td>
                      <td>
                        <button type="button" class="btn btn-info" data-toggle="modal"
                          data-target="#detaill<?= $idb; ?>">
                          Detail
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                          data-target="#edit<?= $idb; ?>">
                          Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                          data-target="#delete<?= $idb; ?>">
                          Delete
                        </button>
                      </td>
                    </tr>

                    <!-- Detail Modal -->
                    <!-- Edit Modal -->
                    <!-- Delete Modal -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">
              Develop By Fadilah Salsa Bilah &copy;2023
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>