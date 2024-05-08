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
  <div class="" role="dialog" aria-modal="true">
  <!--
    Background backdrop, show/hide based on slide-over state.

    Entering: "ease-in-out duration-500"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in-out duration-500"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class=""></div>

  <div class="">
    <div class="">
      <div class="">
        <!--
          Slide-over panel, show/hide based on slide-over state.

          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
        <div class=">
          <div class="">
            <div class="">
              <div class="">
                <h2 class="">Shopping cart</h2>
                <div class="">
                  <button type="button" class="">
                    <span class=""></span>
                    <span class="">Close panel</span>
                    <svg class="" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>

              <div class="">
                <div class="">
                  <ul role="list" class="-">
                    <li class="flex py-6">
                      <div class="">
                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                      </div>

                      <div class="">
                        <div>
                          <div class="f">
                            <h3>
                              <a href="#">Throwback Hip Bag</a>
                            </h3>
                            <p class="">$90.00</p>
                          </div>
                          <p class="">Salmon</p>
                        </div>
                        <div class="">
                          <p class="0">Qty 1</p>

                          <div class="">
                            <button type="button" class="">Remove</button>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="">
                      <div class="">
                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
                      </div>

                      <div class="">
                        <div>
                          <div class="">
                            <h3>
                              <a href="#">Medium Stuff Satchel</a>
                            </h3>
                            <p class="">$32.00</p>
                          </div>
                          <p class="">Blue</p>
                        </div>
                        <div class="">
                          <p class="">Qty 1</p>

                          <div class="">
                            <button type="button" class="">Remove</button>
                          </div>
                        </div>
                      </div>
                    </li>

                    <!-- More products... -->
                  </ul>
                </div>
              </div>
            </div>

            <!-- Payment and Delivery Options -->
            <div class="">
              <div class="">
                  <h3 class="">Payment Options</h3>
                  <select id="payment-options" class="">
                      <option>Credit/Debit Card</option>
                      <option>Gcash</option>
                      <option>Bank Transfer</option>
                      <option>Cash on Delivery (COD)</option>
                  </select>
              </div>

              <div class="">
                  <h3 class="">Delivery Options</h3>
                  <select id="delivery-options" class="">
                      <option>Standard Shipping</option>
                      <option>Express Shipping</option>
                      <option>Store Pickup</option>
                      <option>Same-Day Delivery</option>
                  </select>
              </div>

              <div class="">
                <p>Subtotal</p>
                <p>$262.00</p>
              </div>
              <p class="">Shipping and taxes calculated at checkout.</p>
              <div class="mt-6">
                <button onclick="handleCheckout()" class="">Checkout</button>
              </div>
              <div class="">
                <p>
                  or
                  <a href="products.php" class="">
                    <button type="button" class="">
                      Continue Shopping
                      <span aria-hidden="true"> &rarr;</span>
                    </button>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  '
  ;?>

  
<?php include 'footer.php';?>
</body>
</html>
