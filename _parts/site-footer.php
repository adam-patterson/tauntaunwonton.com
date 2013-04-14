	<script type="text/javascript">
		
		// TODO: other globals?
		window.TTWT = { 
			globals : {
				debug:			'<?= DEBUG ?>',
				mongoService: 	'<?= MONGO ?>',
				mongoPageBase: 	'<?= MONGO_PAGES ?>',
				mongoAPIKey: 	'<?= MONGO_APIKEY ?>'
			}
		};
		
		$.getScript('/resources/js/app<?php echo DEBUG ? '' : '.min' ?>.js', function () {
			window.TTWT.app.init();
		});
	</script>
	<script type="text/javascript" src="/lib/marked/lib/marked.js"></script>
	</body>
</html>