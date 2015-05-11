<?php
/*
Plugin Name: France Interactive Map
Plugin URI: http://wakonda.guru
Description: France Interactive Map
Version: 1.0
Author: Wakonda
Author URI: http://wakonda.guru
Short Name: france_map
*/
?>
  <link href="<?php echo osc_base_url()?>oc-content/plugins/france_map/jqvmap/css/jquery-jvectormap-2.0.2.css" media="screen" rel="stylesheet" type="text/css" />   
  <script src="<?php echo osc_base_url()?>oc-content/plugins/france_map/jqvmap/js/jquery-jvectormap-2.0.2.min.js" charset="utf-8" ></script>
  <script src="<?php echo osc_base_url()?>oc-content/plugins/france_map/jqvmap/js/maps/jquery.vmap.france.js" charset="utf-8" ></script>
  <script src="<?php echo osc_base_url()?>oc-content/plugins/france_map/jqvmap/js/jquery.vmap.colorsFrance.js" type="text/javascript"></script>
  <script type="text/javascript">
	$(document).ready(function() {
		$('#vmap').vectorMap({
		    map: 'france_fr',
			hoverOpacity: 0.5,
			hoverColor: false,
			backgroundColor: "transparent",
			borderColor: "#000000",
			selectedColor: "#EC0000",
			enableZoom: true,
			showTooltip: true,
            regionStyle: {
              initial: {
                fill: '#8d8d8d'
              }
            },
			series: {
				regions: [{
					values: couleurs,
					attribute: 'fill'
				}]
			},
		    onRegionClick: function(element, code)
		    {
				var map = $('#vmap').vectorMap('get', 'mapObject');
				window.location.replace('index.php?page=search&sRegion=' + map.getRegionName(code));
		    }
		});
	});
	</script>
	<style>
.jvectormap-region {
    stroke: #454545;
    stroke-width: 1;
}
	</style>
	<div id="vmap" style="max-width: 100%; height: 500px;"></div>


