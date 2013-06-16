<div id="global">
	

	<!-- .......................... Header -->
	<div id="headerWrap">
		<div id="headerUpper" class="row">
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php endif; ?>
	
			<?php print render($page['headerUpper']); ?>
		</div><!-- /headerUpper -->
		
		<?php if($page['headerHero']): ?>
		<div id="headerHero">
			<?php print render($page['headerHero']); ?>
		</div><!-- /headerHero -->
		<? endif ?>
		
		<div id="headerLower" class="row">
			<?php print render($page['headerLower']); ?>
		</div><!-- /headerLower -->	
	</div><!-- /headerWrap -->
	
	
	
	<!-- .......................... Content -->
	
	<!-- native feature set -->
	<div class="row">
		<?php print $messages; ?>
	</div>
	<!-- /native feature set -->
	
	<div id="contentWrap">
		<div id="contentUpper" class="row">
			<?php print render($page['contentUpper']); ?>
		</div><!-- /contentUpper -->
		
		<div id="content" class="row">
			<?php print render($page['help']); ?>
			
			<?php print render($title_prefix); ?>
			
	        <?php if ($title): ?>
				<h1 class="title" id="page-title"><?php print $title; ?></h1>
			<?php endif; ?>
	
	        <?php print render($title_suffix); ?>
	
			<?php if ($tabs = render($tabs)): ?>
				<div class="tabs"><?php print $tabs; ?></div>
			<?php endif; ?>
		
			<?php if ($action_links): ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>
			
			<?php print render($page['content']); ?>
	
			<?php print $feed_icons; ?>
		</div><!-- /content -->
		
		<?php if($page['contentLower']): ?>
		<div id="contentLower" class="row">
			<?php print render($page['contentLower']); ?>
		</div><!-- /contentLower -->
		<? endif ?>	
	</div><!-- /contentWrap -->
	
	
	
	<!-- .......................... Footer -->
	<div id="footerWrap">
		<div id="footerUpper" class="row">
			<?php print render($page['footerUpper']); ?>
		</div><!-- /footerUpper -->
		
		<div id="footerLower" class="row">
			<?php print render($page['footerLower']); ?>		
		</div><!-- /footerLower -->	
	</div><!-- footerWrap -->	


</div><!-- /global -->