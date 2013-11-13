<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/js/reservation.js"></script>
<script>
	$( document ).ready(function() {
  		// Handler for .ready() called.
  		initialize();
  		
  		$( "#fldDate" ).datepicker();
	});
	
</script>

<h1>Contact</h1>


<section id="form">
	<h2>Tem algum problema, diz ai!:</h2>
	<form>
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
			<div class="formRow">
				<label for"fldObservation">Observations:</label>
				<textarea id="fldObservation">
				</textarea>
			</div>
			<a class="button">Reserve</a>
		</div>
</section>
