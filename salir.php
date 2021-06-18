<?php
	session_start();
	session_destroy();

	header("Location:../Fronten/index.html".SID);
?>