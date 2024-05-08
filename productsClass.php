<?php
require_once "sessionConfig.php";
require_once "dbConnector.php";
require_once "dbQueries.php";
class Product {
    public $prodID;
    public $name;
    public $description;
    public $price;
    public $image;
    public $rating;

    public function __construct($prodID, $name, $price, $image, $rating) {
        $this->prodID = $prodID;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->rating = $rating;
    }

    public function displayProduct() {
        echo "Name: {$this->name}<br>";
        echo "Price: {$this->price}<br>";
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_buffer($finfo, $this->image);
        finfo_close($finfo);
        echo '<img src="data:image/' . $mimeType . ';base64,' . base64_encode($this->image) . '" alt="User Photo" style="width: 150px; height: 150px; border-radius: 50%; margin-bottom: 20px;">';
        echo "Rating: {$this->rating}<br>";
    }

    public function displayProductsBox() {
        echo'            <div>';
        echo'    <div class="">';
        echo'    <a href="#">';

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_buffer($finfo, $this->image);
        finfo_close($finfo);
        echo '<img class src="data:image/' . $mimeType . ';base64,' . base64_encode($this->image) . '" alt="Product Photo">';

        echo'    </a>';
        echo'    <div class="">';
        echo'        <a href="#">';

        echo '<h5 class="">' . $this->name . '</h5>';

        echo'        </a>';
        echo'        <div class="">';
        echo'            <div class="">';
        echo'                <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">';
        echo'                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>';
        echo'                </svg>';
        echo'                <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">';
        echo'                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>';
        echo'                </svg>';
        echo'                <svg class="0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">';
        echo'                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>';
        echo'                </svg>';
        echo'                <svg class="0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">';
        echo'                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>';
        echo'                </svg>';
        echo'                <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">';
        echo'                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>';
        echo'                </svg>';
        echo'            </div>';

        echo '<span class="">' . $this->rating . '</span>';

        echo'        </div>';
        echo'        <div class="">';

        echo '<span class="">₱' . $this->price . '</span>';
        if(isset($_SESSION['accID'])) {
            echo'            <a href="cartLogic.php?add=' . $this->prodID . '" class="">Add to cart</a>';
        } else {
            echo'            <a href="login.php" class="">Add to cart</a>';
        }
        
        echo'        </div>';
        echo'    </div>';
        echo'    </div>';
        echo'        </div>';
    }
}
$resultProdID =  GetProdID($connect);
if($resultProdID) {
    foreach($resultProdID as $productID) {
        $ratings = GetRating($connect, $productID['prodID']);
        $totalRating = count($ratings);
        $sumRating = 0;
        foreach($ratings as $product) {
            $sumRating += $product['rating'];
        }
        $averageRating = $totalRating > 0 ? $sumRating / $totalRating : 0;
        UpdateRating($connect, $averageRating,  $productID['prodID']);
    }
}

$productsArray = array();
$resultProducts = GetProductsSeller($connect, 20);
if ($resultProducts) {
     foreach ($resultProducts as $row) {
        $product = new Product($row['prodID'], $row['name'], $row["price"], $row["image"], $row["rating"]);
        $productsArray[] = $product;
    }
} else {
    echo "No data found";
}
