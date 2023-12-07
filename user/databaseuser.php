<?php

session_start();

if ($_SESSION['level'] == '') {
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../logout.php";</script>';
}

// Database
include_once '../database.php';

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function cari($keyword)
{
	$query = "SELECT * FROM menu WHERE kategori LIKE '%$keyword%'";
	return query($query);
}
