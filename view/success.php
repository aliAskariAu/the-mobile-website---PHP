<?php include "../model/connection.php"; 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="mobile hour phones smartphones" />
    <meta name="description" content="home page The Mobile Hour" />
    <meta name="author" content="Elise Herrie" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <title>Registration Successful || The Mobile Hour</title>
  </head>

  <body>
    <!--Header-->
    <header>
      <div class="logo">
        <a href="index.html">
          <img src="images/logo_jpg.jpg" height="78" alt="Logo" />
        </a>
      </div>

      <h1>The Mobile Hour</h1>

      <ul class="top_header">
        <li class="top_header_item">
          <a class="top_header_item_text" href="cart.html">
            <img
              class="top_header_item_image"
              src="images/cart.jpg"
              height="38 "
              alt="Cart"
            />Cart
          </a>
        </li>
        <li class="top_header_item">
          <a class="top_header_item_text" href="login.html">
            <img
              class="top_header_item_image"
              src="images/login.jpg"
              height="38 "
              alt="Login"
            />Login
          </a>
        </li>
      </ul>
    </header>

    <!-- Navigation-->
    <div class="navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mx-auto">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="pe-5">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      aria-current="page"
                      href="index.html"
                      >Home</a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="shop_all.html"
                      ><strong>Shop all Mobile Phones</strong></a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="apple.html"
                      ><strong>Apple</strong></a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="samsung.html"
                      ><strong>Samsung</strong></a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="google.html"
                      ><strong>Google</strong></a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html"
                      ><strong>Contact Us</strong></a
                    >
                  </li>
                </div>
                <form class="d-flex" role="search">
                  <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <button class="btn btn-outline-dark" type="submit">
                    Search
                  </button>
                </form>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <h3 class="p-5">
      Registration has been successful. Please click
      <a href="../view/login.php">here</a> to login.
    </h3>
    <!---Footer-->
    <footer>
      <div id="footer_left">
        <a href="https://www.facebook.com"
          ><img src="images/facebook.png" alt="facebook icon"
        /></a>
        <a href="https://www.instagram.com"
          ><img src="images/instagram.png" alt="instagram icon"
        /></a>
        <a href="https://www.twitter.com"
          ><img src="images/twitter.png" alt="twitter icon"
        /></a>
        <a href="https://www.youtube.com"
          ><img src="images/youtube.png" alt="youtube icon"
        /></a>
      </div>
      <div id="footer_center">
        <a id="footer_index" href="index.html">©2023 The Mobile Hour</a>
        <a href="admin-portal.html">Admin Portal</a>
      </div>

      <div id="footer_right1">
        <a href="login.html">Login</a><br />
        <a href="about.html">About Us</a><br />
        <a href="returns.html">Return Policy</a><br />
      </div>
      <div id="footer_right2">
        <a href="shipping.html">Shipping Info</a><br />
        <a href="privacy.html">Privacy Statement</a><br />
        <a href="termsconditions.html">Terms & Conditions</a><br />
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
