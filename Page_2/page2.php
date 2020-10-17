<?php 

	include_once 'connection.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>page2</title>
	<style type="text/css">
		table{
			width: 400px;
			border-spacing: 70px;
		}

		th{
			text-align:  left;
		}
		table,th,td{
			border:  2px solid #000; 
			table-layout: fixed;
			border-collapse: collapse;
		 	padding: 12px 30px;
		 	word-break:break-all;
		}

		th,td{
			width:150px;
			padding: 10px;
			font-family: monospace;
		}

	</style>

</head>
<body>
<table>
	<h2 align="center">The data from the database</h2>
	<tr>
		<th>Reveiwer's Name</th>
		<th>Author's Name</th>
		<th>Name of the book</th>
		<th>Genre</th>
		<th>Publisher</th>
		<th>Year of Publication</th>
		<th>Review</th>
	</tr>


</table>

	<?php
		$sql = "SELECT * FROM reviewformtable;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		echo "<table>";
		if($resultCheck>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>". $row["username"] . "</td><td>"
				. $row["authorname"]. "</td><td>"
				. $row["bookname"]. "</td><td>". 
				$row["genre"]. "</td><td>".
				 $row["publisher"]. "</td><td>"
				 . $row["publicationyear"]. "</td><td>"
				 . $row["bookreview"]. "</td></tr>";
			}
			echo "</table>";

		}
		else{
			echo "0 result";
		}
		$conn->close();
	?>


</body>
</html>