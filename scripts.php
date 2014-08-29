	  <!-- JavaScripts -->
	  <script type="text/javascript" src="js/jquery-1.10.2.js"></script>                                                       
	  <script type="text/javascript" src="js/bootstrap.js"></script>

	<script>
	$(document).ready(function(){
		var option = "<?php echo $option; ?>";
		switch(option) {
			case 'opcion1': $('#opcion1').addClass('selected'); break;
			case 'opcion2': $('#opcion2').addClass('selected'); break;
			case 'opcion3': $('#opcion3').addClass('selected'); break;
			default: $('#opcion1').addClass('selected'); break;
		}
	});
	</script>