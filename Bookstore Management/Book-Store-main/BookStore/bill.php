<?php
include('conn.php');
if(isset($_POST['TREASURE_ISLAND'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Treasure Island</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Robert louis stevenson</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">200 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">200 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php

    }
  elseif(isset($_POST['THE_MAGIC_OF_THE_UNICORN']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">THE MAGIC OF THE UNICORN</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Robert louis stevenson</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">250 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">250 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php

  }
  
    elseif(isset($_POST['SUMMER_ADVENTURE_STORIES']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">SUMMER_ADVENTURE_STORIES</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Enid Blyton</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">180 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">180 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
      elseif(isset($_POST['DRAGON_RUN']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">DRAGON_RUN</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Patrick Matthews</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">460 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">460 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
      elseif(isset($_POST['ram']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Ram Ikshvakuche Vanshaj</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Amish</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">460 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">460 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  

elseif(isset($_POST['zunjar']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Zunjar_machi</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Ishwar Trimbak Agam</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">100 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">100 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
  elseif(isset($_POST['jay']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Mrutyunjay</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Shivaji Sawant</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">304 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">304 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['sher']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Sherlock homeschya rahasyakatha </span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">conan doyal</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">340 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">340 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['dark']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Darkest Before The Dawn</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Michael Anderle Ell Leigh Clarke</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">120 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">120 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['king']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">The Takings</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Sandie Will </span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">402 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">402 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['death']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Death Sentence</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Bill Carson </span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">299 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">299 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['spy']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">The Billion Dollar Spy</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">David E. Hoffman </span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">150 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">150 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['lock']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">The lockdown</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Rahul Aagarwal</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">300 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">300 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['yantra']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">shadayantra</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Vinay Mirase</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">389 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">389 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['gatha']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Siyalkot gatha</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Ashvin Sanghi</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">269 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">269 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  
elseif(isset($_POST['dappa']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Hadappa</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Vinit Bajpayi</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">451 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">451 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }

elseif(isset($_POST['Lisa']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Prince On Paper</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Alyssa Cole</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">250 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">250 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  elseif(isset($_POST['rogue']))  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Rogue Of Fifth Avenue</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Joana Shupe</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">300 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">300 Rs</span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  }

elseif(isset($_POST['K']))  {
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Shop Bill</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
      <h1>Book Shop Bill</h1>
      <div class="bill">
          <div class="item">
              <span class="title">Book Title:</span>
              <span class="value">Marrying Whinterborne</span>
          </div>
          <div class="item">
              <span class="title">Author:</span>
              <span class="value">Lisa Kleypas</span>
          </div>
          <div class="item">
              <span class="title">Price:</span>
              <span class="value">450 Rs</span>
          </div>
          <div class="item">
              <span class="title">Quantity:</span>
              <span class="value">1</span>
          </div>
          <div class="total">
              <span class="title">Total:</span>
              <span class="value">450 Rs</span>
          </div>
      </div>
  </div>
</body>
</html>
<?php
}

elseif(isset($_POST['victoria']))  {
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Shop Bill</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
      <h1>Book Shop Bill</h1>
      <div class="bill">
          <div class="item">
              <span class="title">Book Title:</span>
              <span class="value">Scoundrels and Other Gentlemen</span>
          </div>
          <div class="item">
              <span class="title">Author:</span>
              <span class="value">Victoria Alexander</span>
          </div>
          <div class="item">
              <span class="title">Price:</span>
              <span class="value">299 Rs</span>
          </div>
          <div class="item">
              <span class="title">Quantity:</span>
              <span class="value">1</span>
          </div>
          <div class="total">
              <span class="title">Total:</span>
              <span class="value">299 Rs</span>
          </div>
      </div>
  </div>
</body>
</html>
<?php
}
elseif(isset($_POST['aghat']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Aghat</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Parshuram Mali</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">105 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">105 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }

  elseif(isset($_POST['prem']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Premachya Charolya</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Trupti Tillo</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">299 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">299 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  elseif(isset($_POST['sam']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Samarpan</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Mahendra Pethkar</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">349 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">349 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  elseif(isset($_POST['no']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">NO LANDS MAN</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">AASIF MANDAVI</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">400 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">400 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }

  elseif(isset($_POST['three']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Three Men In Boat</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Jerome</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">299 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">299 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  elseif(isset($_POST['lose']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Lose Well</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Chris Gethard</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">349 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">349 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  elseif(isset($_POST['carry']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Carry ON, Jeeves</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Huge Laure</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">299 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">299 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  elseif(isset($_POST['pune']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Pune - Ek Athavan</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Mr. Shyam Bhurke</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">199 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">199 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  elseif(isset($_POST['go']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Fakkad Goshti</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Mr. Shankar Patil</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">149 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">149 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  elseif(isset($_POST['sar']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">SarMisal</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Mr. Jaywant Dalvi</span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">349 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">349 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  elseif(isset($_POST['gam']))  {
    ?>
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop Bill</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
        <h1>Book Shop Bill</h1>
        <div class="bill">
            <div class="item">
                <span class="title">Book Title:</span>
                <span class="value">Gammat-Goshti</span>
            </div>
            <div class="item">
                <span class="title">Author:</span>
                <span class="value">Mr.D. M. Mirasdar </span>
            </div>
            <div class="item">
                <span class="title">Price:</span>
                <span class="value">250 Rs</span>
            </div>
            <div class="item">
                <span class="title">Quantity:</span>
                <span class="value">1</span>
            </div>
            <div class="total">
                <span class="title">Total:</span>
                <span class="value">250 Rs</span>
            </div>
        </div>
    </div>
  </body>
  </html>
  <?php
  }
  
  
  
