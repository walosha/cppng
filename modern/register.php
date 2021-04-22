<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>
      Register & Signup | UBold - Responsive Admin Dashboard Template
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
      name="description"
    />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <!-- App css -->
    <link href="../assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="../assets/css/bootstrap-modern.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="../assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="../assets/css/bootstrap-modern-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="../assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- App css -->
        <link href="../assets/css/config/modern/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="../assets/css/config/modern/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="../assets/css/config/modern/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="../assets/css/config/modern/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="loading authentication-bg authentication-bg-pattern">
    <div class="account-pages mt-5 mb-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-4">
            <div class="card bg-pattern">
              <div class="card-body p-4">
                <div class="text-center w-75 m-auto">
                  <div class="auth-logo">
                    <a href="index.html" class="logo logo-dark text-center">
                      <span class="logo-lg">
                        <img
                          src="../assets/images/logo-dark.png"
                          alt=""
                          height="22"
                        />
                      </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                      <span class="logo-lg">
                        <img
                          src="../assets/images/logo-light.png"
                          alt=""
                          height="22"
                        />
                      </span>
                    </a>
                  </div>
                  <p class="text-muted mb-4 mt-3">
                    Don't have an account? Create your account, it takes less
                    than a minute
                  </p>
                </div>

                <form action="#">
                  <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input
                      class="form-control"
                      type="text"
                      id="fullname"
                      placeholder="Enter your name"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="emailaddress" class="form-label"
                      >Email address</label
                    >
                    <input
                      class="form-control"
                      type="email"
                      id="emailaddress"
                      required
                      placeholder="Enter your email"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        placeholder="Enter your password"
                      />
                      <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="checkbox-signup"
                      />
                      <label class="form-check-label" for="checkbox-signup"
                        >I accept
                        <a href="javascript: void(0);" class="text-dark"
                          >Terms and Conditions</a
                        ></label
                      >
                    </div>
                  </div>
                  <div class="text-center d-grid">
                    <button class="btn btn-success" type="submit">
                      Sign Up
                    </button>
                  </div>
                </form>
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->

            <div class="row mt-3">
              <div class="col-12 text-center">
                <p class="text-white-50">
                  Already have account?
                  <a href="index.php" class="text-white ms-1"
                    ><b>Sign In</b></a
                  >
                </p>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="../assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.min.js"></script>
  </body>
</html>
