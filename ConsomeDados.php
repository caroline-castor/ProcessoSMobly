<html>
<body>

<!-- Popula Comments!-->
<?php
require("ConectaBD.php");

$results=file_get_contents("http://jsonplaceholder.typicode.com/posts");
$results = json_decode($results);
for($i = 0; $i < count($results); $i++) {
		#pega cada elemento do array de json e insere no banco
		$userId = $results[$i]->{'userId'};
		$id= $results[$i]->{'id'};
		$title = $results[$i]->{'title'};
		$body = $results[$i]->{'body'};
		#verifica se já tem os dados no banco
		$query= sprintf("SELECT * FROM processoMobly.Posts WHERE id=".$id.";");
		#executa a query do select
		$dados = mysqli_query($link, $query) or die(mysqli_error($link));
		#verifica se há algum dado com o id igual
		if(!mysqli_num_rows($dados)>0){
			#cria a query do insert
			$query = sprintf("INSERT into processoMobly.Posts(id, user_id, title,body) VALUES ('$id','$userId','$title','$body');");
			#executa a query
			$dados = mysqli_query($link, $query) or die(mysqli_error($link));
		}
}

$results=file_get_contents("http://jsonplaceholder.typicode.com/comments");
$results = json_decode($results);
for($i = 0; $i < count($results); $i++) {
		#pega cada elemento do array de json e insere no banco
		$id = $results[$i]->{'id'};
		$postId = $results[$i]->{'postId'};
		$name = $results[$i]->{'name'};
		$email = $results[$i]->{'email'};
		$body = $results[$i]->{'body'};
		#verifica se ja tem os dados no banco
		$query=sprintf("SELECT * FROM processoMobly.Comments WHERE id=".$id.";");
		#executa a query do select
		$dados = mysqli_query($link, $query) or die(mysqli_error($link));
		if(!mysqli_num_rows($dados)>0){
			#cria a query do insert
			$query = sprintf("INSERT into processoMobly.Comments(id, post_id, nome, email, body) VALUES ('$id','$postId','$name','$email','$body');");
			#executa a query
			$dados = mysqli_query($link, $query) or die(mysqli_error($link));
		}
    }
	

?>
</body>
</html>