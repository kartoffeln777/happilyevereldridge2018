<?php
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0) {
    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
    if(strcasecmp($contentType, 'application/json') != 0) {
         die('error: '.$contentType);
    }
    
    $content = trim(file_get_contents("php://input"));           
    $obj = json_decode($content, true);
    if(!is_array($obj)) {
        die('error');
    }

    print_r($obj);
    exit();

    foreach($obj->response->docs as $rsvp) {
        $first_name = strtolower($rsvp['first_name']);
	$last_name = strtolower($rsvp['last_name']);
	break;
    }
    echo "hello $first_name $last_name";
    exit();
}
?>

<html>
<head>
   <title>Test</title>
</head>
   <body>
      <form id="myForm" action="" name="myForm">
         First: <input name="first_name" type="text"/>
         Last: <input name="last_name" type="text"/>
         <input id="submit" type="submit" />
      </form>
   </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script type="text/javascript">
function convertFormToJSON(form) {
    var data = form.serializeArray();
    var json = {};
    jQuery.each(data, function() {
        json[this.name] = this.value || '';
    });
    return JSON.stringify(json);
}
$(function() {
    $("#myForm").submit(function() {
        //var formData = convertFormToJSON($("#myForm"));
        var testObj = {first_name:"michael",last_name:"jones"};
	var formData = JSON.stringify(testObj);    
        console.log(formData);
	$.ajax({
	    url: 'https://alisonmichaelwedding.com/send-rsvp/',
            type : "POST",
            contentType : 'application/json',
	    data : formData,
	    processData : false,
	    success : function(result) {
                console.log(result);
            },
            error: function(xhr, resp, text) {
               console.log(xhr, resp, text);
            }
        });
        return false;
    });
});
</script>
