<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = settings('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo settings('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php plugin_header(); ?>

    <!-- Stylesheets -->
    <?php
    queue_css('style');
    display_css();
    ?>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- JavaScripts -->
    <?php display_js(); ?>

	<!-- Slab Text -->
	
	<?php if ($bodyclass=='browse'): ?>
	queue_css('slabtext.css');
	queue_js('jquery.slabtext.js', $dir = 'js');
	<script>
	
	</script>
	<?php endif; ?>
	
	<!-- End Slab Text -->
	
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php plugin_body(); ?>
    
	<div id="header-wrapper">
        <div class="header clear">
            <?php plugin_page_header(); ?>
            <div id="site-title"><?php echo link_to_home_page(custom_display_logo()); ?></div>

			<div id="search-container">
                <?php echo simple_search(); ?>
                <?php echo link_to_advanced_search(); ?>
            </div><!-- end search -->

        	<div id="primary-nav">
	            <ul class="navigation">
	            	<?php 
					echo public_nav_main(
					    array(
					        'Items' => uri('items'), 
					        'Collections' => uri('collections'),
							'Exhibits'=> uri('exhibits'),
					    )
					);
					?>
	            </ul>
	        </div>
		</div>
	<!-- end primary-nav -->
	        <?php echo custom_header_image(); ?>

		</div><!-- end header -->


        <div id="content" class="clear">
            <?php plugin_page_content(); ?>
