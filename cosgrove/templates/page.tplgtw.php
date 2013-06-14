<div id="page">

		<div id="header-wrapper">
			<div id="header" class="container">
				<?php if ($logo): ?>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
				<?php endif; ?>
				<?php print render($page['header']); ?>
			</div><!-- /#header -->
		</div><!-- /#header-wrapper -->

		<div id="banner-wrapper">
			<div id="banner" class="maxcontainer">
				<?php print render($page['banner']); ?>
			</div>
		</div>
		
		<div class="container">
			<?php print $messages; ?>
			<?php if ($tabs = render($tabs)): ?>
				<div class="tabs"><?php print $tabs; ?></div>
			<?php endif; ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>
			<?php // print render($page['highlighted']); ?>
			<?php // print $breadcrumb; ?>
		</div>

		<!-- container class removed to allow display suite overrride -->	
			<?php print render($page['content_top']); ?>
			
			<?php if (!$is_front): ?>
				<?php if ($title): ?>
					<?php print render($title_prefix); ?>
					<h1 class="title" id="page-title"><?php print $title; ?></h1>
					<?php print render($title_suffix); ?>
				<?php endif;  ?>
				<?php print render($page['content']); ?>
			<?php endif; ?>
		<!-- #container class removed to allow display suite overrride -->
		
		<div id="feature-wrapper">
			<div id="feature" class="container">
				<?php print render($page['feature']); ?>
			</div>
		</div>

		<div class="container">
		<?php print render($page['content_bottom']); ?>
		</div>

		<div id="footer-wrapper">
			<div id="footer" class="container">
			<?php print render($page['footer']); ?>
			</div>
		</div>

</div>
<?php print render($page['bottom']); ?>
