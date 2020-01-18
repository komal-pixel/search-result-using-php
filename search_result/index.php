
<!DOCTYPE html>
<html>
<head>
	<title>Search result</title>
</head>
<body>
	<form align="center" method="post" action="search.php" style="margin-bottom:15px">
		<input type="text" name="valueToSearch">
		<button type="submit" name="save" onsubmit="myfunc();">search</button>
	</form>
	<script>
		function myfunc(){
			$('form').submit();
			window.location('search.php');
		}
	</script>
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
			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'crud');
			$query=mysqli_query($con,"SELECT * FROM students");
			while($res=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $res['id'];?></td>
			<td><?php echo $res['name'];?></td>
			<td><?php echo $res['email'];?></td>

		</tr>
<?php 	} ?>
 	</tbody>
</table>
</body>
</html>