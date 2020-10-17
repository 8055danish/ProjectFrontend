<?php include('header.php'); ?>

<div id="main-content"> <!-- Main Content Section with everything -->
	
	<noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
			</div>
		</div>
	</noscript>
	

	<!-- Page Head -->
	<h2>Welcome John</h2>
	<?php
	include 'connection.php';
	
	$errors = array();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$price = $_POST['price'];
		
		$filename = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		
		$folder = "images/".$filename;

		$textfield = $_POST['textfield'];

		$dropdown = $_POST['dropdown'];
		$checklist = $_POST['checklist'];
		$check_list = implode(",",$checklist);

		if(empty($name) || empty($price) || empty($filename)||empty($dropdown)||empty($checklist)||empty($textfield)) 
		{

			array_push($errors,"All field must be filled");
		}

		$product_check_query = "SELECT * FROM products WHERE name='$name' LIMIT 1";

		$result = mysqli_query($db_conn, $product_check_query);

		$product = mysqli_fetch_assoc($result);

		if($product){
			if ($product['name'] === $name) {
				array_push($errors, "Product already exists");
			}
			
		}

		

		if(count($errors)==0){

			if(move_uploaded_file($tmp_name, $folder)){

				$sql1 = "INSERT INTO products (name,price,image,description) VALUES ('$name','$price','$filename','$textfield')"; 

				mysqli_query($db_conn, $sql1);
				

			}

			$sql2 = "INSERT INTO categories(category_name) VALUE('$dropdown')";
			mysqli_query($db_conn, $sql2);

			$sql3 = "INSERT INTO tags(tag_name) VALUE('$check_list')";
			mysqli_query($db_conn, $sql3);

			$db_conn->close();

		}
	}
	

	?>

	<?php  if (count($errors) > 0) : ?>
		<div>
			<?php foreach ($errors as $error) : ?>
				<p style="color:red"><?php echo $error ?></p>
			<?php endforeach ?>
		</div>
	<?php  endif ?>


	<div class="clear"></div> <!-- End .clear -->

	<div class="content-box"><!-- Start Content Box -->

		<div class="content-box-header">

			<h3>Products</h3>

			<ul class="content-box-tabs">
				<li><a href="#tab1">Manage Products</a></li> <!-- href must be unique and match the id of target div -->
				<li><a href="#tab2" class="default-tab">Add Product</a></li>
			</ul>

			<div class="clear"></div>

		</div> <!-- End .content-box-header -->

		<div class="content-box-content">

			<div class="tab-content" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                 <!--
				<div class="notification attention png_bg">
					<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div>
						This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
					</div>
				</div>
			-->

			<table>

				<thead>
					<tr>
						<th><input class="check-all" type="checkbox" /></th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Action</th>
					</tr>

				</thead>

				<tfoot>
					<tr>
						<td colspan="6">
							<div class="bulk-actions align-left">
								<select name="dropdown">
									<option value="option1">Choose an action...</option>
									<option value="option2">Edit</option>
									<option value="option3">Delete</option>
								</select>
								<a class="button" href="#">Apply to selected</a>
							</div>

							<div class="pagination">
								<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
								<a href="#" class="number" title="1">1</a>
								<a href="#" class="number" title="2">2</a>
								<a href="#" class="number current" title="3">3</a>
								<a href="#" class="number" title="4">4</a>
								<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
							</div> <!-- End .pagination -->
							<div class="clear"></div>
						</td>
					</tr>
				</tfoot>

				<tbody>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Lorem ipsum dolor</td>
						<td><a href="#" title="title">Sit amet</a></td>
						<td>Consectetur adipiscing</td>
						<td>Donec tortor diam</td>
						<td>
							<!-- Icons -->
							<a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
							<a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
							<a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" /></td>
						<td>Lorem ipsum dolor</td>
						<td><a href="#" title="title">Sit amet</a></td>
						<td>Consectetur adipiscing</td>
						<td>Donec tortor diam</td>
						<td>
							<!-- Icons -->
							<a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
							<a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
							<a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" /></td>
						<td>Lorem ipsum dolor</td>
						<td><a href="#" title="title">Sit amet</a></td>
						<td>Consectetur adipiscing</td>
						<td>Donec tortor diam</td>
						<td>
							<!-- Icons -->
							<a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
							<a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
							<a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" /></td>
						<td>Lorem ipsum dolor</td>
						<td><a href="#" title="title">Sit amet</a></td>
						<td>Consectetur adipiscing</td>
						<td>Donec tortor diam</td>
						<td>
							<!-- Icons -->
							<a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
							<a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
							<a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" /></td>
						<td>Lorem ipsum dolor</td>
						<td><a href="#" title="title">Sit amet</a></td>
						<td>Consectetur adipiscing</td>
						<td>Donec tortor diam</td>
						<td>
							<!-- Icons -->
							<a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
							<a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
							<a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" /></td>
						<td>Lorem ipsum dolor</td>
						<td><a href="#" title="title">Sit amet</a></td>
						<td>Consectetur adipiscing</td>
						<td>Donec tortor diam</td>
						<td>
							<!-- Icons -->
							<a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
							<a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
							<a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" /></td>
						<td>Lorem ipsum dolor</td>
						<td><a href="#" title="title">Sit amet</a></td>
						<td>Consectetur adipiscing</td>
						<td>Donec tortor diam</td>
						<td>
							<!-- Icons -->
							<a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
							<a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
							<a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" /></td>
						<td>Lorem ipsum dolor</td>
						<td><a href="#" title="title">Sit amet</a></td>
						<td>Consectetur adipiscing</td>
						<td>Donec tortor diam</td>
						<td>
							<!-- Icons -->
							<a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
							<a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
							<a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
						</td>
					</tr>
				</tbody>

			</table>

		</div> <!-- End #tab1 -->

		<div class="tab-content default-tab" id="tab2">

			<form action="" method="POST" enctype="multipart/form-data">

				<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
					<p>
						<label>Name</label>
						<input class="text-input medium-input datepicker" type="text" id="medium-input" name="name" /> <!--<span class="input-notification error png_bg">Error message</span>-->
					</p>

					<p>
						<label>Price</label>
						<input class="text-input small-input" type="text" id="small-input" name="price" /><!-- <span class="input-notification success png_bg">Successful message</span> Classes for input-notification: success, error, information, attention 
						<br /><small>A small description of the field</small>-->
					</p>

					<p>
						<label>Image</label>
						<input class="text-input small-input" type="file" id="large-input" name="file" />
					</p>

					<p>
						<label>Category</label>              
						<select name="dropdown" class="small-input">
							<option value="Men">Men</option>
							<option value="Women">Women</option>
							<option value="Kids">Kids</option>
							<option value="Electronics">Electronics</option>
							<option value="Sports">Sports</option>
						</select> 
					</p>

					<p>
						<label>Tags</label>
						<input type="checkbox" name="checklist[]" value="Fashion" /> Fashion
						<input type="checkbox" name="checklist[]" value="Ecommerce" /> Ecommerce
						<input type="checkbox" name="checklist[]" value="Shop" /> Shop
						<input type="checkbox" name="checklist[]" value="Laptop" /> Laptop
						<input type="checkbox" name="checklist[]" value="Accessories" /> Accessories
						<input type="checkbox" name="checklist[]" value="Headphone" /> Headphone

					</p>
					
					<p>
						<label>Description</label>
						<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="8"></textarea>
					</p>

					<p>
						<input class="button" name='submit'  type="submit" value="Submit" />
					</p>

				</fieldset>

				<div class="clear"></div><!-- End .clear -->

			</form>

		</div> <!-- End #tab2 -->        

	</div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->

<div class="clear"></div>


<!-- Start Notifications -->
    <!--
	<div class="notification attention png_bg">
		<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
			Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
		</div>
	</div>

	<div class="notification information png_bg">
		<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
			Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
		</div>
	</div>

	<div class="notification success png_bg">
		<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
			Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
		</div>
	</div>

	<div class="notification error png_bg">
		<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
			Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
		</div>
	</div>
-->

<!-- End Notifications -->

<?php include('footer.php'); ?>
