<?php 

$con = new PDO('mysql:host=localhost;dbname=uploaddb', "root", "serpro");
$sql = "SELECT * FROM avatars";
$stmt = $con->prepare($sql);
$rs = $stmt->execute();
$dados = $stmt->fetchAll();

?>

<html>
<body>
	<h2>Imagens</h2>
	<?php
		foreach($dados as $item){
			echo $item['id']." - ";
			echo $item['email']." - ";
			echo "<a href=\"".$item['photo_path']."\"> Foto </a><br>";
				
				
		}
	?>
	
</body>
</html>
