	<?php $js = get_sheets('js'); ?>
	<?php foreach ($js as $value) : ?>
		<script src="<?= $value; ?>" crossorigin="anonymous"></script>
	<?php endforeach; ?>

</body>
</html>