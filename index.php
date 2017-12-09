<?php

include 'header.php';

?>
			
			<h1>Crud with PHP <a href="create.php" class="btn btn-primary pull-right">Add New</a></h1>
			<br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="20">Sl</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Password</th>
						<th width="150">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = $mysqli->query("select * from profile");
					$i = 1;
					while($row = $query->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td>
							<a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Update</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
<?php

include 'footer.php';

?>