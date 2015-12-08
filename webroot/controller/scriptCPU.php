<!-- Scripts --> 
	<!-- Slider GHz --> 

	  <script>
	  $(function() {
	    $( "#slider-range-min" ).slider({
	      range: "min",
	      value: 2,
	      min: 1,
	      max: 6,
	      slide: function( event, ui ) {
	        $( "#power" ).val( "GHz " + ui.value );
	      }
	    });
	    $( "#power" ).val( "GHz " + $( "#slider-range-min" ).slider( "value" ) );
	  });
	  </script>

	<!-- Menu region --> 

	   <script>
	  $(function() {
	    $( "#region" ).selectmenu();
	  });
	  </script>

  	<!-- Menu socket --> 

	  <script>
	  $(function() {
	    $( "#socket" ).selectmenu();
	  });
	  </script>

	<!-- Menu etat --> 
  
	  <script>
	  $(function() {
	    $( "#etat" ).selectmenu();
	  });
	  </script>

	<!-- Spinner Prix -->
	  <script>
	  $(function() {
	  	
	    $( "#spinner" ).spinner({
	    
	      min: 5,
	      max: 2500,
	      step: 10,
	      start: 1000,
	      numberFormat: "C",
	      culture:"fr-FR"
	    });
	  });
	  </script>

