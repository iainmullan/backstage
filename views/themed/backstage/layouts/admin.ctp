<html>
<head>
	<title>Backstage</title>
	<?php
		echo $html->css('blueprint/src/reset');
		echo $html->css('blueprint/src/forms');
		echo $html->css('blueprint/src/typography');
		echo $html->css('blueprint/src/ie');

		echo $html->css('ebotunes');

		echo $html->css('admin');
	?>
</head>
<body>
	<div id="header">
		<h1>Backstage</h1>
		<?php echo $html->link(__('Back to main site', true), Router::url('/')) ?>
	</div>
	<div id="content" class="container span-24">
		<div id="sidebar" class="span-4">
			<?php echo $this->renderElement('menus/admin'); ?>
			<?php echo $this->renderElement('menus/backstage', array('plugin'=>'backstage')); ?>
		</div>
		<div id="main" class="span-20 last">
			<?php $session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
	</div>
	<div class="clear"></div>
	<div id="footer">Powered by the <a href="http://backstage.ebotunes.com">Backstage Plugin</a></div>
</body>
</html>
