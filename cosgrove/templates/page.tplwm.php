
<div id="page">

	<div id="header-wrapper" class="clearfix">
		<div id="header" class="container">
		<?php if ($logo): ?>
			<div class="four columns"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div>
		<?php endif; ?>
			<div class="twelve columns">
			<?php print render($page['header']); ?>
			</div>
		</div><!-- /#header -->
	</div><!-- /#header-wrapper-->

	<?php if($page['banner']): ?>
	<div id="banner" class="clearfix">
		<?php print render($page['banner']); ?>
	</div>
	<?php endif; ?>

	<div id="main-wrapper" class="clearfix">
		<?php if($is_front): ?>
			<div id="main" class="container">
		<?php endif; ?>
			<?php print render($page['content_top']); ?>

			<?php if(!$is_front): ?>
				<?php print render($page['content']); ?>
			<?php endif; ?>
			<?php print render($page['content_bottom']); ?>
		<?php if($is_front): ?>
			</div> <!-- /#main -->
		<?php endif; ?>
	</div><!-- /#main-wrapper -->

	<div class="container">
	<div class="sixteen columns">
	<?php print render($page['highlighted']); ?>
	<?php print $messages; ?>
	<?php if ($tabs = render($tabs)): ?>
	<div class="tabs"><?php print $tabs; ?></div>
	<?php endif; ?>
	<?php print render($page['help']); ?>
	<?php if ($action_links): ?>
		<ul class="action-links"><?php print render($action_links); ?></ul>
	<?php endif; ?>
	</div> <!-- /.sixteen -->
	</div>


	<div id="footer-wrapper" class="clearfix">
		<?php print render($page['footer_top']); ?>
		<div id="footer" class="container">
			<?php print render($page['footer']); ?>
		</div>
		<div id="footer_bottom" class="container">
			<?php print render($page['footer_bottom']); ?>
		</div>
	</div>

</div><!-- /#page -->

<?php print render($page['bottom']); ?>
