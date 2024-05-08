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

<?php echo '
<section class="">
  <div class="">
      <h2 class="">Contact Us</h2>
      <p class="">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
      <form action="#" class="">
          <div>
              <label for="email" class="">Your email</label>
              <input type="email" id="email" class="" placeholder="name@flowbite.com" required>
          </div>
          <div>
              <label for="subject" class="">Subject</label>
              <input type="text" id="subject" class="" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="">Your message</label>
              <textarea id="message" rows="6" class="" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="">Send message</button>
      </form>
  </div>
</section>' ;?>

<?php include 'footer.php';?>
</body>
</html>
