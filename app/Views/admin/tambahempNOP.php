

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>LaundryDar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="<?=base_url("favicon.ico")?>" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link
      href="<?=base_url("libadmin/owlcarousel/assets/owl.carousel.min.css")?>"
      rel="stylesheet"
    />
    <link
      href="<?=base_url("libadmin/tempusdominus/css/tempusdominus-bootstrap-4.min.css")?>"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url("css/cssadmin/bootstrap.min.css")?>" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?=base_url("css/cssadmin/style.css")?>" rel="stylesheet" />
  </head>

  <body>
    <form action="{{ route('admin.store', ['employeeId' => $employeeId]) }}" method="POST" class="form">
    @csrf
      <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div
          id="spinner"
          class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
        >
          <div
            class="spinner-border text-primary"
            style="width: 3rem; height: 3rem"
            role="status"
          >
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <!-- Spinner End -->
  
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
          <nav class="navbar bg-light navbar-light">
            <a href="dashboardmin.html" class="navbar-brand mx-4 mb-3">
              <h3 class="text-primary">
                <i class="fa fa-hashtag me-2"></i>DarMin
              </h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
              <div class="position-relative">
                <img
                  class="rounded-circle"
                  src="<?=base_url("imgadmin/user.jpg")?>"
                  alt=""
                  style="width: 40px; height: 40px"
                />
                <div
                  class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"
                ></div>
              </div>
              <div class="ms-3">
                <h6 class="mb-0">Biwang</h6>
                <span>Admin</span>
              </div>
            </div>
            <div class="navbar-nav w-100">
              <a href="{{ route('admin.dashboard', ['employeeId' => $employeeId]) }}" class="nav-item nav-link"
                ><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a
              >
              <a href="{{ route('admin.service', ['employeeId' => $employeeId]) }}" class="nav-item nav-link"
                ><i class="fa fa-th me-2"></i>Service</a
              >
              <a href="{{ route('admin.expense', ['employeeId' => $employeeId]) }}" class="nav-item nav-link active"
                ><i class="fa fa-keyboard me-2"></i>Expense</a
              >
              <a href="{{ route('admin.employee', ['employeeId' => $employeeId]) }}" class="nav-item nav-link"
                ><i class="fa fa-chart-bar me-2"></i>Employee</a
              >
              <a href="{{ route('admin.laporan', ['employeeId' => $employeeId]) }}" class="nav-item nav-link"
                ><i class="far fa-file-alt me-2"></i>Laporan</a
              >
            </div>
          </nav>
        </div>
        <!-- Sidebar End -->
  
        <!-- Content Start -->
        <div class="content">
          <!-- Navbar Start -->
          <nav
            class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a
              href="dashboardmin.html"
              class="navbar-brand d-flex d-lg-none me-4"
            >
              <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
              <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                >
                  <img
                    class="rounded-circle me-lg-2"
                    src="<?=base_url("imgadmin/user.jpg")?>"
                    alt=""
                    style="width: 40px; height: 40px"
                  />
                  <span class="d-none d-lg-inline-flex">{{ $admin->epl_name }}</span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0"
                >
                  <a href="{{ route('admin.profile', ['employeeId' => $employeeId]) }}" class="dropdown-item">My Profile</a>
                  <a href="{{ route('customer.login', ['employeeId' => $employeeId]) }}" class="dropdown-item">Log Out</a>
                </div>
              </div>
            </div>
          </nav>
          <!-- Navbar End -->

          <!-- Form Employee Start -->
          <form action="{{ route('admin.store', ['employeeId' => $employeeId]) }}" method="POST" class="form">
            @csrf
            <h1 class="text-center">Add Employee</h1>

              <div class="input-box">
                <label>Name</label> 
                <input type="text" name="epl_name" placeholder="Nama" required />
              </div>

              <div class="input-box">
                <label>Job title</label>
                <input type="text" name="epl_jobtitle" placeholder="Job title" required />
              </div>

              <div class="input-box">
                <label>Phone number</label>
                <input type="text" name="epl_phonenumber" placeholder="Phone number" required />
              </div>

              <!-- GENDER -->
              <div class="form-floating mb-3">
                <select 
                class="form-control" 
                name="epl_gender"
                id="floatingGender">
                  <option value="" selected disabled>Select Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
                <label for="floatingGender">Gender</label>
              </div>

              <div class="input-box">
                <label>Salary</label>
                <input type="number" name="epl_salary" placeholder="Salary" required />
              </div>        
              
              <div class="input-box">
                <label>Age</label>
                <input type="number" name="epl_age" placeholder="Age" required />
              </div>                
              
              <div class="input-box">
                <label>Username</label>
                <input type="text" name="epl_uname" placeholder="Username" required />
              </div>  
              
              <div class="input-box">
                <label>Password</label>
                <input type="password" name="epl_password" placeholder="Password" required />
              </div>                
              
              <div class="btns-group">
                <input type="submit" value="Submit" class="btn center" />
              </div>
            </div>
          </form>
  
          <!-- Footer Start -->
          <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded-top p-4">
              <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                  &copy; <a href="#">LaundryDar</a>, All Right Reserved.
                </div>
              </div>
            </div>
          </div>
          <!-- Footer End -->
        </div>
      <!-- Content End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url("libadmin/chart/chart.min.js")?>"></script>
    <script src="<?=base_url("libadmin/easing/easing.min.js")?>"></script>
    <script src="<?=base_url("libadmin/waypoints/waypoints.min.js")?>"></script>
    <script src="<?=base_url("libadmin/owlcarousel/owl.carousel.min.js")?>"></script>
    <script src="<?=base_url("libadmin/tempusdominus/js/moment.min.js")?>"></script>
    <script src="<?=base_url("'libadmin/tempusdominus/js/moment-timezone.min.js")?>"></script>
    <script src="<?=base_url("libadmin/tempusdominus/js/tempusdominus-bootstrap-4.min.js")?>"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url("jsadmin/main.js")?>"></script>

  </form>    
  </body>
</html>
