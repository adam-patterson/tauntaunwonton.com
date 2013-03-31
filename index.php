<?php
	require_once('_parts/site-header.php');
	require_once('_parts/page-header.php');
?>
<div class="page">
	<p>This is where I get to play. It's a showcase for past projects and a sandbox for experimentation. I've provided a <a href="/resume">resum&eacute;</a> for those that are interested in such things. In the future a blog will be added (custom built 'cause that's how I roll) and, if I get around to it, likely some other stuff.</p>
	<section class="projects"><h2>Projects</h2></section>
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