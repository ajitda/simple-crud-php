<?php
include 'header.php';
$id = $_GET['id'];
if(isset($_GET['id'])){
$result = $mysqli->query("select * from profile where id='$id' limit 0,1");
$row = $result->fetch_assoc();
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
	$query = $mysqli->query("update profile set name='$name', email='$email', phone='$phone', address='$address', password='$password' where id='$id'");
		if($query){
			echo "<script>alert('Profile is Updated Successfully!')</script>";
		}else{
			echo "<script>alert('Profile is not Updated !')</script>";
		}
	}
	?>

	<form action="#" method="post">
		<div class="form-group">
			<label for="name">Your Name</label>
			<input type="text" id="name" value="<?php echo $row['name'] ?>" name="name" class="form-control" placeholder="Enter your name" required>
		</div>
		<div class="form-group">
			<label for="email">Your Email</label>
			<input type="text" id="email"  value="<?php echo $row['email'] ?>"name="email" class="form-control" placeholder="Enter your email" required>
		</div>
		<div class="form-group">
			<label for="phone">Your Phone</label>
			<input type="number" id="phone"  value="<?php echo $row['phone'] ?>" name="phone" class="form-control" placeholder="Enter your Phone No" required>
		</div>
		<div class="form-group">
			<label for="address">Your Address</label>
			<textarea id="address" name="address" class="form-control" placeholder="Enter your Address" required><?php echo $row['address'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="password">Your password</label>
			<input type="password" id="password"  value="<?php echo $row['password'] ?>" name="password" class="form-control" placeholder="Enter your password" required>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Update Profile</button>
	</form>
			
<?php
}else{
	echo "<script>location.href='index.php'</script>";
}
include 'footer.php';

?>