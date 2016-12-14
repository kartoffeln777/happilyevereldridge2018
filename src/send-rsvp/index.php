<?php
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0) {
    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
    if(strcasecmp($contentType, 'application/json') != 0) {
         die('error'.$contentType);
    }
    
    print "got to this point";

    $content = trim(file_get_contents("php://input"));           
    $rsvp = json_decode($content, true);
    if(!is_array($rsvp)) {
        die('error');
    }

    $first_name = strtolower($rsvp['first_name']);
    $last_name = strtolower($rsvp['last_name']);

    echo "hello $first_name $last_name";
    exit();
}
?>

<html>
<head>
   <title>Test</title>
</head>
   <body>
      <form action = "<?php $_PHP_SELF ?>" name = "myForm" method = "POST">
         First: <input type = "text" name = "first_name" />
         Last: <input type = "text" name = "last_name" />
         <input type = "submit" />
      </form>
   </body>
</html>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
   <script type="text/javascript" src="https://www.json.org/json2.js"></script>
   <script type="text/javascript">
     $(function() {
       var frm = $("myForm");
       frm.submit = function(e) {
           var dat = JSON.stringify(frm.serializeArray());

           alert("I am about to POST this:\n\n" + dat);

           $.post(
             frm.attr("action"),
             dat,
             function(data) {
               alert("Response: " + data);
             }
           );
       }
     });
   </script>
