<?php
	require_once('_parts/site-header.php');
?>
<div class="page resume"></div>
<script type="application/javascript">
	$.getScript('/resources/js/resume<?php echo DEBUG ? '' : '.min' ?>.js', function () {
		window.TTWT.resume.init('<?= $MONGO_IDS['resume'] ?>');
	});
</script>
<script type="application/javascript" src="/lib/marked/lib/marked.js"></script>
<?php
	require_once('_parts/site-footer.php');
?>