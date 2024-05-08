<?php require_once "sessionConfig.php"; 
      require_once "dbQueries.php";
      require_once "dbConnector.php";
      require_once "productsClass.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index</title>
<link href="src/output.css" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php';?>
<?php echo ' <div class="">';


foreach ($productsArray as $product) {
    $product->displayProductsBox();
}

echo' </div>'
;?>

<?php include 'footer.php';?>
</body>
</html>
