<?php
include('header.php');

$totalprice ='';
foreach($_SESSION['cart'] as $key=>$value){

  $price_row = $value['price2']*$value['quantity2'];
  $totalprice += $price_row;

 }

 ?>

<!-- menu -->
<section id="menu">
  <div class="container">
    <div class="menu-area">
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div class="navbar-collapse collapse">
          <!-- Left nav -->
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Men <span class="caret"></span></a>
              <ul class="dropdown-menu">                
                <li><a href="#">Casual</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Formal</a></li>
                <li><a href="#">Standard</a></li>                                                
                <li><a href="#">T-Shirts</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">Trousers</a></li>
                <li><a href="#">And more.. <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Sleep Wear</a></li>
                    <li><a href="#">Sandals</a></li>
                    <li><a href="#">Loafers</a></li>                                      
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Women <span class="caret"></span></a>
              <ul class="dropdown-menu">  
                <li><a href="#">Kurta & Kurti</a></li>                                                                
                <li><a href="#">Trousers</a></li>              
                <li><a href="#">Casual</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Formal</a></li>                
                <li><a href="#">Sarees</a></li>
                <li><a href="#">Shoes</a></li>
                <li><a href="#">And more.. <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Sleep Wear</a></li>
                    <li><a href="#">Sandals</a></li>
                    <li><a href="#">Loafers</a></li>
                    <li><a href="#">And more.. <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Rings</a></li>
                        <li><a href="#">Earrings</a></li>
                        <li><a href="#">Jewellery Sets</a></li>
                        <li><a href="#">Lockets</a></li>
                        <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>                       
                        <li><a href="#">Jeans</a></li>
                        <li><a href="#">Polo T-Shirts</a></li>
                        <li><a href="#">SKirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Tops</a></li>
                        <li><a href="#">Make Up</a></li>
                        <li><a href="#">Hair Care</a></li>
                        <li><a href="#">Perfumes</a></li>
                        <li><a href="#">Skin Care</a></li>
                        <li><a href="#">Hand Bags</a></li>
                        <li><a href="#">Single Bags</a></li>
                        <li><a href="#">Travel Bags</a></li>
                        <li><a href="#">Wallets & Belts</a></li>                        
                        <li><a href="#">Sunglases</a></li>
                        <li><a href="#">Nail</a></li>                       
                      </ul>
                    </li>                   
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Kids <span class="caret"></span></a>
              <ul class="dropdown-menu">                
                <li><a href="#">Casual</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Formal</a></li>
                <li><a href="#">Standard</a></li>                                                
                <li><a href="#">T-Shirts</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">Trousers</a></li>
                <li><a href="#">And more.. <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Sleep Wear</a></li>
                    <li><a href="#">Sandals</a></li>
                    <li><a href="#">Loafers</a></li>                                      
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Digital <span class="caret"></span></a>
              <ul class="dropdown-menu">                
                <li><a href="#">Camera</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Tablet</a></li>
                <li><a href="#">Laptop</a></li>                                                
                <li><a href="#">Accesories</a></li>                
              </ul>
            </li>
            <li><a href="#">Furniture</a></li>            
            <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
              <ul class="dropdown-menu">                
                <li><a href="blog-archive.html">Blog Style 1</a></li>
                <li><a href="blog-archive-2.html">Blog Style 2</a></li>
                <li><a href="blog-single.html">Blog Single</a></li>                
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Pages <span class="caret"></span></a>
              <ul class="dropdown-menu">                
                <li><a href="product.html">Shop Page</a></li>
                <li><a href="product-detail.html">Shop Single</a></li>                
                <li><a href="404.html">404 Page</a></li>                
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div> 
  </div>
</div>
</section>
<!-- / menu -->  

  <!-- catg header banner section 
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  catg header banner section -->

  <!-- Cart view section -->
  <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($_SESSION['cart'] as $key=>$value):?>
                  <tr>
                    <td><a class="remove" href="removecart.php?id=<?php echo$key ?>"><fa class="fa fa-close"></fa></a></td>
                    <td><a href="#"><img src="adminpanel/images/<?php echo $value['img2'];?>" alt="image missing.."></a></td>
                    <td><a class="aa-cart-title" href="#"><?php echo $value['name2'];?></a></td>
                    <td><?php echo $value['price2'];?></td>
                    <td><input class="aa-cart-quantity" type="number" value="<?php echo $value['quantity2']; ?>"></td>
                    <td>Rs.<?php echo $value['quantity2']*$value['price2'];?></td>
                  </tr>
                  <?php endforeach; ?>

                  <tr>
                    <td colspan="6" class="aa-cart-view-bottom">
                      <div class="aa-cart-coupon">
                        <input class="aa-coupon-code" type="text" placeholder="Coupon">
                        <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                      </div>
                      <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
          <!-- Cart Total view -->
          
          <div class="cart-view-total">
           <h4>Cart Totals</h4>
           <table class="aa-totals-table">
             <tbody>
               <tr>
                 <th>Subtotal</th>
                 <td>Rs.<?php echo $totalprice;?></td>
               </tr>
               <tr>
                 <th>Total</th>
                 <td>Rs.<?php echo $totalprice;?></td>
               </tr>
             </tbody>
           </table>
           <a href="order.php" class="aa-cart-view-btn">Proced to Checkout</a>
         </div>

       </div>
     </div>
   </div>
 </div>
</div>
</section>
<!-- / Cart view section -->


<!-- Subscribe section -->
<section id="aa-subscribe">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-subscribe-area">
          <h3>Subscribe our newsletter </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
          <form action="" class="aa-subscribe-form">
            <input type="email" name="" id="" placeholder="Enter your Email">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Subscribe section -->

<?php include'footer.php'; ?>