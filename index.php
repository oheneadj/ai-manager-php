<?php
require_once('./libs/db.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | AI Portal</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link
      href="assets/css/app.min.css"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body class="authentication-bg">
    <div class="account-pages my-3 pt-sm-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <a href="#" class="mb-5 d-block auth-logo">
                <img
                  src="assets/images/logo.png"
                  alt=""
                  height="32"
                  class="logo logo-dark"
                />
                <img
                  src="assets/images/logo.png"
                  alt=""
                  height="32"
                  class="logo logo-light"
                /><span class="text-dark"> AI Training Manager</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">
              <div class="card-body p-4">
                <div class="text-center mt-2">
                  <h5 class="text-primary">Welcome Back !</h5>
                  <p class="text-muted">Sign in to continue to AI Training Manager.</p>
                </div>
                <div class="p-2 mt-4">
                  <form method="POST" action="./controllers/users/login.php">
                    <div class="mb-3">
                      <label class="form-label" for="username">Staff ID</label>
                      <input
                        name="staff_id"
                        type="text"
                        class="form-control"
                        id="staff_id"
                        placeholder="Enter your Staff ID"
                      />
                    </div>
                    <div class="mb-3">
                      <div class="float-end">
                        <a href="auth-recoverpw.html" class="text-muted"
                          >Forgot password?</a
                        >
                      </div>
                      <label class="form-label" for="userpassword"
                        >Password</label
                      >
                      <input
                        name="password"
                        type="password"
                        class="form-control"
                        id="password"
                        placeholder="Enter your password"
                      />
                    </div>

                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="auth-remember-check"
                      />
                      <label class="form-check-label" for="auth-remember-check"
                        >Remember me</label
                      >
                    </div>

                    <div class="mt-3 text-end">
                      <button
                        class="btn btn-primary btn-block w-lg waves-effect waves-light"
                        type="submit"
                      >
                        Log In
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="mt-5 text-center">
              <p>
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Arnson Innovate. Developed with
                <i class="mdi mdi-fire text-danger"></i> by <a target="_blank" href="https://oheneadjei.com/">Ohene Adjei</a>
              </p>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
  </body>
</html>
