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




<?php echo '
<section class="">
  <div class="">
      <div class="">
          <div class="">
              <h1 class="">
                  Log in to your account
              </h1>';
              if(isset($_SESSION["successSignup"])) {
                echo "<br>";
                echo '<span class="">' . $_SESSION["successSignup"] . '</span>';
                unset($_SESSION["successSignup"]);
              }
              if(isset($_SESSION["errorsLogin"])) {
                $errors = $_SESSION["errorsLogin"];
                foreach($errors as $error) {
                    echo '<span class="">' . $error . '</span>';
                }
                unset($_SESSION["errorsLogin"]);
              }
              echo ' <form class="" method="POST">
                  <div>
                        <label for="username" class="">Username</label>
                        <input type="text" name="userName" id="username" class="" placeholder="Username">
                  </div>
                  <div>
                      <label for="email" class="">Your email</label>
                      <input type="email" name="email" id="email" class="" placeholder="Your Email">
                  </div>
                  <div>
                      <label for="password" class="">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="">
                  </div>
                  <div class="">
                      <div class="">
                          <div class="">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="">
                          </div>
                          <div class="">
                            <label for="remember" class="">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class=">Forgot password?</a>
                  </div>
                  <button type="submit" class="">Sign in</button>
                  <p class="">
                      Don’t have an account yet? <a href="sign_up.php" class="">Sign up</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
'
;?>

</body>
</html>
