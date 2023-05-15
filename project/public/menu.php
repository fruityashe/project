<?php
$connect = mysqli_connect("localhost","root","","project");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
    <link rel="icon" type="image/x-icon" href="images/image1.png">
    <link rel="stylesheet" href="menu.css">
    <title>Ante Milktea | Menu</title>

    <!--links-->
   </head>
<body>

<div class="header">
<div class="container">
 <div class="navbar">
    <div class="logo">
        <img src="images/logo.png" width="200px" alt="CSLogo">
    </div>
    <nav>
        <ul>
            <li><a href="home.html">HOME</a></li>
            <li><a href="menu.html">MENU</a></li>
            <li><a href="contactus.html">CONTACT US</a></li>
            <li><a href="signin.html" style="background-color: bisque; color: rgb(104, 77, 65); padding: 10px; border-radius: 10px;">SIGN-IN</a></li>
        </ul>
    </nav>
    <a href=""><img src="images/cart.png" width="30px" height="30px" alt="CartLogo"></a>
 </div> 
</div> 
<div class="r">
     <img src="images/milkteabg.png" alt="" class="milkteabg"> 
</div>

  <nav class="secondnavbar">
    <div class="navtitle">
         <h1>Menu</h1>
    </div>
    <div class="container-fluid">
      <ul class="snavbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Top Best Seller</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Special Milktea</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Classic Milktea</a>
        </li>
      </ul>
    </div>
  </nav>



<!--place your content here-->

<?php

$query = "SELECT * FROM cart_item";
$result = mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result)) {?>

<form methgod="get" action="menu.php?id=<?=$row['id']?>">
<img src="img/<?= $row['images']?>" alt="">
<h2><?= $row['name'];?></h2>
<h2><?= $row['price'];?></h2>
</form>

<?php 
}

?>

<!-- TOP SELLERS  -->

<div class="categories">
    <div class="small-container">
        <h2 class="title">TOP 3 BEST SELLERS</h2>
      <div class="row">
          <div class="col">
            <img src="images/top3.png" class="top3" alt="category1">
      </div>
    </div>
  </div>

 <!-- speacial categories -->

 <div class="small-container">
    <h2 class="title">SPECIAL MILKTEA</h2>
    <div class="row">
        <div class="col-4">
            <img src="images/SCMT.png" alt="product1">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div><br>
            <h4>Salted Caramel Milktea</h4>
            <p>₱160</p>
            <button>Buy Now</button>
        </div>
        </div>

        <div class="col-4">
            <img src="images/WMMTea.png" alt="product2">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div><br>
            <h4>Winter Melon Milktea</h4>
            <p>₱160</p>
            <button>Buy Now</button>
        </div>
        </div>

        <div class="col-4">
            <img src="images/THMT.png" alt="product3">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div><br>
            <h4>Thai Milktea</h4>
            <p>₱160</p>
            <button>Buy Now</button>
        </div>
        </div>

        <div class="col-4">
            <img src="images/RVMT.png" alt="product4">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div><br>
            <h4>Red Velvet Milktea</h4>
            <p>₱160</p>
            <button>Buy Now</button>
        </div>
        </div>

    </div>

 <!-- new arrival categories -->

    <!-- first row features categories -->

    <h2 class="title">CLASSIC MILKTEA</h2>
    <div class="row">
        <div class="col-4">
            <img src="images/CMT.png" alt="produc5">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div><br>
            <h4>Classic Milktea</h4>
            <p>₱110</p>
            <button>Buy Now</button>
        </div>
        </div>


        <div class="col-4">
            <img src="images/MCMT.png" alt="product6">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div><br>
            <h4>Macha Milktea</h4>
            <p>₱110</p>
            <button>Buy Now</button>
        </div>
        </div>


        <div class="col-4">
            <img src="images/CSMT.png" alt="product7">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div><br>
            <h4>Chocolate Strawberry Milktea</h4>
            <p>₱110</p>
            <button>Buy Now</button>
        </div>
        </div>


        <div class="col-4">
            <img src="images/DCMT.png" alt="product8">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div><br>
            <h4>Dark Chocolate Milktea</h4>
            <p>₱110</p>
            <button>Buy Now</button>
        </div>
        </div>

    </div>

     <!-- second row features categories -->


    <div class="row">
        <div class="col-4">
            <img src="images/TMT.png" alt="product9">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div><br>
            <h4>Taro Milktea</h4>
            <p>₱110</p>
            <button>Buy Now</button>
        </div>
        </div>

        <div class="col-4">
            <img src="images/HMT.png" alt="product10">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div><br>
            <h4>Hokaido Milktea</h4>
            <p>₱110</p>
            <button>Buy Now</button>
        </div>
        </div>

        <div class="col-4">
            <img src="images/CNCMT.png" alt="product11">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div><br>
            <h4>Cookies & Cream Milktea</h4>
            <p>₱110</p>
            <button>Buy Now</button>
        </div>
        </div>
   
        <div class="col-4">
            <img src="images/NCMT.png" alt="product12">
            <div class="descp">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div><br>
            <h4>Nutella Choco Milktea</h4>
            <p>₱110</p>
            <button>Buy Now</button>
        </div>
        </div>

    </div>
 </div>

<!-- offer -->

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/cheesecake.png" class="offer-img" alt="">
            </div>
            <div class="col-2">
                <p>Upcoming New Milktea Flavor</p>
                <h1>Cheesecake Series</h1>
                <small>
                    The drink is a blend of milk tea and tapioca pearls, while the cheesecake is a sweet and creamy dessert made from cream cheese, and eggs. 
                    The combination of the two provides a rich and satisfying taste experience. The sweet, cheesy and creamy textured cheesecake sits at the 
                    bottom of the drink and surprisingly goes really well with the tea. If you love cheesecakes, then this is the perfect drink for you.                    
                </small><br>
                <a href="" class="btn">&#xab; Read More &#xbb;</a>
            </div>
        </div>
    </div>
</div>

<!-- testimonial -->

<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Pretty comfortable at a reasonable price for fans good quality cannt ask for better.</p><br>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user.png" alt="user">
                <h3>Nice Jersey</h3>
            </div>

            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Pretty comfortable at a reasonable price for fans good quality cannt ask for better.</p><br>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="images/user.png" alt="user">
                <h3>Best Purchase Ever</h3>
            </div>

            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Pretty comfortable at a reasonable price for fans good quality cannt ask for better.</p><br>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <img src="images/user.png" alt="user">
                <h3>Excellent purchase</h3>
            </div>
        </div>
    </div>
</div>

<!-- brands -->

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/fb.png" alt="facebook">
            </div>
            <div class="col-5">
                <img src="images/ins.png" alt="instagram">
            </div>
            <div class="col-5">
                <img src="images/twt.png" alt="twitter">
            </div>
        </div>
    </div>
</div>
  

 
</div>
</div>



<!-- footer -->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and Ios mobile phones.</p>
                <div class="app-logo">
                    <img src="images/ps.png" alt="play store">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/wlogo.png" alt="">
                <p>Milk-tea craze is everywhere and ANTE is here to give you<br>everything you've been looking for a milk-tea brand.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Branch</li>
                    <li>Contact Us</li>
                    <li>FAQS</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">© Copyright 2023 Ante Milktea - All Rights Reserved</p>
    </div>
</div>
</body>
</html>