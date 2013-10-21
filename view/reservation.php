<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/js/reservation.js"></script>
<script>
	$( document ).ready(function() {
  		// Handler for .ready() called.
  		initialize();
	});
</script>

<section id="form">
	<form>
		<label for"fldName">Name:</label>
		<input type="text" id="fldName" name="fldName">
		<label for"fldEmail">Email:</label>
		<input type="text" id="fldEmail" name="fldEmail">
		<label for"fldQuantity">Quantity:</label>
		<select id="fldQuantity" name="fldQuantity">
			<option>1</option>
		</select>
	</form>
</section>
<section id="map">
	<div id="map_canvas" style="float:left;width:70%;height:100%"></div>
<div style="float:right;width:30%;height:100%;overflow:auto">

  <div id="directions_panel" style="width:100%"></div>
</div>
</section>