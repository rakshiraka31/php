<?php
//including the database connection file
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
if (!$result) die ("Database fetch failed: " . mysqli_error($mysqli));
?>
<html>
<head>	
	<title>Homepage</title>
</head>
<body>
<a href="add.html"> Add new record ? </a>
	<br/><br/>
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
while ($row = mysqli_fetch_array($result)) {  
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> |


		 <a href=\"delete.php?identifier=$row[id]\" 
		      onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
