<?php
if( $_POST['first_name'] && $_POST['last_name'] ) {
    if (preg_match("/[^A-Za-z'-]/",$_POST['first_name']) || preg_match("/[^A-Za-z'-]/",$_POST['last_name'])) {
        die ("error");
    }
    $first_name = strtolower($_POST['first_name']);
    $last_name = strtolower($_POST['last_name']);

    $credentials = parse_ini_file("/srv/db.ini");
    $sql_connection = new mysqli($credentials['host'],$credentials['username'],$credentials['password'],$credentials['db']);
    if ($sql_connection->connect_errno) {
        die("error");
    }

    $query = "SELECT * FROM guest_list WHERE first_name = '$first_name' AND last_name = '$last_name'";
    $results = $sql_connection->query($query) or die('error');
    $row_count = $results->num_rows;
    $results->close();

    if($row_count > 0) {
        echo "already_guest";
    } else {
        $query = "SELECT * FROM invited_list WHERE first_name = '$first_name' AND last_name = '$last_name'";
        $results = $sql_connection->query($query) or die('error');
        $row_count = $results->num_rows;
        $results->close();

	if($row_count == 0) {
            echo "not_invited";
        } else {
            echo "can_rsvp";
        }
    }
    exit();
}
?>
<html>
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         First: <input type = "text" name = "first_name" />
         Last: <input type = "text" name = "last_name" />
         <input type = "submit" />
      </form>
   </body>
</html>
