<?php
	//$db = new mysqli("localhost","pablo","Qwerty1.6","menuDeck");
$db = new mysqli("localhost","root","","coordinaciongfs");
	if (mysqli_connect_errno()) {
		echo "No se puede conectar 🚫";
	}
?>