<?php $basename = basename($_SERVER['REQUEST_URI']);
$productmenu = array('addProduct.php','manageProducts.php','categories.php','tags.php');
$usermenu = array('adduser.php','manage.php');

$order = array('order.php');
?>
<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

	<h1 id="sidebar-title"><a href="#">Simpla Panel</a></h1>

	<!-- Logo (221px wide) -->
	<a href="index.php"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>

	<!-- Sidebar Profile links -->
	<div id="profile-links">
		Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
		<br />
		<a href="#" title="View the Site">View the Site</a> | <a href="#" title="Sign Out">Sign Out</a>
	</div>        

	<ul id="main-nav">  <!-- Accordion Menu -->

		<li>
			<a href="http://www.google.com/" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
				Dashboard
			</a>       
		</li>

		<li> 
			<a href="#" class="nav-top-item <?php if(in_array($basename,$productmenu)):?>current<?php endif; ?>"> <!-- Add the class "current" to current menu item -->
				Product
			</a>
			<ul>
				<li><a <?php if($basename=='addProduct.php'): ?>class="current"<?php endif;?> href="addProduct.php">Add Product</a></li>


				<li><a <?php if($basename=='manageProducts.php'): ?>class="current"<?php endif;?> href="manageProducts.php">Manage Product</a></li> <!-- Add class "current" to sub menu items also -->
				
				<li><a <?php if($basename=='categories.php'): ?>class="current"<?php endif;?> href="categories.php">Manage Categories</a></li>
				
				<li><a <?php if($basename=='tags.php'): ?>class="current"<?php endif;?> href="tags.php">Manage Tags</a></li>
			</ul>
		</li>

		<li>
			<a href="#" class="nav-top-item <?php if(in_array($basename,$usermenu)):?>current<?php endif; ?>">
				User
			</a>
			<ul>
				<li><a <?php if($basename=='adduser.php'): ?>class="current"<?php endif;?> href="adduser.php">Create a new User</a></li>
				<li><a <?php if($basename=='manage.php'): ?>class="current"<?php endif;?> href="manage.php">Manage User</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="nav-top-item <?php if(in_array($basename,$order)):?>current<?php endif; ?>">
				Order
			</a>
			<ul>
				<li><a <?php if($basename=='order.php'): ?>class="current"<?php endif;?> href="order.php">Order List</a></li>
				
			</ul>
		</li>
		<li>
			<a href="#" class="nav-top-item">
				Settings
			</a>
			<ul>
				<li><a href="#">General</a></li>
				
			</ul>
		</li>      

	</ul> <!-- End #main-nav -->

	<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

		<h3>3 Messages</h3>

		<p>
			<strong>17th May 2009</strong> by Admin<br />
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
			<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
		</p>

		<p>
			<strong>2nd May 2009</strong> by Jane Doe<br />
			Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
			<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
		</p>

		<p>
			<strong>25th April 2009</strong> by Admin<br />
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
			<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
		</p>

		<form action="#" method="post">

			<h4>New Message</h4>

			<fieldset>
				<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
			</fieldset>

			<fieldset>

				<select name="dropdown" class="small-input">
					<option value="option1">Send to...</option>
					<option value="option2">Everyone</option>
					<option value="option3">Admin</option>
					<option value="option4">Jane Doe</option>
				</select>

				<input class="button" type="submit" value="Send" />

			</fieldset>

		</form>

	</div> <!-- End #messages -->


		</div></div> <!-- End #sidebar -->