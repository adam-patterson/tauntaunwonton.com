<?php
	require_once('_parts/site-header.php');
	require_once('_parts/page-header.php');
?>
<div class="page">
	<div class="projects"></div>
</div>
<script type="application/javascript">
	$.getScript('/resources/js/projects<?php echo DEBUG ? '' : '.min' ?>.js', function () {
		window.TTWT.projects.init('<?= $MONGO_IDS['projects'] ?>');
	});
</script>
<?php
	require_once('_parts/page-footer.php');
	require_once('_parts/site-footer.php');
?>