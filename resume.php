<?php
	require_once('_parts/site-header.php');
	require_once('_parts/page-header.php');
?>
<div class="page resume"></div>
<script type="application/javascript">
	$.getScript('/resources/js/resume<?php echo DEBUG ? '' : '.min' ?>.js', function () {
		window.TTWT.resume.init('<?= $MONGO_IDS['resume'] ?>');
	});
</script>
<?php
	require_once('_parts/page-footer.php');
	require_once('_parts/site-footer.php');
?>