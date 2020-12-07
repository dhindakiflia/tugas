<?php
	$host = "ec2-54-84-98-18.compute-1.amazonaws.com";
	$user = "hgvykjhczsuqbr";
	$pass = "40969ce6295068c47bde230a95259e9cfe765e0afb7d3b6cd40c825367449f06";
	$port = "5432";
	$dbname = "dbol31q4upo16l";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>