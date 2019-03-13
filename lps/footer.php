	<?php $js = get_sheets('js'); ?>
	<?php foreach ($js as $value) : ?>
		<script src="<?= $value; ?>" crossorigin="anonymous"></script>
	<?php endforeach; ?>
	<script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

</body>
</html>