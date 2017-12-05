<html>
<body>

<!-- Popula Posts!-->
<?php
require('ConsomeDados.php');

if (isset($_GET['id'])){
    echo $_GET['id'];
}

ini_set( 'display_errors', 0 );
$query = sprintf("SELECT * FROM processoMobly.Posts;");
$dados = mysqli_query($link, $query)or die(mysqli_error($link));

echo "
	  <table border='1'>
      <tr>
         <th>Id</th>
         <th>Titulo</th>
		 <th>Body</th>
		 <th>Comments</th>
      </tr>";
	while($linha = mysqli_fetch_assoc($dados)){ 
	   
	  echo "<tr>";
      echo "<td>" . $linha['id'] . "</td>";
      echo "<td>" . $linha['title'] . "</td>";
	  echo "<td>" . $linha['body'] . "</td>";
	  echo "<td><a href='{".$linha['id']."}/comments'>Comments</a></td>";
      echo "</tr>";
		
	}
	mysqli_close($link);
	?>
</table>
</body>
</html>