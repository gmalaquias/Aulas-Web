<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?=\Mvc\Layout::getTitle();?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<link rel="icon" type="image/png" href="<?=ASSETS;?>/img/profile.jpg">

<!-- Latest compiled and minified JavaScript -->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

</head>
<body>


<?php echo \Mvc\Layout::getContent(); ?>


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js"></script>
 <script>

function initialize() {
  var myLatlng = new google.maps.LatLng(-22.946817, -47.313862);
  var mapOptions = {
    zoom: 15,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('maps'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
 </script>

</body>
</html>







