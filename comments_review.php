<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments and Reviews</title>
    <link href="src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .star {
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php include 'navbar.php';?>

<?php
// testing only
$starRating = 3;
?>

<div class="">
    <div class="">
        <h2 class="">Comments and Reviews</h2>
        <div class="">
            <span class="" id="userRating"><?php echo $starRating; ?></span>
            <div id="">
                <?php
                $fullStars = floor($starRating);
                $halfStar = ($starRating - $fullStars) >= 0.5 ? true : false;
                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $fullStars) {
                        echo '<i class="" data-rating="' . $i . '"></i>';
                    } else if ($halfStar && $i == ($fullStars + 1)) {
                        echo '<i class="" data-rating="' . $i . '"></i>';
                    } else {
                        echo '<i class="" data-rating="' . $i . '"></i>';
                    }
                }
                ?>
            </div>
        </div>
        <form class="" id="">
            <textarea class="" id="comment" placeholder="Write your comment/review here"></textarea>
            <input type="hidden" id="starRating" name="starRating">
            <button type="button" onclick="submitReview()" class="">Submit</button>
        </form>
        <div>
            <div class="">
                <h3 class="">Human 1</h3>
                <p class="">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor magna non risus fermentum, a eleifend justo ultricies."</p>
                <div class="" id="userReview">
                    <span class="">4.5</span>
                    <?php
                    $reviewStarRating = 4.5;
                    $fullStars = floor($reviewStarRating);
                    $halfStar = ($reviewStarRating - $fullStars) >= 0.5 ? true : false;
                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                    for ($i = 0; $i < $fullStars; $i++) {
                        echo '<i class=""></i>';
                    }
                    if ($halfStar) {
                        echo '<i class=""></i>';
                    }
                    for ($i = 0; $i < $emptyStars; $i++) {
                        echo '<i class=""></i>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>

<script>
    var stars = document.querySelectorAll('.star');
    stars.forEach(function(star) {
        star.addEventListener('click', function() {
            var rating = parseInt(star.getAttribute('data-rating'));
            document.getElementById("starRating").value = rating;
            updateStars(rating);
        });
    });

    function updateStars(rating) {
        stars.forEach(function(star) {
            var starRating = parseInt(star.getAttribute('data-rating'));
            if (starRating <= rating) {
                if (star.classList.contains('far')) {
                    star.classList.remove('far');
                    star.classList.add('fas');
                } else if (star.classList.contains('fas') && star.classList.contains('fa-star-half-alt')) {
                    star.classList.remove('fas');
                    star.classList.add('far');
                }
            } else {
                if (star.classList.contains('fas') && !star.classList.contains('fa-star-half-alt')) {
                    star.classList.remove('fas');
                    star.classList.add('far');
                }
            }
        });
        document.getElementById("userRating").innerText = rating;
    }

    function submitReview() {
        var comment = document.getElementById("comment").value;
        var rating = document.getElementById("starRating").value;
        document.getElementById("userRating").innerText = rating;
    }
</script>

</body>
</html>
