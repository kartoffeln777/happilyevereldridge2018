<?php
$credentials = parse_ini_file("/srv/db.ini");
$sql_connection = new mysqli($credentials['host'],$credentials['username'],$credentials['password'],$credentials['db']);
if ($sql_connection->connect_errno) {
    printf("Connect failed: %s\n", $sql_connection->connect_error);
    exit();
}

$query = "SELECT * FROM guest_list";
$results = $sql_connection->query($query) or die('Error');
$row_count = $results->num_rows;
$results->close();
if($row_count > 0) {
	echo "already_guest";
} else {
	$query = "SELECT * FROM invited_list";
	$results = $sql_connection->query($query) or die('Error');
	$row_count = $results->num_rows;
	$results->close();
	if($row_count == 0) {
		echo "not_invited";
	} else {
		echo "can_rsvp";
	}
}
?>
