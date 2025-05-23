<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD:registration.html

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/registration.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.css.map">
  <link rel="stylesheet" href="./assets/css/base.css">
  <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
  <link rel="stylesheet" href="assets/css/homepage.css">
  <title>Registration</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-sm navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand text-light" href="homepage.html"><img src="assets/images/icons/logo.png" alt="logo"
          width="200px"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" href="homepage.html" aria-current="page">
              <i class="fa fa-home" aria-hidden="true"></i>HOME
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="about.html">ABOUT US</a>
          </li>

        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="login.html">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              LOGIN
            </a>
          </li>
          <li class="nav-item"> <a class="nav-link text-light" href="registration.html">REGISTER</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container auth-section">
    <div class="row">
      <div class="col-sm-12 col-lg-6 left-side">

        <div class="reg-form">
          <h1>Registration</h1>
          <!-- warning message here -->
          <div class="alert  d-none" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <form id="registration" action="#" onsubmit="handleRegistration(event)" enctype="multipart/form-data">
            <div class="row m-1">
              <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                <label for="firstname" class="form-label">First name*</label>
                <input type="text" class="form-control col-lg-6" id="firstname" name="firstname"
                  placeholder="First name">
                <div id="firstnameWarning" class="warning-message text-danger"></div>
              </div>
              <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                <label for="lastname" class="form-label">Last name*</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
                <div id="lastnameWarning" class="warning-message text-danger"></div>
              </div>
            </div>

            <div class="row  m-1">
              <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                <label for="department" class="form-label">Department*</label>
                <input type="text" class="form-control col-lg-6" id="department" name="department"
                  placeholder="Department">
                <div id="departmentWarning" class="warning-message text-danger"></div>
              </div>
              <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                <label for="matric" class="form-label">Matric number*</label>
                <input type="text" class="form-control" id="matric" name="matric" placeholder="Matric number">
                <div id="matricWarning" class="warning-message text-danger"></div>
              </div>
            </div>

            <div class="row  m-1">
              <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                <label for="level" class="form-label">Level*</label>
                <input type="text" class="form-control" id="level" name="level" placeholder="Level">
                <div id="levelWarning" class="warning-message text-danger  "></div>
              </div>
              <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                <label for="email" class="form-label">Email address*</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <div id="emailWarning" class="warning-message text-danger"></div>
              </div>
            </div>

            <div class="row m-1">
              <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                <label for="password" class="form-label">Password* </label>
                <input type="password" class="form-control col-lg-6" id="password" name="password"
                  placeholder="Password">
                <div id="passwordWarning" class="warning-message text-danger  "></div>
              </div>
              <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                <label for="confirmpass" class="form-label">Confirm password*</label>
                <input type="password" class="form-control" id="confirmPass" name="confirmPass"
                  placeholder="Confirm password">
                <div id="confirmPassWarning" class="warning-message text-danger  "></div>
              </div>
            </div>
            <div class="row  m-1">
              <div class="input-group mb-1 col-12">
                <label class="input-group-text" for="profile">Profile</label>
                <input type="file" class="form-control" id="profile" name="profile" accept=".jpg, .png, .jpeg">
                <div id="profileWarning" class="warning-message text-danger "></div>
              </div>
            </div>
            <div class="row col-12 justify-content-center">
              <button class="btn primary-bg-color text-white w-25"> Submit</button>
            </div>
            <div class="row">
              <p class="col-12">Already have an accout? <a href="./login.html">Login here</a></p>
            </div>
          </form>

        </div>
      </div>
<<<<<<< HEAD
      <div class="d-none d-lg-block col-lg-6 right-side">
=======
    </nav>
=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/registration.css">
    <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Registration</title>
</head>
<body>
            <!-- Navigation -->
            <?php include "./inc/navbar.php" ?>
>>>>>>> ca23af466c7381aa1826435cd0f6ab2e8f0572b3:registration.php
    <!-- loader -->
     <div class="loader bg-light">
  <i class="fa fa-spinner spinner "> </i>

</div>
<!-- loader -->
        
    <div class="container auth-section">
        <div class="row">
            <div class="col-sm-12 col-lg-6 left-side">
                
                <div class="reg-form">
                    <h1>Registration</h1>
                    <!-- warning message here -->
                    <div class="alert  d-none" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
>>>>>>> 7650b3a79d80478bf767fa456cbca91c8094eba3

<<<<<<< HEAD:registration.html
      </div>
    </div>
  </div>
=======
                    <form id="registration" action="#" onsubmit="handleRegistration(event)" enctype="multipart/form-data">
                        <div class="row m-1">
                            <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                                <label for="firstname" class="form-label">First name*</label>
                                <input type="text" class="form-control col-lg-6" id="firstname" name="firstname" placeholder="First name">
                                <div id="firstnameWarning" class="warning-message text-danger"></div>
                            </div>
                            <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                                <label for="lastname" class="form-label">Last name*</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
                                <div id="lastnameWarning" class="warning-message text-danger"></div>
                            </div>
                        </div>

                        <div class="row  m-1">
                            <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                                <label for="department" class="form-label">Department*</label>
                                <input type="text" class="form-control col-lg-6" id="department"  name="department" placeholder="Department">
                                <div id="departmentWarning" class="warning-message text-danger"></div>
                            </div>
                            <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                                <label for="matric" class="form-label">Matric number*</label>
                                <input type="text" class="form-control" id="matric" name="matric" placeholder="Matric number">
                                <div id="matricWarning" class="warning-message text-danger"></div>
                            </div>
                        </div>

                        <div class="row  m-1">
                            <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                                <label for="level" class="form-label">Level*</label>
                                <input type="text" class="form-control" id="level" name="level" placeholder="Level">
                                <div id="levelWarning" class="warning-message text-danger  "></div>
                            </div>
                            <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                                <label for="email" class="form-label">Email address*</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                <div id="emailWarning" class="warning-message text-danger"></div>
                            </div>
                        </div>

                        <div class="row m-1">
                            <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                                <label for="password" class="form-label">Password* </label>
                                <input type="password" class="form-control col-lg-6" id="password" name="password" placeholder="Password">
                                <div id="passwordWarning" class="warning-message text-danger  "></div>
                            </div>
                            <div class="mb-1 col-sm-12 col-md-6 col-lg-6">
                                <label for="confirmpass" class="form-label">Confirm password*</label>
                                <input type="password" class="form-control" id="confirmPass" name="confirmPass" placeholder="Confirm password">
                                <div id="confirmPassWarning" class="warning-message text-danger  "></div>
                            </div>
                        </div>
                        <div class="row  m-1">
                            <div class="input-group mb-1 col-12">
                                <label class="input-group-text" for="profile">Profile</label>
                                <input type="file" class="form-control" id="profile" name="profile" accept=".jpg, .png, .jpeg">
                                <div id="profileWarning" class="warning-message text-danger "></div>
                              </div>
                        </div>
                        <div class="row col-12 justify-content-center">
                            <button class="btn primary-bg-color text-white w-25" > Submit</button>
                        </div>
                        <div class="row">
                            <p class="col-12">Already have an accout? <a href="./login.php">Login here</a></p>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-6 right-side">

            </div>
        </div>
    </div>
    <?php include "./inc/footer.php" ?>
>>>>>>> ca23af466c7381aa1826435cd0f6ab2e8f0572b3:registration.php


  <script src="./assets/js/custom.js"></script>
  <script src="./assets/js/bootstrap.bundle.js"></script>
  <script src="./assets/js/bootstrap.bundle.js.map"></script>
</body>

</html>