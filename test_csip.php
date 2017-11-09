<?php header('Access-Control-Allow-Origin: *'); 
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('#action-button').click(function() {
     alert("test");
     $.ajax({
        url: 'http://csip.engr.colostate.edu:8083/csip-climate/m/prism/1.0',
        beforeSend: setHeader,
         crossDomain: true,
        data: {
           format: 'jsonp'
        },
        error: function() {
           alert("error");
           //$('#info').html('<p>An error has occurred</p>');
        },
        dataType: 'json',
        success: function(data) {
           alet("Success!");
           //var $title = $('<h1>').text(data.talks[0].talk_title);
           //var $description = $('<p>').text(data.talks[0].talk_description);
           //$('#info')
           //   .append($title)
           //   .append($description);
        },
        type: 'POST'
     });
  });
});

function setHeader(xhr) {

  xhr.setRequestHeader('Authorization', token);
}

</script>
</head>
<body>

<button id="action-button">Click me to load info!</button>
<div id="info"></div>

<small>Demo created by <a href="https://twitter.com/AurelioDeRosa">Aurelio De Rosa</a></small>

</body>
</html>