<div id="page">


		<div id="header-wrapper">
			<div id="header" class="container">
				<div class="six columns">
				<?php if ($logo): ?>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
				<?php endif; ?>
				</div>
				<div id="nav-container" class="ten columns">
				<?php print render($page['header']); ?>
				</div>
			</div><!-- /#header -->
		</div><!-- /#header-wrapper -->



		<div id="content-wrapper">
  	    	<?php print $messages; ?>
  	    	<?php print render($page['help']); ?>
  	    	<?php if ($tabs = render($tabs)): ?>
  	      		<div class="tabs"><?php print $tabs; ?></div>
  	    	<?php endif; ?>
  	    	<?php if ($action_links): ?>
  	      		<ul class="action-links"><?php print render($action_links); ?></ul>
  	    	<?php endif; ?>

	    	<?php print render($page['content_top']); ?>

  	    	<?php print render($title_prefix); ?>
  	    	<?php if ($title): ?>
  	      		<h1 class="title" id="page-title"><?php print $title; ?></h1>
  	    	<?php endif;  ?>
  	    	<?php print render($title_suffix); ?>

	    	<?php print render($page['content']); ?> 
		</div> <!-- /#content-wrapper -->


    	<?php print render($page['content_bottom']); ?>


		<div id="footer-wrapper">
			<div id="footer" class="container">
				<div class="sixteen columns">
  					<?php print render($page['footer']); ?>
				</div>
			</div>
		</div>



</div><!-- /#page -->