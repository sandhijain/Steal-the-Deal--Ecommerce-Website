<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/f9fb578760.js" crossorigin="anonymous"></script>

</head>
<body>

    <!---Navbar-->
    <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
        <div class="container">
            <img class="logo" src="../imgs/logo.jpeg"/>

          <h2 class="brand">Steal The Deal</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li> -->

              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="cart.html">Bag</a>
              </li>
              
            <li class="nav-item">
              <a href="account.html"><i class="fa-solid fa-user"></i></a>
            </li>
            </ul>
            
          </div>
        </div>
      </nav>
      <!----Home-->
      <section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Prices</span> This Season</h1>
            <p>Eshop offers the best products for the most affordable prices</p>
            <button>Shop Now</button>
        </div>
    </section>
       
    <!--Brand-->
    <section id="brand" class="container">
        <div class="row">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../imgs/brand1.jpeg"/>  
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../imgs/brand2.jpeg"/>  
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../imgs/brand3.jpeg"/>  
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../imgs/brand4.jpeg"/>  
        </div>
    </section>

    <!--New-->
    <section id="new" class="w-100">
      <div class="row p-0 m-0">
        <!---One-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="../imgs/1.jpeg"/>
          <div class="details">
            <h2>Comfortable Shoes</h2>
            <button class="text-uppercase"><a href="shop.php">Shop Now</a></button>
          </div>
        </div>
        <!--Two--->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="../imgs/2.jpeg"/>
          <div class="details">
            <h2>Awesome Bags</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>

        <!---Three-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="../imgs/3.jpeg"/>
          <div class="details">
            <h2>50% OFF Watches</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>

      </div>
    </section>

    <!---Featured---->
    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
         <h3><b>Our Featured</b></h3>
        <hr class="mx-auto">
        <p>Here you can check out our featured products</p>
      </div>
      <div class="row mx-auto container-fluid">
        <?php include('server/get_featured_products.php');?>
      <?php while($row= $featured_products->fetch_assoc()){?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../imgs/featured1.jpeg"/>
          <div class="star">
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>
           <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
          </div>
      
 
          <?php } ?>
        </div>
      



    </section>

      <!---Banner-->
      <section id="banner" class="my-5 py-5">
        <div class="container">
          <h4>MID SEASON'S SALE</h4>
          <h1>Autumn Collection<br> UP to 30% OFF</h1>
          <button class="text-uppercase">shop-now</button>
        </div>
      </section>

      <!--Clothes-->
      <section id="clothes" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
           <h3><b>Dresses & Coats</b></h3>
          <hr class="mx-auto">
          <p>Here you can check out our amazing clothes</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="../imgs/clothes1.jpeg"/>
            <div class="star">
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="../imgs/clothes2.jpeg"/>
            <div class="star">
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="../imgs/clothes3.jpeg"/>
            <div class="star">
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="../imgs/clothes4.jpeg"/>
            <div class="star">
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
    </section>

      <!--Shoes--->
      <section id="shoes" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
           <h3><b>Shoes</b></h3>
          <hr class="mx-auto">
          <p>Here you can check out our amazing shoes</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="../imgs/shoes1.jpeg"/>
            <div class="star">
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="../imgs/shoes2.jpeg"/>
            <div class="star">
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="../imgs/shoes3.jpeg"/>
            <div class="star">
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="../imgs/shoes4.jpeg"/>
            <div class="star">
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              <i class= "fas fa-star"></i>
              
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
    </section>

     <!--Watches--->
     <section id="watches" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
         <h3><b>Watches</b></h3>
        <hr class="mx-auto">
        <p>Here you can check out our amazing watches</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../imgs/watch1.jpeg"/>
          <div class="star">
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            
          </div>
          <h5 class="p-name">Sports Shoes</h5>
          <h4 class="p-price">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../imgs/watch2.jpeg"/>
          <div class="star">
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            
          </div>
          <h5 class="p-name">Sports Shoes</h5>
          <h4 class="p-price">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../imgs/watch1.jpeg"/>
          <div class="star">
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            
          </div>
          <h5 class="p-name">Sports Shoes</h5>
          <h4 class="p-price">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../imgs/watch4.jpeg"/>
          <div class="star">
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            <i class= "fas fa-star"></i>
            
          </div>
          <h5 class="p-name">Sports Shoes</h5>
          <h4 class="p-price">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
      </div>
  </section>




  <!--Footer-->
  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img class="logo" src="../imgs/logo.jpeg"/>
        <p class="pt-3">We provide the best products for the most affordable prices</p>
      </div>

      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase">
          <li><a href="#">men</a></li>
          <li><a href="#">women</a></li>
          <li><a href="#">boys</a></li>
          <li><a href="#">girls</a></li>
          <li><a href="#">new arrivals</a></li>
          <li><a href="#">clothes</a></li>
        </ul>
        </div>
         
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Contact Us</h5>
          <div>
            <h6 class="text-uppercase">Address</h6>
            <p>1234 Street Name, City</p>
          </div>
          <div>
            <h6 class="text-uppercase">Phone</h6>
            <p>123 456 7890</p>
          </div>
          <div>
            <h6 class="text-uppercase">Email</h6>
            <p>stealthedeal@email.com</p>
          </div>
          </div>

            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Instagram</h5>
            <div class="row">
              <img src="../imgs/featured1.jpeg" class="img-fluid w-25 h-100 m-2"/>
              <img src="../imgs/featured3.jpeg" class="img-fluid w-25 h-100 m-2"/>
              <img src="../imgs/featured5.jpeg" class="img-fluid w-25 h-100 m-2"/>
              <img src="../imgs/featured7.jpeg" class="img-fluid w-25 h-100 m-2"/>
              <img src="../imgs/featured4.jpeg" class="img-fluid w-25 h-100 m-2"/>
            </div>

            </div>
          </div>
      
  <div class="copyright mt-5">
    <div class="row container mx-auto">
      <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
        <img src="../imgs/payment.jpeg"/>
       </div>
       <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
        <p>Steal The Deal @ 2022 All Rights Reserved</p>
       </div>
       <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
       </div>
    </div>
  </div>        


   
    
  </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>