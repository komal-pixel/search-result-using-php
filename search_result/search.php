<?php 
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'crud');
	if(isset($_POST['save'])){
	$valueToSearch=$_POST['valueToSearch'];

	$query=mysqli_query($con,"SELECT * FROM students WHERE CONCAT(id,name,email) LIKE '%".$valueToSearch."%'");
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>result output</title>
</head>
<body>
	<table align="center"  border="3px" cellspacing="2px" cellpdding="12px">
	<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($res=mysqli_fetch_array($query)){
		?>
		<tr>	
			<td><?php echo $res['id'];?></td>
			<td><?php echo $res['name'];?></td>
			<td><?php echo $res['email'];?></td>

		<?php } ?>

</body>
</html>