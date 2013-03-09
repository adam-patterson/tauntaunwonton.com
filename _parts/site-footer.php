	<script type="application/javascript">
		
		// TODO: other globals?
		window.TTWT = { 
			globals : {
				mongoService: 	'<?= MONGO ?>',
				mongoPageBase: 	'<?= MONGO_PAGES ?>',
				mongoAPIKey: 	'<?= MONGO_APIKEY ?>'
			}
		};
		
		$.getScript('/resources/js/app<?php echo DEBUG ? '' : '.min' ?>.js', function () {
			window.TTWT.app.init();
		});
	</script>
	</body>
</html>