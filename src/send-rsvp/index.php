<?php
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0) {
    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
    if(strcasecmp($contentType, 'application/json') != 0) {
         die('error');
    }

    $content = trim(file_get_contents("php://input"));           
    $decoded = json_decode($content, true);
    if(!is_array($decoded)) {
        die('error');
    }
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
