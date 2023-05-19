<?php
	$db = new mysqli("localhost","root","","sugerencias");
	if (mysqli_connect_errno()) {
		echo "No se puede conectar 🚫";
	}
?>