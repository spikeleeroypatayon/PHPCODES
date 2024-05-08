<?php require_once "sessionConfig.php"; 
      require_once "dbQueries.php";
      require_once "dbConnector.php";


function showIdentify($connect) {
  if(isset($_SESSION["accID"])) {
    $userData = GetPictureUsername($connect, $_SESSION["accID"]);
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_buffer($finfo, $userData['profilePic']);
    finfo_close($finfo);

    echo '<a href="dashboard.php" class="">';
    echo '<img class="" src="data:image/' . $mimeType . ';base64,' . base64_encode($userData['profilePic']) . '" alt="Profile Picture of User">
          <div class="">';
    echo'      <p class=""> Hello! ' . $userData['userName'] . '</p>
          </div>
          </a>';
  }
}

function showSL() {
  if(!isset($_SESSION["accID"])) {
    echo '<a href="login.php" class="">
          Login/Signup
          </a>';
  } else {
    echo '<a href="log_in_outLogic.php?logout" class="">
            Logout
          </a>';
  }
}
function showCart() {
  if(isset($_SESSION["accID"])) {
    echo '<li>
        <a href="cartLogic.php?list" class="">Cart</a>
      </li>';
  }
}

?>
<?php
echo '<nav class="">
<div class="">
  <a href="https://flowbite.com/" class="">
      <img src="pics/site_logo.png" class="" alt="Flowbite Logo" />
      <span class="">Hustle Every Dye</span>
  </a>
  <button data-collapse-toggle="navbar-default" type="button" class="" aria-expanded="false">
      <span class="">Open main menu</span>
      <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
  </button>';
  showIdentify($connect);
 echo '<div class="" id="navbar-default">
    <ul class="">
      <li>
        <a href="index.php" class="" aria-current="page">Home</a>
      </li>
      <li>
        <a href="products.php" class="">Products</a>
      </li>';
  showCart();
      echo '<li>
        <a href="contact_us.php" class="">Contact</a>
      </li>
    </ul>
  </div>';
  showSL();
  echo '</div>
  </nav>
  </div>
</nav>';
?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const navbarToggle = document.querySelector("[data-collapse-toggle]");
    const navbarMenu = document.getElementById("navbar-default");

    navbarToggle.addEventListener("click", function() {
      navbarMenu.classList.toggle("hidden");
    });
  });
</script>
