<?php

include 'header.php';

?>
			
	<h1>Create Profile <a href="index.php" class="btn btn-primary pull-right">Back</a></h1>
	<br>
	<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$query = $mysqli->query("insert into profile values('','$name','$email','$phone','$address','$password')");
		if($query){
			echo "<script>alert('Profile is Created Successfully!')</script>";
		}else{
			echo "<script>alert('Profile is not Created !')</script>";
		}
	}
	

	?>
	<form action="#" method="post">
		<div class="form-group">
			<label for="name">Your Name</label>
			<input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
		</div>
		<div class="form-group">
			<label for="email">Your Email</label>
			<input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required>
		</div>
		<div class="form-group">
			<label for="phone">Your Phone</label>
			<input type="number" id="phone" name="phone" class="form-control" placeholder="Enter your Phone No" required>
		</div>
		<div class="form-group">
			<label for="address">Your Address</label>
			<textarea id="address" name="address" class="form-control" placeholder="Enter your Address" required></textarea>
		</div>
		<div class="form-group">
			<label for="password">Your password</label>
			<input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Create Profile</button>
	</form>
			
<?php

include 'footer.php';

?>