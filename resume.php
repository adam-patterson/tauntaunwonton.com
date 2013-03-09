<?php
	require_once('_parts/site-header.php');
?>
<div class="page resume"></div>
<script type="application/javascript">
	$.getScript('/resources/js/resume<?php echo DEBUG ? '' : '.min' ?>.js', function () {
		window.TTWT.resume.init();
	});
</script>
<?php
	require_once('_parts/site-footer.php');
?>