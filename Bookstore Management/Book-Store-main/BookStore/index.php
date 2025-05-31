<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/be1ba39dfe.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Book Zone</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="Register.php">Create Account</a></li>
        </div>
    </nav>

    <div class="section-1">
        <div class="Section-1-text">
            <center><h1>Welcome to Book Zone</h1>
            <p>You can find out yours book here.</p>
            <a href="products.php" class="btn">Explore Here  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
           
        </center>
        </div>
    </div>
    <div class="section-2">
        <h2>Featured Products</h2>
        <!-- <a href="#"><img src="./images/img_2.jpg" alt=""> -->
        <div class="gallery">
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_2.jpg" alt="img-1">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_3.jpeg" alt="img-2">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_4.jpg" alt="img-3">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_5.jpg" alt="img-4">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_6.jpg" alt="img-5">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_7.jpg" alt="img-6">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_8.jpg" alt="img-7">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_9.jpg" alt="img-8">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_10.jpg" alt="img-9">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="./images/img_11.jpg" alt="img-10">
                </a>
            </div>


        </div>

    </div>
    <!-- <div class="section-3">
        <h3>Products</h3>
        <br>
        <div class="view-card">
            <div class="card">
                <center><img src="./images/img_11.jpg" alt="Avatar"></center>
                <div class="container">
                  <center>
                    <h4><b>John Doe</b></h4> 
                    <p>Architect & Engineer</p>
                  </center> 
                </div>
            </div>
            <div class="card">
                <img src="./images/img_11.jpg" alt="Avatar">
                <div class="container">
                  <h4><b>John Doe</b></h4> 
                  <p>Architect & Engineer</p> 
                </div>
            </div>

        </div>

    </div>  -->

    <div class="section-4">
        <h2>Featured Brands</h2>
        <div class="brand">
            <img src="./images/book_logo1.png" alt="">
        </div>
        <div class="brand">
            <img src="./images/book_logo_6.png" alt="">
        </div>
        <div class="brand">
            <img src="./images/book_logo3.png" alt="">
        </div>
        <div class="brand">
            <img src="./images/book_logo_4.png" alt="">
        </div>
        <div class="brand">
            <img src="./images/book_logo_5.png" alt="">
        </div>
    </div>

    <!-- section-5 contact us  -->
    <div class="section-5">
        
              <h2>Contact Us</h2>
              <p>leave us a message or suggestion:</p>

              <div class="column">
                <form  class="login-form" action="messagefun.php" method="post">                     
                  <label for="name">name</label>
                  <input type="text" id="name" name="name" placeholder="Your name..">
                  <label for="email">email</label>
                  <input type="text" id="email" name="email" placeholder="Your email">
                  <label for="mobile">mobile</label>
                  <input type="text" id="mobile" name="mobile" placeholder="Your mobile">
                  <label for="message">message</label>
                  <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
                  <button name="submit">submit</button>
                </form>
              </div>

    </div>
</body>
</html>