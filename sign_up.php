<?php require_once "sessionConfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index</title>
<link href="src/output.css" rel="stylesheet">
</head>
<body>




<?php  
    echo '
<section class="">
  <div class="">
      <a href="#" class="">
          <img class="" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
          Flowbite    
      </a>
      <div class="">
          <div class="">
              <h1 class="">
                  Create an account
              </h1>';
              if(isset($_SESSION["errorsSignup"])) {
                $errors = $_SESSION["errorsSignup"];
                foreach($errors as $error) {
                    echo '<span class="">' . $error . '</span>';
                }
                unset($_SESSION["errorsSignup"]);
                }
              echo '<form class="" action="sign_upLogic.php" method="POST" enctype="multipart/form-data">
                  <div class=" ">
                      <div>
                          <label for="firstName" class="">First Name</label>
                          <input type="text" name="firstName" id="firstName" class="" placeholder="First Name">
                      </div>
                      <div>
                          <label for="lastName" class="">Last Name</label>
                          <input type="text" name="lastName" id="lastName" class="" placeholder="Last Name">
                      </div>
                  </div>
                  <div>
                        <label for="username" class="">Username</label>
                        <input type="text" name="userName" id="username" class="" placeholder="Username">
                    </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                      <input type="email" name="email" id="email" class="" placeholder="name@company.com">
                  </div>
                  <div>
                      <label for="password" class="">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="">
                  </div>
                  <div>
                      <label for="mobileNumber" class="">Mobile Number</label>
                      <input type="text" name="mobileNumber" id="mobileNumber" class="" placeholder="Mobile Number">
                  </div>
                  <div>
                      <label for="image" class="">Image</label>
                      <input type="file" name="image" id="image" accept="image/*" class="">
                  </div>
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="">
                      </div>
                      <div class="">
                        <label for="terms" class="">I accept the <a class="" href="#">Terms and Conditions</a></label>
                      </div>
                  </div>
                  <button type="submit" name="submitSignup" class="">Create an account</button>
                  <p class="">
                      Already have an account? <a href="login.php" class="">Login here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
';
    ?>
</body>
</html>
