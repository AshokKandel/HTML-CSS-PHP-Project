<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
<?php
//connecting to databse
include('config.php');

$query='SELECT * FROM service';
// - To read data we use mysqli_query(connection, query)
// - mysql connection to use 
// - query to be executed
// - For successful SELECT queries it will return a mysqli_result object

$result = mysqli_query($conn,$query);
?>
<h3 class="text-center">Data Information</h1>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th>s_name</th>
			<th>s_email</th>
			<th>s_phone</th>
			<th>s_message</th>
			<th>s_subject</th>
			<th>attachment</th>
			
		</tr>
		<?php
		// Here we are converting query result object to associative array
		// associative array is array type in php
		while($service=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
				<td><?php echo $service['s_name'];?></td>
				<td><?php echo $service['s_email'];?></td>
				<td><?php echo $service['s_phone'];?></td>
				<td><?php echo $service['s_message'];?></td>
				<td><?php echo $service['s_subjest'];?></td>
				<td><?php echo $service['attachment'];?></td>
				
				
			</tr>		
			<?php	
			}
			
			?>

	</table>
</div>
</body>
</html>