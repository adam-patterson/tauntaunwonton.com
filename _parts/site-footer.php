	<script type="application/javascript">
		
		// TODO: other globals?
		window.TTWT = { 
			globals : {
				mongoService: '<?= MONGO ?>'
			}
		};
		
		$.getScript('/resources/js/app.min.js', function () {
			window.TTWT.app.init();
		});
	</script>
	</body>
</html>