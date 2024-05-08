<?php require_once "sessionConfig.php"; 
      require_once "dbQueries.php";
      require_once "dbConnector.php";
?>
<?php
if(isset($_SESSION["accID"])) {
    $userNamePic = GetPictureUsername($connect, $_SESSION["accID"]);
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_buffer($finfo, $userNamePic['profilePic']);
    finfo_close($finfo);
    $userData = GetUserAccount($connect, $_SESSION["accID"]);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <section style="">
        <form action="sign_upLogic.php" method="POST" enctype="multipart/form-data">
            <div style="">
                <div style="">
                    <img src="data:image/<?php echo $mimeType; ?>;base64, <?php echo base64_encode($userNamePic['profilePic']); ?>" alt="User Photo" style="">
                    <p style="">Hello <span id="usernameDisplay"> <?php echo $userNamePic['userName']; ?> </span>!</p>
                </div>
                <br>
                <?php
                if(isset($_SESSION["errorsSignup"])) {
                    $errors = $_SESSION["errorsSignup"];
                    foreach($errors as $error) {
                        echo '<span class="">' . $error . '</span>';
                    }
                    unset($_SESSION["errorsSignup"]);
                }
                if(isset($_SESSION["successEdit"])) {
                    echo '<span class="">' . $_SESSION['successEdit'] . '</span>';
                    unset($_SESSION["successEdit"]);
                }
                ?>
                <br>
                <label for="username" style="">Username:</label>
                <input type="text" id="username" name="userName" value="<?php echo $userNamePic['userName'];?>" style="">
                <br><br>
                <div style="">
                    <div style="">
                        <label for="firstName" style="">First Name:</label>
                        <input type="text" id="firstName" name="firstName" value="<?php echo $userData['firstName'];?>" style="">
                    </div>
                    <div style="">
                        <label for="lastName" style=">Last Name:</label>
                        <input type="text" name="lastName" id="lastName" value="<?php echo $userData['lastName'];?>" style="">
                    </div>
                </div>
                <label for="email" style="">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $userData['email'];?>" style="">
                <br><br>
                <label for="password" style="">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $userData['password'];?>" style="">
                <br><br>
                <label for="mobile" style="">Mobile Number:</label>
                <input type="text" id="mobile" name="mobileNumber" value="<?php echo $userData['mobileNumber'];?>" style="">
                <br><br>
                <label for="image" style="">Image:</label>
                <input type="file" id="image" name="image" style="">
                <br><br>
                <div style="">
                    <button type="submit" name="submitDelete" style="">Delete Account</button>
                    <button type="submit" name="submitEdit" style="">Edit Account</button>
                    <button type="submit" name="submitExit" style="">Exit</button>
                </div>
            </div>
        </form>
    </section>

    <script>
        function exit() {
            // Code to handle saving account details
            alert("Saving account...");
        }
    </script>
</body>
</html>
