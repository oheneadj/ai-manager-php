<?php 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Students | AI Training Manager</title>
    <!-- Head-->
    <?php require_once'./includes/head.php'; ?>
  </head>

  <body data-layout="horizontal" data-topbar="dark">
    <!-- Loader -->
    <?php require_once'./includes/preloader.php'; ?>

    <!-- Begin page -->
    <div id="layout-wrapper">
     <!-- Header --> 
    <?php require_once'./includes/header.php'; ?>

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Add New Student</h4>
                                        <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p>
                                        <form class="needs-validation was-validated" novalidate="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required="">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required="">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">City</label>
                                                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required="">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid city.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">State</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="State" required="">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Zip</label>
                                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required="">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
                                                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
            </div>
            <div class="col-md-2"></div>
            <!-- end page title -->

        
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
         <!-- Footer -->
        <?php require_once'./includes/footer.php'; ?>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right side bar -->
    <?php require_once'./includes/rightside-bar.php'; ?>
    <!-- Scripts -->
    <?php require_once'./includes/scripts.php'; ?>

  </body>
</html>
