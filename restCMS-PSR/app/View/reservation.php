<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/js/reservation.js"></script>
<script>
	$( document ).ready(function() {
  		// Handler for .ready() called.
  		initialize();
  		
  		$( "#fldDate" ).datepicker();
	});
	
</script>

<h1>Reservation</h1>


<section id="form">
	<h2>Enter your data to reserve a table:</h2>
	<form>
		<div class="block1">
			<div class="formRow halfSize">
				<label for"fldName">Data:</label>
				<input type="text" id="fldName" name="fldName">
			</div>
			<div class="formRow halfSize">
				<label for"fldDate">Pessoas:</label>
				<select id="fldQuantity" name="fldQuantity">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
			<div class="formRow halfSize">
				<label for"fldEmail">Nome:</label>
				<input type="text" id="fldTelefone" name="fldTelefone">
			</div>
			<div class="formRow halfSize">
				<label for"fldDate">E-mail:</label>
				<input type="text" id="fldDate" name="fldDate">
			</div>
			<div class="formRow halfSize">
				<label for"fldQuantity">Telefone:</label>
				<input type="text" id="fldDate" name="fldDate">
			</div>
			<div class="formRow halfSize">
				<label for"fldObservation">Observations:</label>
				<textarea id="fldObservation">
				</textarea>
			</div>
			<a class="button">Reserve</a>
		</div>
		<div class="block2"> 

		</div>
	</form>
</section>
<h1>How to arrive?</h1>
<h2>Digite o endereço de partida e veja como chegar</h2>
<section id="map">
	
	<input type="text" id="fldHowToArrive" name="fldHowToArrive">
	<div class="map">
		<div id="map_canvas" style="float:left;width:70%;height:100%"></div>
		<div style="float:right;width:30%;height:100%;overflow:auto">
		<div id="directions_panel" style="width:100%"></div>
	</div>
</div>
</section>