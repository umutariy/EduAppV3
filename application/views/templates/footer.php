		<!-- Javascript -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('js/materialize.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/materialize.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/test.js');?>"></script>

		<script>
			$(document).ready(function() {
				$('select').material_select();
			});
		</script>

		<!-- Date Picker -->
		<script>
			$('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 15, // Creates a dropdown of 15 years to control year,
			    today: 'Today',
			    clear: 'Clear',
			    close: 'Ok',
			    closeOnSelect: false // Close upon selecting a date,
			});
		</script>

		<!-- Time Picker -->
		<script>
			$('.timepicker').pickatime({
			    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
			    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
			    twelvehour: false, // Use AM/PM or 24-hour format
			    donetext: 'OK', // text for done-button
			    cleartext: 'Clear', // text for clear-button
			    canceltext: 'Cancel', // Text for cancel-button
			    autoclose: false, // automatic close timepicker
			    ampmclickable: true, // make AM PM clickable
			    aftershow: function(){} //Function for after opening timepicker
			});

		</script>
		<center><em>&copy; 2018</em></center>
	</body>
	</html>