<!DOCTYPE html>
<html>
<head>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
<script src="jquery-2.1.3.min.js" type="text/javascript" ></script>
<script src="materialize/js/materialize.js" type="text/javascript"></script>


</head>
<body>
<div class="container">
<div class="row">

<button data-target="modal" class="btn modal-trigger">Modal</button>

  <!-- Modal Structure -->
  <div id="modal1 "class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
</div></div>

<script>

$(document).ready(function() {
	$('.modal-trigger').leanmodal();
	$('.modal').modal();
     
});

</script>
</body>
</html>