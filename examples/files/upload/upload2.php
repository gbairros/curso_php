<?php 

$dir = "imagens"; 
// recebendo o arquivo multipart 
$file = $_FILES["arquivo"]; 
$photo_path = $dir."/".$file["name"];

$email = $_POST['email'];

// Move o arquivo da pasta temporaria de upload para a pasta de destino 
if (move_uploaded_file($file["tmp_name"], $photo_path)) { 
	$con = new PDO('mysql:host=localhost;dbname=uploaddb', "root", "serpro");
	$sql = "INSERT INTO avatars (email, photo_path) VALUES (:email, :photo_path)";
	$stmt = $con->prepare($sql);
	$result = $stmt->execute(["email"=>$email, "photo_path"=>$photo_path]);
} 
else { 
    echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
}           
?>
