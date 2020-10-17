<?php include('header.php');?>
<?php

if (isset($_GET)){
  $id = $_GET['id'];
}

include 'adminpanel/connection.php';
$query1 = "SELECT * from products WHERE product_id='$id'";
$query2 = "SELECT * from categories WHERE category_id='$id'";

$result1 = mysqli_query($db_conn,$query1);
$result2 = mysqli_query($db_conn,$query2);

$db_conn->close();
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
        <h2>T-Shirt</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li><a href="#">Product</a></li>
          <li class="active">T-shirt</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  catg header banner section -->

  <!-- product category -->
  <?php foreach($result1 as $key=>$value):?>
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-lens-image"><img src="adminpanel\images\<?php echo $value['image']; ?>" class="simpleLens-big-image"></a></div>
                      </div>
                      <!--
                      <div class="simpleLens-thumbnails-container">
                        <a data-big-image="img/view-slider/medium/polo-shirt-1.png" data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-thumbnail-wrapper" href="#">
                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                        </a>                                    
                        <a data-big-image="img/view-slider/medium/polo-shirt-3.png" data-lens-image="img/view-slider/large/polo-shirt-3.png" class="simpleLens-thumbnail-wrapper" href="#">
                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                        </a>
                        <a data-big-image="img/view-slider/medium/polo-shirt-4.png" data-lens-image="img/view-slider/large/polo-shirt-4.png" class="simpleLens-thumbnail-wrapper" href="#">
                          <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                        </a>
                      </div>
                    -->
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="aa-product-view-content">
                      <h3><?php echo $value['name'];?></h3>
                      <div class="aa-price-block">
                        <span class="aa-product-view-price">Rs.<?php echo $value['price'];?></span>
                        <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                      </div>
                      <p><?php echo $value['description'];?></p>
                      <h4>Size</h4>
                      <div class="aa-prod-view-size">
                        <a href="#">S</a>
                        <a href="#">M</a>
                        <a href="#">L</a>
                        <a href="#">XL</a>
                      </div>
                      <h4>Color</h4>
                      <div class="aa-color-tag">
                        <a href="#" class="aa-color-green"></a>
                        <a href="#" class="aa-color-yellow"></a>
                        <a href="#" class="aa-color-pink"></a>                      
                        <a href="#" class="aa-color-black"></a>
                        <a href="#" class="aa-color-white"></a>                      
                      </div>
                      <div class="aa-prod-quantity">
                        <form action="">
                          <select id="" name="">
                            <option selected="1" value="0">1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                            <option value="5">6</option>
                          </select>
                        </form>
                        <p class="aa-prod-category">
                          Category: <a href="#"><?php foreach($result2 as $key1=>$value1){
                            echo $value1['category_name'];
                          } ?></a>
                        </p>
                      </div>
                      <div class="aa-prod-view-bottom">
                        <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>

                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>                
              </ul>

              <!-- Tab panes -->

              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                 <p><?php foreach($result1 as $key2=>$value2){
                  echo $value2['description'];
                }?>
              </p>
            </div>

          </div>
        </div>

        <!-- Related product -->
        <div class="aa-product-related-item">
          <!-- quick view modal -->                  
          <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">                      
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                    <!-- Modal view slider -->
                    <div class="col-md-6 col-sm-6 col-xs-12">                              
                      <div class="aa-product-view-slider">                                
                        <div class="simpleLens-gallery-container" id="demo-1">
                          <div class="simpleLens-container">
                            <div class="simpleLens-big-image-container">
                              <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                              </a>
                            </div>
                          </div>
                          <div class="simpleLens-thumbnails-container">
                            <a href="#" class="simpleLens-thumbnail-wrapper"
                            data-lens-image="img/view-slider/large/polo-shirt-1.png"
                            data-big-image="img/view-slider/medium/polo-shirt-1.png">
                            <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                          </a>                                    
                          <a href="#" class="simpleLens-thumbnail-wrapper"
                          data-lens-image="img/view-slider/large/polo-shirt-3.png"
                          data-big-image="img/view-slider/medium/polo-shirt-3.png">
                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                        </a>

                        <a href="#" class="simpleLens-thumbnail-wrapper"
                        data-lens-image="img/view-slider/large/polo-shirt-4.png"
                        data-big-image="img/view-slider/medium/polo-shirt-4.png">
                        <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal view content -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="aa-product-view-content">
                  <h3>T-Shirt</h3>
                  <div class="aa-price-block">
                    <span class="aa-product-view-price">$34.99</span>
                    <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                  <h4>Size</h4>
                  <div class="aa-prod-view-size">
                    <a href="#">S</a>
                    <a href="#">M</a>
                    <a href="#">L</a>
                    <a href="#">XL</a>
                  </div>
                  <div class="aa-prod-quantity">
                    <form action="">
                      <select name="" id="">
                        <option value="0" selected="1">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                      </select>
                    </form>
                    <p class="aa-prod-category">
                      Category: <a href="#">Polo T-Shirt</a>
                    </p>
                  </div>
                  <div class="aa-prod-view-bottom">
                    <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <a href="#" class="aa-add-to-cart-btn">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>                        
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
    <!-- / quick view modal -->   
  </div>  
</div>
</div>
</div>
</div>
</section>
<!-- / product category -->


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

<?php include('footer.php');?>