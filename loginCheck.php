<?
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$handle = $con->prepare('SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1');

 $handle->bindValue(1, $username);
 $handle->bindValue(2, $password);
 $handle->execute();

    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
 	
 	if($result){
 		header("Location: index.html");
		die();
 	}else{
 		header("Location: login.html");
 	}

?>