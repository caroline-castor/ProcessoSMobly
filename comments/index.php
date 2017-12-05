<html>
<body>

<!-- Popula Comments!-->
<?php
require('../ConectaBD.php');
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

ini_set( 'display_errors', 0 );

$query = sprintf("SELECT * FROM processoMobly.Comments where post_id=".$id.";");
$dados = mysqli_query($link, $query)or die(mysqli_error($link));
	
echo "
	  <table border='1'>
      <tr>
         <th>Post</th>
         <th>Name</th>
		 <th>Email</th>
		 <th>Body</th>
      </tr>";
	
	 while ($linha = mysqli_fetch_assoc($dados)){
	   
	  echo "<tr>";
      echo "<td>" . $linha['post_id'] . "</td>";
      echo "<td>" . $linha['nome'] . "</td>";
	  echo "<td>" . $linha['email'] . "</td>";
	  echo "<td>" . $linha['body'] . "</td>";
      echo "</tr>";
		
	}
		mysqli_close($link);
	?>
</table>
</body>
</html>